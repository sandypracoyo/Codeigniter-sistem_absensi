<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        is_logged_in();
        $this->load->model('Mod_user','user');
    }
    public function index(){
        $data['username'] = $this->db->get_where('user', ['username' =>
        $this->session->userdata('username')])->row_array();

        $data['title'] = "Data User";
        $data['datauser'] = $this->user->getuser();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar',$data);
            $this->load->view('user/data_user',$data);
            $this->load->view('templates/footer');
        } else {
            $this->user->tambahdata();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil Di Tambah !</div>');
            redirect('user');

        }
       
    }

    public function hapususer($id){
        $this->user->hapususer($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Berhasil Di Hapus !</div>');
        redirect('user');
    }
}