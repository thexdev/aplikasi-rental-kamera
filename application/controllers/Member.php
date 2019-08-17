<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    private $_pageDetail;

	public function __construct()
	{
        parent::__construct();
        $this->_pageDetail = array(
            'currentPage' => $this->uri->segment(1), // Controller
            'actionPage'  => $this->uri->segment(2), // Method
        );
        $this->ceklogin();
		$this->load->model('M_member', 'member');
    }

    private function ceklogin()
    {
        if (! $this->session->userdata('username'))
        {
            redirect(site_url());
        }
    }

    public function index()
    {
        $data['member'] = $this->member->T_LIST();

        $this->load->view('member/index', $data);
    }

    public function hapus( $id )
    {
        $this->member->hapus( $id );
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
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp')
        );
        $this->member->insert( $data );
        redirect(site_url(), 'refresh');
    }

    public function edit( $id )
    {
        $data['member'] = $this->member->get_a( $id );
        $this->load->view('_partials/layout/base', array_merge( $data, $this->_pageDetail ));
    }

    public function edit_act()
    {
        $this->member->edit();
        redirect(site_url(), 'refresh');
    }

}