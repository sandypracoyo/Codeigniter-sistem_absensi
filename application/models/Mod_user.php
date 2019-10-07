<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_user extends CI_Model {
    public function tambahdata(){
        $data = array(
            'username' => htmlspecialchars($this->input->post('username',true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
    );
    
    $this->db->insert('user', $data);
    }

    public function getuser(){
        return $this->db->get('user')->result_array();
    }

    public function hapususer($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}