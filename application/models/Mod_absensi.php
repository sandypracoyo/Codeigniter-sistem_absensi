<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_absensi extends CI_Model {
    public function ambilabsensi(){
        $query = "SELECT B.id_karyawan,C.id_absen,B.nama,A.jabatan,C.tgl_absen,D.jam_masuk,D.jam_pulang
        FROM karyawan B
        JOIN jabatan A
        ON A.id_jabatan = B.id_jabatan
        JOIN absen C 
        ON C.id_karyawan = B.id_karyawan
        JOIN detail_absen D 
        ON D.id_absen = C.id_absen";

        return $this->db->query($query)->result_array();
    }

    public function ambilabsensihariini(){
        $query = "SELECT B.id_karyawan,C.id_absen,B.nama,A.jabatan,C.tgl_absen,D.jam_masuk,D.jam_pulang
        FROM karyawan B
        JOIN jabatan A
        ON A.id_jabatan = B.id_jabatan
        JOIN absen C 
        ON C.id_karyawan = B.id_karyawan
        JOIN detail_absen D 
        ON D.id_absen = C.id_absen WHERE C.tgl_absen = CURRENT_DATE";

        return $this->db->query($query)->result_array();
    }

    public function absenmasuk($data){
    //$id_karyawan = $this->input->post('nokaryawan');
    //$query = "INSERT INTO `absen` (`id_absen`, `id_karyawan`, `tgl_absen`) VALUES (NULL, '$id_karyawan', CURRENT_DATE)"
    //$this->db->query($query);

        $this->db->insert('absen', $data);
        return $this->db->insert_id();
    }

    public function absenpulang($data){
        $id_absen = $this->input->post('nokaryawan');
        $this->db->set('jam_pulang', $data);
        $this->db->where('id_absen', $id_absen);
        $this->db->insert('detail_absen');
    }

}