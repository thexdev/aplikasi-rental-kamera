<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

    private $_table = 'tb_barang';

    public function T_LIST()
    {
        $query = $this->db->get( $this->_table );
        return $query->result();
    }

    public function list_cb()
    {
        $dataBarang = array();
        $query      = $this->db->select('id_barang, nama')->get( $this->_table );
        $result     = $query->result();

        foreach($result as $barang){
            $dataBarang[$barang->id_barang] = $barang->nama;
        }

        return $dataBarang;
    }

    public function totalItem()
    {
        $query = $this->db->count_all( $this->_table );
        return $query;
    }

    public function insert( $data )
    {
        $this->db->insert($this->_table, $data);
    }

    public function hapus( $id )
    {
        $this->db->where('id_barang', $id)->delete( $this->_table );
    }

    public function get_a( $id )
    {
        $e = $this->db->where('id_barang', $id)->get( $this->_table );
        return $e->row();
    }

    public function edit()
    {
        $id_member = $this->input->post('id_member');
        $nama      = $this->input->post('nama');
        $harga     = $this->input->post('harga');
        $ket       = $this->input->post('ket');

        $data = array(
            'nama' =>$nama,
            'harga'=>$harga,
            'ket'=>$ket
        );

        $this->db->where('id_barang', $id_member)->update($this->_table, $data);
    }

}