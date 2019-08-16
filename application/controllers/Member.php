<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->ceklogin();
		$this->load->model('M_member');
    }

    private function ceklogin(){
        if(! $this->session->userdata('username')){
            redirect('login');
        }
    }

    public function index(){
        $data['member'] = $this->M_member->T_LIST();
        $this->load->view('header');
        $this->load->view('member',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->M_member->hapus($id);
        redirect('member','refresh');
    }

    public function input(){
        $this->load->view('header');
        $this->load->view('member_form');
        $this->load->view('footer');
    }

    public function edit($id){
        $data['member'] = $this->M_member->get_a($id);
        $this->load->view('header');
        $this->load->view('member_edit',$data);
        $this->load->view('footer');
    }

    public function edit_act(){
        $this->M_member->edit();
        redirect('member');
    }

    public function input_act(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );
        $this->M_member->insert($data);
        redirect('member','refresh');
    }


    
}