<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        is_logged_in();
        $this->load->model('Mod_jabatan', 'get_jabatan');
    }

    public function index(){
        $data['username'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['title'] = 'Data Jabatan';
        $data['jabatan'] = $this->get_jabatan->getjabatan();

        $this->form_validation->set_rules('nama_jabatan', 'Jabatan', 'required|trim');

        if ($this->form_validation->run() == false){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('jabatan/data_jabatan', $data);
        $this->load->view('templates/footer');
        } else {
            $this->get_jabatan->tambahjabatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jabatan Berhasil Di Tambah !</div>');
            redirect('jabatan');
        }
        
    }

    public function getjabatan(){
        echo json_encode($this->get_jabatan->getjabatanbyid($this->input->post('id')));
    }

    public function editjabatan(){
        $this->form_validation->set_rules('nama_jabatan', 'Jabatan', 'required|trim');

        if ($this->form_validation->run() == false){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar',$data);
        $this->load->view('templates/topbar',$data);
        $this->load->view('jabatan/data_jabatan', $data);
        $this->load->view('templates/footer');
        } else {
            $this->get_jabatan->editjabatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jabatan Berhasil Di Edit !</div>');
            redirect('jabatan');
        }
    }

    public function hapusjabatan($id){
        $this->get_jabatan->hapusjabatan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jabatan Berhasil Di Hapus !</div>');
            redirect('jabatan');
    }

}