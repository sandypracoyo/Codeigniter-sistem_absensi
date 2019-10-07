<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_masuk extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Mod_absensi', 'absen');
    }

    public function index(){
        $data['title'] = 'Absensi Masuk';
        $data['data_absen'] = $this->absen->ambilabsensihariini();
        
        $this->form_validation->set_rules('nokaryawan','No Karyawan','required|numeric');
        if ($this->form_validation->run() == false){
            $this->load->view('absensi/masuk', $data);
        }else{
            $id_karyawan = $this->input->post('nokaryawan');
            $query = "SELECT id_karyawan FROM absen WHERE id_karyawan = $id_karyawan AND tgl_absen = CURRENT_DATE";
            $cekabsen = $this->db->query($query);
            $query2 = "SELECT id_karyawan FROM karyawan WHERE id_karyawan = $id_karyawan";
            $cekid = $this->db->query($query2);
            
                if(!$cekabsen->num_rows()==0){
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah absen bung !</div>');
                    redirect('absensi_masuk');
                }else if($cekid->num_rows()==0){
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">ID Tidak Terdaftar !</div>');
                    redirect('absensi_masuk');
                }else{
                    $data = array(
                    'id_absen' => '',
                    'id_karyawan' => $this->input->post('nokaryawan'),
                    'tgl_absen' => date('Y-m-d')
                );
                $id_absen = $this->absen->absenmasuk($data);
                $query = "INSERT INTO `detail_absen` (`id_detail_absen`, `id_absen`, `jam_masuk`, `jam_pulang`) VALUES (NULL, $id_absen, CURRENT_TIME, NULL)";
                $this->db->query($query);

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Absensi Berhasil Di Tambah !</div>');
                redirect('absensi_masuk');
                }
        }
    }

}