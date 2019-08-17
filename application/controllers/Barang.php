<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    private $_pageDetail;

	public function __construct()
	{
        parent::__construct();

        $this->_pageDetail = array(
            'currentPage' => $this->uri->segment(1), // Controller
            'actionPage'  => $this->uri->segment(2), // Method
        );

        $this->load->model( 'M_barang', 'barang' );
        $this->ceklogin();
    }

    public function index()
    {
         $data['barang'] = $this->barang-> T_LIST();
         $this->load->view('barang/index', $data);
    }

    private function ceklogin()
    {
        if (! $this->session->userdata('username'))
        {
            redirect('login');
        }
    }

    public function hapus( $id )
    {
        $this->barang->hapus( $id );
        redirect(site_url(), 'refresh');
    }

    public function input()
    {
        $this->load->view('_partials/layout/base', $this->_pageDetail);
    }

    public function input_act()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'ket' => $this->input->post('ket')
        );

        $this->barang->insert( $data );
        redirect(site_url(),'refresh');
    }

    public function edit( $id )
    {
        $data['barang'] = $this->barang->get_a( $id );
        $this->load->view('_partials/layout/base', array_merge( $data, $this->_pageDetail ));
    }

    public function edit_act()
    {
        $this->barang->edit();
        redirect(site_url(), 'refresh');
    }

}