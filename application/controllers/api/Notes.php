<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Notes extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index_get()
    {
        $data = $this->db->get('notes')->result_array();
        if ($data) {
            return
                $this->response([
                    'status' => true,
                    'message' => 'Successfuly',
                    'data' => $data
                ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function notebyuserid_get()
    {
        $id = $this->get('user_id');
        $this->db->where('user_id', $id);
        $data = $this->db->get('notes')->result_array();
        if ($data) {
            return
                $this->response([
                    'status' => true,
                    'message' => 'Successfuly',
                    'data' => $data
                ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'No users were found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_post()
    {
        $query = array(
            'note' => $this->post('note'),
            'user_id' => $this->post('user_id')
        );

        $data = $this->db->insert('notes', $query);
        if ($data) {
            return
                $this->response([
                    'status' => true,
                    'message' => 'Successfuly',
                ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Can not insert user'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function edit_post()
    {
        $id = $this->post('id');

        $query = array(
            'note' => $this->post('note')
        );

        $this->db->where('id', $id);
        $data = $this->db->update('notes', $query);
        if ($data) {
            return
                $this->response([
                    'status' => true,
                    'message' => 'Successfuly',
                ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Can not insert user'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function delete_post()
    {
        $id = $this->post('id');

        $query = array(
            'note' => $this->post('note')
        );

        $this->db->where('id', $id);
        $data = $this->db->delete('notes', $query);
        if ($data) {
            return
                $this->response([
                    'status' => true,
                    'message' => 'Successfuly',
                ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Can not insert user'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
