<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Authentication extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login_post()
    {
        $username = $this->post('username');
        $password = md5($this->post('password'));

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $data = $this->db->get('users')->row_array();
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

    public function register_post()
    {
        $query = array(
            'username' => $this->post('username'),
            'password' => md5($this->post('password')),
            'role' => "admin"
        );

        $data = $this->db->insert('users', $query);
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
