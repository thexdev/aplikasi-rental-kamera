<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	public function __construct()
	{
        parent::__construct();
        $this->ceklogin();
		$this->load->model('M_barang');
    }
    private function ceklogin(){
        if(! $this->session->userdata('username')){
            redirect('login');
        }
    }

    public function index(){
        $data['barang'] = $this->M_barang-> T_LIST();
        $this->load->view('header');
        $this->load->view('barang',$data);
        $this->load->view('footer');
    }

    public function hapus($id){
        $this->M_barang->hapus($id);
        redirect('barang','refresh');
    }

    public function input(){
        
        $this->load->view('header');
        $this->load->view('barang_form');
        $this->load->view('footer');
    }

    public function edit($id){
        $data['barang'] = $this->M_barang->get_a($id);
        $this->load->view('header');
        $this->load->view('barang_edit',$data);
        $this->load->view('footer');
    }


    public function edit_act(){
        $this->M_barang->edit();
        redirect('barang');
    }
    public function input_act(){
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'ket' => $this->input->post('ket')
        );
        $this->M_barang->insert($data);
        redirect('barang','refresh');
    }


    
}