<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Configuration extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $data['judul'] = "Configuration";
        $this->load->view('templates/header', $data);
        $this->load->view('configuration/index');
        $this->load->view('templates/footer');
    }
}
