<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->ceklogin();
		$this->load->model('M_sewa');
    }

    private function ceklogin(){
        if(! $this->session->userdata('username')){
            redirect('login');
        }
    }

    public function index(){
        $data['sewa'] = $this->M_sewa->T_LIST();
        $this->load->view('header');
        $this->load->view('sewa',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->M_barang->hapus($id);
        redirect('sewa','refresh');
    }

    public function input(){
        $this->load->helper('form');
        $this->load->model('M_member');
        $this->load->model('M_barang');
        $data = array();
        $data['member'] = $this->M_member->list_cb();
        $data['barang'] = $this->M_barang->list_cb();
        $this->load->view('header');
        $this->load->view('sewa_form',$data);
        $this->load->view('footer');
        
    }

    public function input_act(){
        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'id_member' => $this->input->post('id_member'),
            'tgl_sewa' => date('Y-m-d'),
            'lama' => $this->input->post('lama'),
            'jml' => $this->input->post('jml'),
            'aktif' => '1'
            
        );
        $this->M_sewa->insert($data);
        redirect('sewa','refresh');
    }

    public function kembali($id){
        $this->M_sewa->kembali($id);
        redirect('sewa','refresh');
    }
    
}