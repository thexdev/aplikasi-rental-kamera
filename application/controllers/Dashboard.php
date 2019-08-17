<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->cekLogin();
		$this->load->model('M_barang', 'barang');
		$this->load->model('M_member', 'member');
		$this->load->model('M_sewa', 'sewa');
	}

	public function index()
	{
		$data['totalBarang'] = $this->barang->totalItem();
		$data['totalMember'] = $this->member->totalItem();
		$data['totalSewa']   = $this->sewa->totalItem();

		$this->load->view('dashboard/base', $data);
	}

	public function main()
	{
		$data['totalBarang'] = $this->barang->totalItem();
		$data['totalMember'] = $this->member->totalItem();
		$data['totalSewa']   = $this->sewa->totalItem();

		$this->load->view('dashboard/index', $data);
	}

	private function ceklogin()
    {
        if(! $this->session->userdata('username'))
        {
            redirect(site_url(), 'refresh');
        }
    }

}