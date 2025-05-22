<?php

class Main_Portal extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['active'] = 'beranda';

		$data['foto'] = $this->M_SQL->data_gallery_limit()->result_array();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/index', $data);
		$this->load->view('layout/footer', $data);
	}

	public function program()
	{
		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['active'] = 'program';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/program', $data);
		$this->load->view('layout/footer', $data);
	}

	public function news()
	{
		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['active'] = 'berita';
		$data['berita'] = $this->M_SQL->data_berita()->result_array();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/news', $data);
		$this->load->view('layout/footer', $data);
	}

	public function form_student()
	{
		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['active'] = 'pendaftaran';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/form_student', $data);
		$this->load->view('layout/footer', $data);
	}

	public function content_news($idb)
	{
		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['active'] = 'berita';

		$where = array('id_berita' => $idb);

		$data['berita'] = $this->M_SQL->get_data($where, 'tb_berita')->row();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/content-news', $data);
		$this->load->view('layout/footer', $data);
	}

	public function gallery()
	{
		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['active'] = 'Gallery';
		$data['foto'] = $this->M_SQL->data_gallery()->result_array();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Main-Page/gallery', $data);
		$this->load->view('layout/footer', $data);
	}
}
