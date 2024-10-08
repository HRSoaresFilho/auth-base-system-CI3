<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        $this->load->model('User_model');
    }

    public function index()
    {
        redirect('auth/login/');
    }

    public function login()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('auth/login');
        } else {
            $user = $this->User_model->verify_user(
                $this->input->post('username'),
                $this->input->post('password')
            );

            if ($user) {
                $this->session->set_userdata('user_id', $user->id);
                redirect('/');
            } else {
                $this->session->set_flashdata('error', 'Invalid username or password');
                redirect('auth/login/');
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        redirect('auth/login/');
    }
}
