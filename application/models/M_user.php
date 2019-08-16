<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    public function T_LIST (){
        $q = $this->db
        ->get('tb_user');
        return $q->result();
    }

    public function insert($data){
        $this->db->insert('tb_user',$data);
    }


    public function hapus($id){
        $this->db->where('id_user',$id)->delete('tb_user');
    }

    public function cek(){
        $user = $this->input->post('username');
        $password = $this->input->post('password');

        $q = $this->db->where('username',$user)->where('pass',$password)->get('tb_user');

        if($q->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

}