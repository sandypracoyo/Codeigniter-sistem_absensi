<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_pulang extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Mod_absensi', 'absen');
    }

    public function index(){
        $data['username'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Absensi Pulang';
        $data['data_absen'] = $this->absen->ambilabsensihariini();
        
        $this->form_validation->set_rules('nokaryawan','No Karyawan','required|numeric');
        if ($this->form_validation->run() == false){
            
            $this->load->view('absensi/pulang', $data);
        }else{
            $id_karyawan = $this->input->post('nokaryawan');
            $id_absen = "SELECT * FROM absen WHERE id_karyawan = $id_karyawan AND tgl_absen = CURRENT_DATE";
            $absen_id = $this->db->query($id_absen)->row_array();
            $cekidabsen = $absen_id["id_absen"];

            $query = "UPDATE `detail_absen` SET `jam_pulang` = CURRENT_TIME WHERE `detail_absen`.`id_absen` = $cekidabsen";
            $this->db->query($query);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Absensi Berhasil Di Tambah !</div>');
            redirect('absensi_pulang');
        }
    }

}