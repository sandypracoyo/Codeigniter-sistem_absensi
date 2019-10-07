<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        is_logged_in();
    }
    public function index(){
        $data['username'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Dashboard';
        $query1 = "SELECT COUNT(username) FROM user";
        $data['jmluser'] = $this->db->query($query1)->row_array();
        $query2 = "SELECT COUNT(nama) FROM karyawan";
        $data['jmlkaryawan'] = $this->db->query($query2)->row_array();
        $query3 = "SELECT COUNT(id_absen) FROM absen WHERE tgl_absen = CURRENT_DATE";
        $data['jml_absen'] = $this->db->query($query3)->row_array();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}