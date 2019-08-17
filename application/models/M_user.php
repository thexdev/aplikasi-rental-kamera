<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    private $_table = 'tb_user';

    public function T_LIST()
    {
        $q = $this->db->get( $this->_table );
        return $q->result();
    }

    public function insert( $data )
    {
        $this->db->insert( $this->_table, $data );
    }

    public function hapus( $id )
    {
        $this->db->where('id_user', $id)->delete( $this->_table );
    }

    public function cek()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $query    = $this->db->get_where( $this->_table, array('username' => $username, 'pass' => $password) );
        // $q = $this->db->where('username',$user)->where('pass', $password)->get('tb_user');

        if ( $query->num_rows() > 0 )
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}