<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
		$this->load->model('M_user', 'user');
    }

    public function index()
    {
        if (! $this->session->userdata('login'))
        {
            $this->load->view('login/index');
        } 
        else
        {
            redirect(site_url('dashboard'), 'refresh');
        }
    }

    public function proses()
    {
        $data = $this->user->cek();

        if ( $data['status'] )
        {
            $this->session->set_userdata('login', array('username' => $data['user']['username'], 'role' => $data['user']['role']));
            redirect(site_url(), 'refresh');
        }
        else 
        {
            redirect('login', 'refresh');
        }        
    }

}