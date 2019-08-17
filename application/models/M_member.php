<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {

    private $_table = 'tb_member';

    public function T_LIST()
    {
        $query = $this->db->get( $this->_table );
        return $query->result();
    }

    public function list_cb()
    {
        $q = $this->db->select('id_member,nama')->get( $this->_table );
        $m = $q->result();
        $e = array();
        foreach($m as $x){
            $e[$x->id_member] = $x->nama;
        }
        return $e;
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
        $this->db->where('id_member',$id)->delete( $this->_table );
    }

    public function get_a( $id )
    {
        $e = $this->db->where('id_member',$id)->get( $this->_table );
        return $e->row();
    }

    public function edit()
    {
        $nama = $this->input->post('nama');
        $id_member = $this->input->post('id_member');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            'nama'  => $nama,
            'alamat'=> $alamat,
            'no_hp' => $no_hp
        );

        $this->db->where('id_member',$id_member)->update( $this->_table, $data );
    }

}