<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        is_logged_in();
        $this->load->model('Mod_karyawan', 'karyawan');
    }
    public function index(){
        $data['username'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Karyawan';
        $data['karyawan'] = $this->karyawan->getkaryawan();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('karyawan/data_karyawan', $data);
        $this->load->view('templates/footer');
    }

    public function tambahkaryawan(){
        $data['username'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Karyawan';
        $data['jabatan'] = $this->karyawan->getjabatan();

        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('jk','Jenis Kelamin', 'required');
        $this->form_validation->set_rules('jabatan','Jabatan', 'required');
        $this->form_validation->set_rules('nohp','Nomor Hp', 'required|numeric');
        $this->form_validation->set_rules('alamat','Alamat', 'required');
        $this->form_validation->set_rules('status','Status', 'required');
        
        if($this->form_validation->run() == false){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('karyawan/tambah_karyawan', $data);
        $this->load->view('templates/footer');
        }else{
            $this->karyawan->tambahkaryawan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Karyawan Berhasil Di Tambah !</div>');
            redirect('karyawan');
        }
    }

    public function editkaryawan($id){
        $data['username'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Karyawan';
        $data['jabatan'] = $this->karyawan->getjabatan();
        $data['karyawan'] = $this->karyawan->getkaryawanbyid($id);

        $this->form_validation->set_rules('nama','Nama', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin', 'required');
        $this->form_validation->set_rules('jabatan','Jabatan', 'required');
        $this->form_validation->set_rules('nohp','Nomor Hp', 'required|numeric');
        $this->form_validation->set_rules('alamat','Alamat', 'required');
        $this->form_validation->set_rules('status','Status', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar',$data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('karyawan/edit_karyawan', $data);
            $this->load->view('templates/footer');
        }else{
            $this->karyawan->updatekaryawan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Karyawan Berhasil Di Ubah !</div>');
            redirect('karyawan');
        }
    }

    public function hapuskaryawan($id){
        $this->karyawan->hapuskaryawan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Karyawan Berhasil Di Hapus !</div>');
            redirect('karyawan');
    }

    public function detailkaryawan(){
       echo json_encode($this->karyawan->getkaryawanbyid($this->input->post('id')));
    }

   

}