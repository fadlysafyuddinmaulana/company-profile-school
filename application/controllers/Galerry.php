<?php

class Gallery extends CI_Controller
{
    public function index()
    {
        $user = $this->session->userdata('server_library');

        $data['title'] = 'PAUD JAMI ASSOFA';
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

    public function add_gallery()
    {
        $user = $this->session->userdata('server_library');

        $data['title'] = 'PAUD JAMI ASSOFA';
        $data['aktif'] = 'petugas';

        if ($user['role'] == 'admin') {
            $data['tree_active'] = 'petugas';
        }

        $data['petugas'] = $this->db->get('petugas')->result();

        $this->load->view('layout/header_admin', $data);
        $this->load->view('layout/navbar_admin', $data);
        $this->load->view('Petugas-Page/add_berita', $data);
        $this->load->view('layout/footer_admin', $data);
    }

    public function edit_news($ido)
    {
        $user = $this->session->userdata('server_library');

        $data['title'] = 'PAUD JAMI ASSOFA';
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

    public function detail_berita($idptgs)
    {
        $user = $this->session->userdata('server_library');

        $data['title'] = 'PAUD JAMI ASSOFA';
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

            $data['title'] = 'PAUD JAMI ASSOFA';
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

    public function del_news($id)
    {
        $where = array('id_berita' => $id);

        $this->M_SQL->delete_data($where, 'tb_berita');

        redirect('dashboard');
    }
}
