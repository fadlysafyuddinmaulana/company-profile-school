<?php

class CMS extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$user = $this->session->userdata('server_library');

		if ($this->session->userdata('server_library') == null) {
			redirect('auth');
		}

		if ($user['role'] == 'petugas') {
			redirect('404');
		}
	}

	public function index()
	{
		$data['title'] = 'Perpustakaan A';
		$data['petugas'] = $this->db->get('petugas')->result();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Petugas-Page/index', $data);
		$this->load->view('layout/footer', $data);
	}
}
