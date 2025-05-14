<?php

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['berita'] = $this->M_SQL->data_berita()->result_array();
		$data['active'] = 'berita';

		$this->load->view('layout/header_admin', $data);
		$this->load->view('layout/navbar_admin', $data);
		$this->load->view('berita/index', $data);
		$this->load->view('layout/footer_admin', $data);
	}
}
