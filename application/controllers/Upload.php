<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('test/upload_form', array('error' => ' ' ));
    }

    public function do_upload()
    {
        $config['upload_path']   = './uploads/image';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 1000;
        $config['max_width']     = 3000;
        $config['max_height']    = 3000;

        $this->load->library('upload', $config);
        var_dump($this->input->post('userfile'));
    }

}