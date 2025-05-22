<?php

class Berita extends CI_Controller
{
	public function index()
	{
		$user = $this->session->userdata('server_library');

		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['active'] = 'berita';

		if ($user['role'] == 'admin') {
			$data['tree_active'] = 'petugas';
		}

		$data['petugas'] = $this->db->get('petugas')->result();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Petugas-Page/index', $data);
		$this->load->view('layout/footer', $data);
	}

	public function add_Content_Page()
	{
		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['active'] = 'berita';

		$this->load->view('layout/header_login', $data);
		$this->load->view('berita/add_berita', $data);
		$this->load->view('layout/footer_login', $data);
	}

	public function edit_news($idb)
	{
		$data['title'] = 'PAUD JAMI ASSOFA';
		$data['active'] = 'berita';

		$where = array('id_berita' => $idb);

		$data['berita'] = $this->M_SQL->get_data($where, 'tb_berita')->row();

		$this->load->view('layout/header_login', $data);
		$this->load->view('berita/edit_berita', $data);
		$this->load->view('layout/footer_login', $data);
	}

	public function insert_berita()
	{
		$judul_berita = $this->input->post('judul_berita');
		$isi_berita = $this->input->post('isi_berita');
		$kategori_berita = $this->input->post('kategori_berita');


		$config['upload_path'] = './assets/img/berita';
		$config['allowed_types'] = 'png|jpeg|jpg';
		$config['max_size'] = '10240';
		$config['file_name'] = $_FILES['foto']['name'];

		$this->load->library('upload');
		$this->upload->initialize($config);

		if ($this->upload->do_upload('foto')) {
			$foto = $this->upload->data();
			$data = [
				'judul' => $judul_berita,
				'isi_berita' => $isi_berita,
				'category' => $kategori_berita,
				'file_image' => $foto['file_name'],
			];
			$this->M_SQL->insert_data($data, 'tb_berita');
			redirect('dashboard');
		} else {
			redirect('dashboard');
		}
	}

	public function update_berita($id_berita)
	{
		$id_berita = $this->input->post('id_berita');
		$judul_berita = $this->input->post('judul_berita');
		$isi_berita = $this->input->post('isi_berita');
		$kategori_berita = $this->input->post('kategori_berita');

		$path = './assets/img/berita';

		$where = array('id_berita' => $id_berita);

		$config['upload_path']      = './assets/img/berita';
		$config['allowed_types']    = 'png|jpeg|jpg';
		$config['max_size']         = '10240';
		$config['file_name']        = $_FILES['foto']['name'];

		$this->load->library('upload');
		$this->upload->initialize($config);

		if (!empty($_FILES['foto']['name'])) {
			if ($this->upload->do_upload('foto')) {
				$foto = $this->upload->data();
				$data = array(
					'judul' => $judul_berita,
					'isi_berita' => $isi_berita,
					'category' => $kategori_berita,
					'file_image' => $foto['file_name'],
				);
				@unlink($path . $this->input->post('filelama'));

				$this->M_SQL->update_data($where, $data, 'tb_berita');
				redirect('dashboard');
			} else {
				redirect('edit-news' . '/' . $id_berita);
			}
		} else {
			$data = array(
				'judul' => $judul_berita,
				'isi_berita' => $isi_berita,
				'category' => $kategori_berita
			);

			$this->M_SQL->update_data($where, $data, 'tb_berita');
			redirect('dashboard');
		}
	}

	public function del_news($id)
	{
		$where = array('id_berita' => $id);

		$this->M_SQL->delete_data($where, 'tb_berita');

		redirect('dashboard');
	}
}
