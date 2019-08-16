<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

    public function T_LIST(){
        $q = $this->db->get('tb_barang');
        return $q->result();
    }
    public function list_cb(){
        $q = $this->db->select('id_barang,nama')->get('tb_barang');
        $m = $q->result();
        $e = array();
        foreach($m as $x){
            $e[$x->id_barang] = $x->nama;
        }
        return $e;
    }

    public function insert($data){
        $this->db->insert('tb_barang',$data);
    }

    public function hapus($id){
        $this->db->where('id_barang',$id)->delete('tb_barang');
    }

    public function get_a($id){
        $e = $this->db->where('id_barang',$id)->get('tb_barang');
        return $e->row();
    }

    public function edit(){
        $nama = $this->input->post('nama');
        $id_member = $this->input->post('id_member');
        $harga = $this->input->post('harga');
        $ket = $this->input->post('ket');

        $data = array(
            'nama' =>$nama,
            'harga'=>$harga,
            'ket'=>$ket
        );

        $this->db->where('id_barang',$id_member)->update('tb_barang',$data);
    }

}