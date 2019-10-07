<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_karyawan extends CI_Model {

    public function getkaryawan(){
        $query = "SELECT id_karyawan,nama,jenis_kelamin,jabatan,no_hp,alamat,status FROM karyawan
        JOIN jabatan
        ON karyawan.id_jabatan = jabatan.id_jabatan";
        return $this->db->query($query)->result_array();
    }

    public function getkaryawanbyid($id){
        $query = "SELECT id_karyawan,nama,jenis_kelamin,jabatan,no_hp,alamat,status FROM karyawan
        JOIN jabatan
        ON karyawan.id_jabatan = jabatan.id_jabatan where id_karyawan = $id";
        return $this->db->query($query)->row_array();
    }

    public function getjabatan(){
        return $this->db->get('jabatan')->result_array();
    }

    public function tambahkaryawan(){
        $data = array(
            'nama' => $this->input->post('nama', true),
            'jenis_kelamin' => $this->input->post('jk',true),
            'id_jabatan' => $this->input->post('jabatan',true),
            'no_hp' => $this->input->post('nohp',true),
            'alamat' => $this->input->post('alamat',true),
            'status' => $this->input->post('status',true)
        );
        $this->db->insert('karyawan', $data);
    }

    public function hapuskaryawan($id){
        $this->db->where('id_karyawan', $id);
        $this->db->delete('karyawan');
    }

    public function updatekaryawan(){
    $data = array(
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'id_jabatan' => $this->input->post('jabatan'),
            'no_hp' => $this->input->post('no_hp'),
            'alamat' => $this->input->post('alamat'),
            'status' => $this->input->post('status'),
    );
    $idkaryawan = $this->input->post('id_karyawan');
    $this->db->where('id_karyawan', $idkaryawan);
    $this->db->update('karyawan', $data);
    }

}