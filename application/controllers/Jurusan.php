<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['title'] = 'Jurusan';
        $data['jurusan'] = $this->M_jurusan->get_jurusan();

        $this->template->load('back/template', 'back/jurusan/jurusan', $data);
    }

    // function tambah_jurusan()
    // {
    //     $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'trim|required|is_unique[jurusan.nama_jurusan]');

    //     $this->form_validation->set_message('required', '{field} Harus di isi');
    //     $this->form_validation->set_message('is_unique', 'Nama Jurusan Sudah Tersedia');
    //     $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

    //     if ($this->form_validation->run() == TRUE) {
    //         $data = [
    //             'nama_Jurusan' => $this->input->post('nama_jurusan'),
    //             'status_jurusan' => 'Aktif'
    //         ];
    //         $this->M_jurusan->insert($data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan</div>');
    //         redirect('jurusan', 'refresh');
    //     } else {
    //         $this->index();
    //     }
    // }

    function edit_jurusan($id)
    {
        $data['title'] = 'Edit Data';
        $data['jurusank'] = $this->M_jurusan->get_id_jurusan($id);

        if ($data['jurusank']) {
            $data['jurusan'] = $this->M_jurusan->get_jurusan();
            $this->session->set_flashdata('message', '');
            $this->template->load('back/template', 'back/Jurusan/edit_jurusan', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Tidak Terdapat Data</div>');
            redirect('jurusan', 'refresh');
        }
    }

    function ubah_jurusan()
    {
        if ($this->input->post('nama_jurusan') != $this->input->post('nama_jurusan_lama')) {
            $this->form_validation->set_rules('nama_jurusan', 'Jurusan', 'trim|required|is_unique[jurusan.nama_jurusan]');
        } else {
            $this->form_validation->set_rules('nama_jurusan', 'Jurusan', 'trim|required');
        }

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('is_unique', 'Nama Jurusan Sudah Tersedia');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nama_Jurusan' => $this->input->post('nama_jurusan'),
            ];
            $this->M_jurusan->update($this->input->post('id_jurusan'), $data);
            $this->form_validation->set_message('is_unique', '');
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil di Ubah</div>');
            redirect('jurusan', 'refresh');
        } else {
            $this->edit_jurusan($this->input->post('id_jurusan'));
        }
    }

    // function delete_jurusan($id)
    // {
    //     $delete = $this->M_jurusan->get_id_jurusan($id);
    //     if ($delete) {
    //         $this->M_jurusan->delete($id);
    //         $this->session->set_flashdata('hapus', '<div class="alert alert-success">Data Berhasil di hapus</div>');
    //         redirect('jurusan', 'refresh');
    //     } else {
    //         $this->session->set_flashdata('hapus', '<div class="alert alert-danger">Data tidak ditemukan</div>');
    //         redirect('jurusan', 'refresh');
    //     }
    // }
}
