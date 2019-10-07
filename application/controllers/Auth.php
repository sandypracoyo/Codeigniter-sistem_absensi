<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Mod_user', 'user');
    }

    public function index() {
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');

        if ($this->form_validation->run() == false ){
            $this->load->view('auth/login');
        }else{
            $this->login();
        }
    }

    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username'=>$username])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])){
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if($user['role_id'] == 1){
                    redirect ('Dashboard');
                }else{
                    redirect ('absen');
                }
                
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password</div>');
                redirect ('auth');
            }
        }else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('absensi_masuk');
    }



}