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
        if (! $this->session->userdata('username'))
        {
            $this->load->view('login');
        } 
        else
        {
            redirect(site_url('dashboard'), 'refresh');
        }
    }

    public function proses()
    {
        $hasil = $this->user->cek();

        if ( $hasil )
        {
            $username = $this->input->post('username');

            $this->session->set_userdata(array('username' => $username));
            redirect(site_url(), 'refresh');
        }
        else 
        {
            redirect('login', 'refresh');
        }        
    }

}