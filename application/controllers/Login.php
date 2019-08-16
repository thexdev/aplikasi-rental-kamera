<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
		$this->load->model('M_user');
    }
public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

    public function index(){
        $this->load->view('login');
    }

    public function proses(){
        $this->load->model('M_user');
        $hasil = $this->M_user->cek();
        if(!$hasil){
            redirect('login');
        }else{
            $user = $this->input->post('username');
            $this->session->set_userdata(array('username'=>$user));
            redirect('sewa/input');
        }        
    }
}