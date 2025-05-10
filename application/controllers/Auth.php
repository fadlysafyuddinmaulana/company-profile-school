<?php

class Auth extends CI_Controller
{
    public function index()
    {
        $user = $this->session->userdata('server_library');

        if (empty($user)) {
            $data['title']      = 'Perpustakaan Karya Ilmu';

            $this->load->view('layout/header_login', $data);
            $this->load->view('Starter-page/login_admin', $data);
            $this->load->view('layout/footer_login', $data);
        } else {
            redirect('dashboard');
        }
    }

    public function authentication_admin()
    {
        $username      = $this->input->post('username');
        $password      = $this->input->post('password');

        $this->form_validation->set_rules(
            'username',
            'username',
            'required|min_length[2]',
            [
                'required' => 'Username wajib di sertakan!'
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'password',
            'required',
            [
                'required' => 'Password wajib di sertakan!'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $user = $this->session->userdata('server_paud');

            if (empty($user)) {
                $data['title']      = 'Perpustakaan Karya Ilmu';

                $this->load->view('layout/header_login', $data);
                $this->load->view('Starter-page/login_admin', $data);
                $this->load->view('layout/footer_login', $data);
            } elseif ($user['role'] == 'petugas') {
                redirect('dashboard');
            } else {
                redirect('dashboard');
            }
        } else {
            if ($username === 'admin' && $password === 'admin') {
                $session = [
                    'username' => 'admin',
                ];

                $this->session->set_userdata('server_paud', $session);
                redirect('Dashboard');
            } else {
                $this->session->set_flashdata('message_login', 'Silahkan Cek username atau password anda!');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
