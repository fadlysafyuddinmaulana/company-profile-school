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
		$user = $this->session->userdata('server_library');

		$data['title'] = 'Perpustakaan A';
		$data['aktif'] = 'petugas';

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
		$user = $this->session->userdata('server_library');

		$data['title'] = 'Perpustakaan A';
		$data['aktif'] = 'petugas';

		if ($user['role'] == 'admin') {
			$data['tree_active'] = 'petugas';
		}

		$data['petugas'] = $this->db->get('petugas')->result();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Petugas-Page/add_petugas', $data);
		$this->load->view('layout/footer', $data);
	}

	public function edit_content_page($ido)
	{
		$user = $this->session->userdata('server_library');

		$data['title'] = 'Perpustakaan A';
		$data['aktif'] = 'petugas';

		if ($user['role'] == 'admin') {
			$data['tree_active'] = 'petugas';
		}

		$where = ['id_petugas' => $ido];

		$data['petugas'] = $this->M_SQL->get_data($where, 'petugas')->row();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Petugas-Page/edit_petugas', $data);
		$this->load->view('layout/footer', $data);
	}

	public function detail_petugas($idptgs)
	{
		$user = $this->session->userdata('server_library');

		$data['title'] = 'Perpustakaan A';
		$data['aktif'] = 'petugas';

		if ($user['role'] == 'admin') {
			$data['tree_active'] = 'petugas';
		}

		$where = ['id_petugas' => $idptgs];

		$data['petugas'] = $this->M_SQL->get_data($where, 'petugas')->row();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('Petugas-Page/detail_petugas', $data);
		$this->load->view('layout/footer', $data);
	}

	public function insert_berita()
	{
		$judul_berita = $this->input->post('judul_berita');
		$isi_berita = $this->input->post('isi_berita');
		$kategori_berita = $this->input->post('kategori_berita');
		$ringkasan = $this->input->post('ringkasan Berita');

		if ($this->form_validation->run() == false) {
			$user = $this->session->userdata('server_library');

			$data['title'] = 'Perpustakaan A';
			$data['aktif'] = 'petugas';

			if ($user['role'] == 'admin') {
				$data['tree_active'] = 'petugas';
			}

			$data['petugas'] = $this->db->get('petugas')->result();

			$this->load->view('layout/header', $data);
			$this->load->view('layout/navbar', $data);
			$this->load->view('Petugas-Page/add_petugas', $data);
			$this->load->view('layout/footer', $data);
		} else {
			$config['upload_path'] = './assets/server-image/dokumen-profile-petugas/';
			$config['allowed_types'] = 'png|jpeg|jpg';
			$config['maax_size'] = '5048';
			$config['file_name'] = $_FILES['foto']['name'];

			$this->load->library('upload');
			$this->upload->initialize($config);

			if ($this->upload->do_upload('foto')) {
				$foto = $this->upload->data();
				$data = [
					'nama_petugas' => $judul_berita,
					'author' => 'admin',
					'isi_berita' => $isi_berita,
					'kategori_berita' => $kategori_berita,
					'ringkasan' => $ringkasan,
					'foto_petugas' => $foto['file_name'],
				];
				$this->session->set_flashdata('message', 'Petugas berhasil di tambah!');
				$this->M_SQL->insert_data($data, 'tb_berita');
				redirect('dashboard');
			} else {
				$this->session->set_flashdata(
					'message_error',
					'Gagal file foto yang dimasukkan tidak sesuai dengan kriteria!',
				);
				redirect('tambah-Petugas');
			}
		}
	}

	public function update_berita($idp)
	{
		$judul_berita = $this->input->post('judul_berita');
		$isi_berita = $this->input->post('isi_berita');
		$kategori_berita = $this->input->post('kategori_berita');
		$ringkasan = $this->input->post('ringkasan Berita');

		$path = './assets/server-image/dokumen-profile-petugas/';

		if (!empty($_FILES['foto']['name'])) {
			if ($this->upload->do_upload('foto')) {
				$foto = $this->upload->data();
				$data = [
					'nama_petugas' => $judul_berita,
					'author' => 'admin',
					'isi_berita' => $isi_berita,
					'kategori_berita' => $kategori_berita,
					'ringkasan' => $ringkasan,
					'foto_petugas' => $foto['file_name'],
				];
				@unlink($path . $this->input->post('filelama'));

				$this->session->set_flashdata('message', 'Petugas berhasil di ubah!');
				$this->M_SQL->update_data($where, $data, 'petugas');
				redirect('petugas');
			} else {
				$this->session->set_flashdata(
					'message_error',
					'Gagal file foto yang dimasukkan tidak sesuai dengan kriteria!',
				);
				redirect('edit-petugas' . '/' . $idp);
			}
		} else {
			$data = [
				'nama_petugas' => $judul_berita,
				'author' => 'admin',
				'isi_berita' => $isi_berita,
				'kategori_berita' => $kategori_berita,
				'ringkasan' => $ringkasan,
				'foto_petugas' => $foto['file_name'],
			];
			$this->session->set_flashdata('message', 'Petugas berhasil di ubah!');
			$this->M_SQL->update_data($where, $data, 'petugas');
			redirect('petugas');
		}

		$where = ['id_petugas' => $idp];

		$config['upload_path'] = './assets/server-image/dokumen-profile-petugas/';
		$config['allowed_types'] = 'png|jpeg|jpg';
		$config['maax_size'] = '5048';
		$config['max_width'] = '540'; // pixel
		$config['max_height'] = '720'; // pixel
		$config['file_name'] = $_FILES['foto']['name'];

		$this->load->library('upload');
		$this->upload->initialize($config);

		if (!empty($_FILES['foto']['name'])) {
			if ($this->upload->do_upload('foto')) {
				$foto = $this->upload->data();
				$data = [
					'nama_petugas' => $judul_berita,
					'author' => 'admin',
					'isi_berita' => $isi_berita,
					'kategori_berita' => $kategori_berita,
					'ringkasan' => $ringkasan,
					'foto_petugas' => $foto['file_name'],
				];
				@unlink($path . $this->input->post('filelama'));

				$this->session->set_flashdata('message', 'Petugas berhasil di ubah!');
				$this->M_SQL->update_data($where, $data, 'petugas');
				redirect('petugas');
			} else {
				$this->session->set_flashdata(
					'message_error',
					'Gagal file foto yang dimasukkan tidak sesuai dengan kriteria!',
				);
				redirect('edit-petugas' . '/' . $idp);
			}
		} else {
			$data = [
				'nama_petugas' => $judul_berita,
				'author' => 'admin',
				'isi_berita' => $isi_berita,
				'kategori_berita' => $kategori_berita,
				'ringkasan' => $ringkasan,
				'foto_petugas' => $foto['file_name'],
			];
			$this->session->set_flashdata('message', 'Petugas berhasil di ubah!');
			$this->M_SQL->update_data($where, $data, 'petugas');
			redirect('petugas');
		}
	}

	public function w_clear_photo($id, $foto_siswa)
	{
		$jk = $this->input->post('jk_hidden');

		$path = './assets/server-image/dokumen-profile-siswa/';
		@unlink($path . $foto_siswa);

		$where = ['id_siswa' => $id];

		$data = [
			'foto_siswa' => $jk,
		];

		$this->session->set_flashdata('message', 'Foto berhasil di hapus!');
		$this->M_SQL->update_data($where, $data, 'siswa');
		redirect('siswa');
	}
}
