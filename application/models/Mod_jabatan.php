<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_jabatan extends CI_Model {
    public function getjabatan(){
        $query = "SELECT id_jabatan,jabatan FROM jabatan";
        return $this->db->query($query)->result_array();
    }

    public function getjabatanbyid($id){
       $query = "SELECT id_jabatan,jabatan FROM jabatan WHERE id_jabatan = $id";
       return $this->db->query($query)->row_array();
    }

    public function tambahjabatan(){
        $data = array(
            'jabatan' => $this->input->post('nama_jabatan', true)
        );
        $this->db->insert('jabatan', $data);
    }
    
    public function editjabatan(){
        $data = array(
            'jabatan' => $this->input->post('nama_jabatan')
    );
    $idjabatan = $this->input->post('id_jabatan');
    $this->db->where('id_jabatan', $idjabatan);
    $this->db->update('jabatan', $data);
    }

    public function hapusjabatan($id){
        $this->db->where('id_jabatan', $id);
        $this->db->delete('jabatan');
    }
}