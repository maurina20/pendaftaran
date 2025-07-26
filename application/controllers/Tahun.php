<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tahun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['title'] = 'Tahun';
        $data['tahun'] = $this->M_tahun->get_tahun();

        $this->template->load('back/template', 'back/tahun/tahun', $data);
    }

    function tambah_tahun()
    {
        $this->form_validation->set_rules('tahun_akademik', 'Tahun Akademik', 'trim|required|is_unique[tahun_akademik.tahun_akademik]');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('is_unique', 'Nama tahun Sudah Tersedia');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'tahun_akademik' => $this->input->post('tahun_akademik'),
                'status_tahun' => 'Aktif'
            ];
            $this->M_tahun->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan</div>');
            redirect('tahun', 'refresh');
        } else {
            $this->index();
        }
    }

    function edit_tahun($id)
    {
        $data['title'] = 'Edit Data';
        $data['tahunk'] = $this->M_tahun->get_id_tahun($id);

        if ($data['tahunk']) {
            $data['tahun'] = $this->M_tahun->get_tahun();
            $this->session->set_flashdata('message', '');
            $this->template->load('back/template', 'back/tahun/edit_tahun', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Tidak Terdapat Data</div>');
            redirect('tahun', 'refresh');
        }
    }

    function ubah_tahun()
    {
        if ($this->input->post('tahun_akademik') != $this->input->post('tahun_akademik_lama')) {
            $this->form_validation->set_rules('tahun_akademik', 'Tahun Akademik', 'trim|required|is_unique[tahun_akademik.tahun_akademik]');
        } else {
            $this->form_validation->set_rules('tahun_akademik', 'Tahun Akademik', 'trim|required');
        }

        $this->form_validation->set_rules('status_tahun', 'Status tahun', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('is_unique', 'Nama tahun Sudah Tersedia');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'tahun_akademik' => $this->input->post('tahun_akademik'),
                'status_tahun' => $this->input->post('status_tahun')
            ];
            $this->M_tahun->update($this->input->post('id_tahun'), $data);
            $this->form_validation->set_message('is_unique', '');
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil di Ubah</div>');
            redirect('tahun', 'refresh');
        } else {
            $this->edit_tahun($this->input->post('id_tahun'));
        }
    }

    function delete_tahun($id)
    {
        $delete = $this->M_tahun->get_id_tahun($id);
        if ($delete) {
            $this->M_tahun->delete($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success">Data Berhasil di hapus</div>');
            redirect('tahun', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger">Data tidak ditemukan</div>');
            redirect('tahun', 'refresh');
        }
    }
}
