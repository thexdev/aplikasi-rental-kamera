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

        $this->load->library('login');
        $this->load->model( 'M_barang', 'barang' );
        $this->login->cek();
    }

    public function index()
    {
         $data['barang'] = $this->barang-> T_LIST();
         $this->load->view('barang/index', $data);
    }

    public function hapus( $id )
    {
        $this->barang->hapus( $id );
        redirect(site_url(), 'refresh');
    }

    public function input()
    {
        $data['pageTitle'] = 'Tambah Data Barang';
        $this->load->view('_partials/layout/base', array_merge( $data, $this->_pageDetail ));
    }

    public function input_act()
    {
        $config['upload_path']   = './uploads/image';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = 1000;
        $config['max_width']     = 3000;
        $config['max_height']    = 3000;
        $data = array(
            'nama'   => $this->input->post('nama'),
            'harga'  => $this->input->post('harga'),
            'ket'    => $this->input->post('ket'),
            'foto'   => $_FILES['image_file']['name']
        );

        $this->load->library('upload', $config);
        // $this->barang->insert( $data );
        // redirect(site_url(), 'refresh');

        if ( ! $this->upload->do_upload('image_file'))
        {
            $error = array('error' => $this->upload->display_errors());
            redirect(site_url('barang/input'), 'refresh');
        }
        else
        {
            // $data = array('upload_data' => $this->upload->data());
            // $this->load->view('upload_success', $data);
            $this->barang->insert( $data );
            redirect(site_url(), 'refresh');
        }
    }

    public function edit( $id )
    {
        $data['pageTitle'] = 'Edit Data Barang';
        $data['barang']    = $this->barang->get_a( $id );
        
        $this->load->view('_partials/layout/base', array_merge( $data, $this->_pageDetail ));
    }

    public function edit_act()
    {
        $this->barang->edit();
        redirect(site_url(), 'refresh');
    }

}