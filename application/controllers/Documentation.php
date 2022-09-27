<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Documentation extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $data['judul'] = "Documentation";
        $this->load->view('templates/header', $data);
        $this->load->view('documentation/index');
        $this->load->view('templates/footer');
    }
}
