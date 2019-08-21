<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

    private $_pageDetail;

	public function __construct()
	{
        parent::__construct();
         $this->_pageDetail = array(
            'currentPage' => $this->uri->segment(1), // Controller
            'actionPage'  => $this->uri->segment(2), // Method
        );

        $this->load->library('login');
		$this->load->model('M_sewa', 'sewa');
        $this->load->model('M_member', 'member');
        $this->load->model('M_barang', 'barang');
        $this->load->helper('form');
        $this->login->cek();
    }

    // private function ceklogin()
    // {
    //     if (! $this->session->userdata('username'))
    //     {
    //         redirect('login');
    //     }
    // }

    public function index()
    {
        $data['sewa'] = $this->sewa->T_LIST();
        $this->load->view('sewa/index', $data);
    }

    public function hapus( $id )
    {
        $this->sewa->hapus($id);
        redirect('sewa', 'refresh');
    }

    public function input()
    {
        $data['pageTitle'] = 'Tambah Data Barang';
        $data['member']    = $this->member->list_cb();
        $data['barang']    = $this->barang->list_cb();

        $this->load->view('_partials/layout/base', array_merge( $data, $this->_pageDetail ));
    }

    public function input_act()
    {
        $data = array(
            'id_barang' => $this->input->post('id_barang'),
            'id_member' => $this->input->post('id_member'),
            'tgl_sewa' => date('Y-m-d'),
            'lama' => $this->input->post('lama'),
            'jml' => $this->input->post('jml'),
            'aktif' => '1'
        );

        $this->sewa->insert( $data );
        redirect(site_url(), 'refresh');
    }

    public function kembali($id)
    {
        $this->sewa->kembali($id);
        redirect('sewa','refresh');
    }
    
}