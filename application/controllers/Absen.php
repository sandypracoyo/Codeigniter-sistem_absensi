<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

    public function __construct(){
        parent::__construct();
        is_logged_in();
        $this->load->model('Mod_absensi', 'absen');
    }

    public function index(){
        $data['username'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['role_id'] = $this->db->get_where('user', ['role_id' =>
        $this->session->userdata('role_id')])->row_array();
        $data['title'] = 'Data Absensi';
        $data['data_absen'] = $this->absen->ambilabsensi();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('absensi/data_absensi', $data);
        $this->load->view('templates/footer');
    }
}