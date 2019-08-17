<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sewa extends CI_Model {

    public function T_LIST()
    {
        $q = $this->db
        ->select('tb_sewa.*,tb_barang.nama as nama_barang,tb_member.nama')
        ->join('tb_barang','tb_barang.id_barang=tb_sewa.id_barang','LEFT')
        ->join('tb_member','tb_member.id_member=tb_sewa.id_member','LEFT')
        ->where('tb_sewa.aktif','1')
        ->get('tb_sewa');
        return $q->result();
    }

    public function insert($data)
    {
        $this->db->insert('tb_sewa',$data);
    }

    public function totalItem()
    {
        $query = $this->db->count_all('tb_sewa');
        return $query;
    }

    public function kembali($id)
    {
        $data = array(
            'aktif' => '0',
            'tgl_kembali' => date('Y-m-d')
        );
        $this->db->where('id_sewa',$id)->update('tb_sewa',$data);
    }

}