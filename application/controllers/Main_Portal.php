<?php

class Main_Portal extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Perpustakaan A';
		$data['active'] = 'beranda';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/index', $data);
		$this->load->view('layout/footer', $data);
	}

	public function program()
	{
		$data['title'] = 'Perpustakaan A';
		$data['active'] = 'program';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/program', $data);
		$this->load->view('layout/footer', $data);
	}
	public function news()
	{
		$data['title'] = 'Perpustakaan A';
		$data['active'] = 'berita';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/news', $data);
		$this->load->view('layout/footer', $data);
	}
	public function form_student()
	{
		$data['title'] = 'Perpustakaan A';
		$data['active'] = 'pendaftaran';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/form_student', $data);
		$this->load->view('layout/footer', $data);
	}
}
