<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {

    public function T_LIST (){
        $q = $this->db->get('tb_member');
        return $q->result();
    }

    public function list_cb(){
        $q = $this->db->select('id_member,nama')->get('tb_member');
        $m = $q->result();
        $e = array();
        foreach($m as $x){
            $e[$x->id_member] = $x->nama;
        }
        return $e;
    }

    public function insert($data){
        $this->db->insert('tb_member',$data);
    }

    public function hapus($id){
        $this->db->where('id_member',$id)->delete('tb_member');
    }

    public function get_a($id){
        $e = $this->db->where('id_member',$id)->get('tb_member');
        return $e->row();
    }

    public function edit(){
        $nama = $this->input->post('nama');
        $id_member = $this->input->post('id_member');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');

        $data = array(
            'nama' =>$nama,
            'alamat'=>$alamat,
            'no_hp'=>$no_hp
        );

        $this->db->where('id_member',$id_member)->update('tb_member',$data);
    }

}