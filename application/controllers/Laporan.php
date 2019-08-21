<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model('M_barang', 'barang');
		$this->load->model('M_member', 'member');
		$this->load->model('M_sewa', 'sewa');
	}

	public function index()
	{
		$fpdf = new FPDF('l', 'mm', 'A4');
		$fpdf->AddPage();
		$fpdf->SetFont('Arial', 'B', '16');
		$fpdf->Cell(190, 7, 'Data Barang YNC.Rental', 0, 1, 'C');
		$fpdf->Output();
	}

	public function barang()
	{
		$fpdf = new FPDF('l', 'mm', 'A4');
		$fpdf->AddPage();
		$fpdf->SetFont('Arial', 'B', '20');
		$fpdf->Cell('', 20, 'Data Barang YNC.Rental', 0, 1, 'C');
		$fpdf->SetFont('Arial', 'B', '16');
        $fpdf->Cell(80 , 10, 'Nama Barang', 1, 0, 'C');
        $fpdf->Cell(100, 10, 'Harga', 1, 0, 'C');
        $fpdf->Cell(100, 10, 'Keterangan', 1, 1, 'C');
        $fpdf->SetFont('Arial', '', 10);
        foreach ( $this->barang->T_LIST() as $barang ) {
        	$fpdf->Cell(80, 8, $barang->nama, 1, 0);
        	$fpdf->Cell(100, 8, number_format( $barang->harga ), 1, 0);
        	$fpdf->Cell(100, 8, $barang->ket, 1, 1);
        }
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell('', 20, 'Total: ' . count( $this->barang->T_LIST() ), 3, 1, 'L');
		$fpdf->Output();
	}
	
	public function member()
	{
		$fpdf = new FPDF('l', 'mm', 'A4');
		$fpdf->AddPage();
		$fpdf->SetFont('Arial', 'B', '20');
		$fpdf->Cell('', 20, 'Data Member YNC.Rental', 0, 1, 'C');
		$fpdf->SetFont('Arial', 'B', '16');
        $fpdf->Cell(80 , 10, 'Nama Member', 1, 0, 'C');
        $fpdf->Cell(100, 10, 'Alamat', 1, 0, 'C');
        $fpdf->Cell(100, 10, 'Nomor HP', 1, 1, 'C');
        $fpdf->SetFont('Arial', '', 10);
        foreach ( $this->member->T_LIST() as $member ) {
        	$fpdf->Cell(80, 8, $member->nama, 1, 0);
        	$fpdf->Cell(100, 8, $member->alamat, 1, 0);
        	$fpdf->Cell(100, 8, $member->no_hp, 1, 1);
        }
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell('', 20, 'Total: ' . count( $this->member->T_LIST() ), 3, 1, 'L');
		$fpdf->Output();
	}

	public function sewa()
	{
		$fpdf = new FPDF('l', 'mm', 'A4');
		$fpdf->AddPage();
		$fpdf->SetFont('Arial', 'B', '20');
		$fpdf->Cell('', 20, 'Data Sewa YNC.Rental', 0, 1, 'C');
		$fpdf->SetFont('Arial', 'B', '10');
        $fpdf->Cell(46 , 10, 'Nama Member', 1, 0, 'C');
        $fpdf->Cell(46, 10, 'Nama Barang', 1, 0, 'C');
        $fpdf->Cell(46, 10, 'Jumlah', 1, 0, 'C');
        $fpdf->Cell(46, 10, 'Tanggal Sewa', 1, 0, 'C');
        $fpdf->Cell(46, 10, 'Lama', 1, 0, 'C');
        $fpdf->Cell(46, 10, 'Tanggal Kembali', 1, 1, 'C');
        $fpdf->SetFont('Arial', '', 10);
        foreach ( $this->sewa->barangKembali() as $sewa ) {
        	$fpdf->Cell(46, 8, $sewa->nama, 1, 0);
        	$fpdf->Cell(46, 8, $sewa->nama_barang, 1, 0);
        	$fpdf->Cell(46, 8, $sewa->jml, 1, 0);
        	$fpdf->Cell(46, 8, $sewa->tgl_sewa, 1, 0);
        	$fpdf->Cell(46, 8, $sewa->lama, 1, 0);
        	$fpdf->Cell(46, 8, $sewa->tgl_kembali, 1, 1);
		}
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->Cell('', 20, 'Total: ' . count( $this->sewa->barangKembali() ), 3, 1, 'L');
		$fpdf->Output();
	}

}	