<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function goToDefaultPage()
    {
        if ($this->session->userdata('role_id') == 1) {
            redirect('admin');
        } else if ($this->session->userdata('role_id') == 2) {
            redirect('user');
        }
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->goToDefaultPage();
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Login';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $this->goToDefaultPage();
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        // jika user ada
        if ($user) {
            // cek password user
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id'],
                    'kode' => $user['kode'],
                    'nip' => $user['nip']
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else {
                    redirect('user');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password anda salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda belum terdaftar!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun anda sudah keluar!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
