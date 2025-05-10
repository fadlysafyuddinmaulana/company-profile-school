<?php

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Perpustakaan A';

		$this->load->view('layout/header_admin', $data);
		$this->load->view('layout/navbar_admin', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('layout/footer_admin', $data);
	}
}
