<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
	}

	public function index()
	{
		$fpdf = new FPDF('l', 'mm', 'A4');
		$fpdf->AddPage();
		$fpdf->SetFont('Arial', 'B', '16');
		$fpdf->Cell(190, 7, 'Data Barang YNC.Rental', 0, 1, 'C');
		$fpdf->Output();
		// echo 'Hello, world!';
	}

}