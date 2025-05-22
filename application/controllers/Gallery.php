<?php

class Gallery extends CI_Controller
{
    public function add_gallery()
    {
        $data['title'] = 'PAUD JAMI ASSOFA';
        $data['active'] = 'galeri';

        $this->load->view('layout/header_login', $data);
        $this->load->view('galeri/add_galeri', $data);
        $this->load->view('layout/footer_login', $data);
    }

    public function edit_gallery($idf)
    {
        $data['title'] = 'PAUD JAMI ASSOFA';
        $data['active'] = 'galeri';

        $where = array('id_foto' => $idf);

        $data['foto'] = $this->M_SQL->get_data($where, 'tb_foto')->row();

        $this->load->view('layout/header_login', $data);
        $this->load->view('berita/edit_berita', $data);
        $this->load->view('layout/footer_login', $data);
    }

    public function insert_gallery()
    {
        $judul_foto = $this->input->post('judul_foto');

        $config['upload_path'] = './assets/img/gallery';
        $config['allowed_types'] = 'png|jpeg|jpg';
        $config['max_size'] = '10240';
        $config['file_name'] = $_FILES['foto']['name'];

        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            $foto = $this->upload->data();
            $data = [
                'judul_foto' => $judul_foto,
                'file_image' => $foto['file_name'],
            ];
            $this->M_SQL->insert_data($data, 'tb_foto');
            redirect('gallery');
        } else {
            redirect('gallery');
        }
    }

    public function update_gallery($id_gallery)
    {
        $id_gallery = $this->input->post('id_foto');
        $judul_foto = $this->input->post('judul_foto');

        $path = './assets/img/gallery';

        $where = array('id_foto' => $id_gallery);

        $config['upload_path']      = './assets/img/berita';
        $config['allowed_types']    = 'png|jpeg|jpg';
        $config['max_size']         = '10240';
        $config['file_name']        = $_FILES['foto']['name'];

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data();
                $data = [
                    'judul_foto' => $judul_foto,
                    'file_image' => $foto['file_name'],
                ];
                @unlink($path . $this->input->post('filelama'));

                $this->M_SQL->update_data($where, $data, 'tb_foto');
                redirect('dashboard');
            } else {
                redirect('edit-news' . '/' . $id_berita);
            }
        } else {
            $data = array(
                'judul_foto' => $judul_foto,
            );

            $this->M_SQL->update_data($where, $data, 'tb_foto');
            redirect('dashboard');
        }
    }

    public function del_gallery($id)
    {
        $where = array('id_foto' => $id);

        $this->M_SQL->delete_data($where, 'tb_foto');

        redirect('dashboard');
    }
}
