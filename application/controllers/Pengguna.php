<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['title'] = 'Pengguna';
        $data['pengguna'] = $this->M_pengguna->get_pengguna();

        $this->template->load('back/template', 'back/pengguna/pengguna', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Pengguna';

        $data['pengguna'] = $this->M_pengguna->get_pengguna();
        $this->template->load('back/template', 'back/pengguna/tambah_pengguna', $data);
    }


    function tambah_pengguna()
    {
        $this->form_validation->set_rules('nama_pengguna', 'Nama Pengguna', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[pengguna.email]');
        $this->form_validation->set_rules('hak_akses', 'Hak Akses', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('is_unique', 'Email Sudah Tersedia');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nama_pengguna' => $this->input->post('nama_pengguna'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'hak_akses' => $this->input->post('hak_akses'),
                'status_pengguna' => 'Aktif'
            ];
            $this->M_pengguna->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan</div>');
            redirect('pengguna', 'refresh');
        } else {
            $this->index();
        }
    }

    function edit_pengguna($id)
    {
        $data['title'] = 'Edit Data';
        $data['penggunak'] = $this->M_pengguna->get_id_pengguna($id);

        if ($data['penggunak']) {
            $data['pengguna'] = $this->M_pengguna->get_pengguna();
            $this->template->load('back/template', 'back/pengguna/edit_pengguna', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Tidak Terdapat Data</div>');
            redirect('pengguna', 'refresh');
        }
    }

    function ubah_pengguna()
    {

        if ($this->input->post('email') != $this->input->post('email_lama')) {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[pengguna.email]');
        } else {
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
        }

        $this->form_validation->set_rules('hak_akses', 'Hak Akses', 'trim|required');
        $this->form_validation->set_rules('status_pengguna', 'Status Pengguna', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('is_unique', 'Username Sudah Tersedia');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nama_pengguna' => $this->input->post('nama_pengguna'),
                'email' => $this->input->post('email'),
                'hak_akses' => $this->input->post('hak_akses'),
                'status_pengguna' => $this->input->post('status_pengguna')
            ];
            $this->M_pengguna->update($this->input->post('id_pengguna'), $data);
            $this->form_validation->set_message('is_unique', '');
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil di ubah</div>');
            redirect('pengguna', 'refresh');
        } else {
            $this->edit_pengguna($this->input->post('id_pengguna'));
        }
    }
    public function sett_pass()
    {
        $data['title'] = 'Tambah Pengguna';

        $data['pengguna'] = $this->M_pengguna->get_pengguna();
        $this->template->load('back/template', 'back/pengguna/setting', $data);
    }
    function ubah_password()
    {
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'trim|required');
        $this->form_validation->set_rules('password_baru', 'password Baru', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_konfirmasi', 'Password Konfirmasi', 'trim|matches[password_baru]|required');
        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('min_length', 'panjang password minimal 6 karakter');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE && password_verify($this->input->post('password_lama'), $this->session->password)) {
            $data = [
                'password' => password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT),
            ];
            $this->M_pengguna->update($this->session->id_pengguna, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Password Berhasil Diubah</div>');
            redirect('pengguna/sett_pass', 'refresh');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Password Gagal Diubah</div>');
            $this->sett_pass();
            $this->session->set_flashdata('message', '');
        }
    }

    function delete_pengguna($id)
    {
        $delete = $this->M_pengguna->get_id_pengguna($id);
        if ($delete) {
            $this->M_pengguna->delete($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success">Data Berhasil di hapus</div>');
            redirect('pengguna', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger">Data tidak ditemukan</div>');
            redirect('pengguna', 'refresh');
        }
    }
}
