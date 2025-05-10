<?php

class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Perpustakaan Karya Ilmu';

        $this->load->view('layout/header_login', $data);
        $this->load->view('Starter-page/login_admin', $data);
        $this->load->view('layout/footer_login', $data);
    }

    public function authentication_admin()
    {
        // Get user input
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Static credentials
        $valid_username = 'admin';
        $valid_password = '12345';

        // Check credentials (simple comparison for static login)
        if ($username === $valid_username && $password === $valid_password) {
            // Create session data
            $session['id_petugas']      = '1';
            $session['nama_petugas']    = 'Administrator';
            $session['username']        = $username;
            $session['password']        = md5($password); // Store hashed password in session
            $session['foto_petugas']    = 'default.jpg';
            $session['jk']              = 'L';
            $session['role']            = 'petugas';
            $session['is_logged_in']    = TRUE;

            // Set session data
            $this->session->set_userdata('server_library', $session);

            // Redirect to dashboard
            redirect('dashboard');
        } else {
            // Login failed
            $this->session->set_flashdata('message_login', 'Silahkan Cek username atau password anda!');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
