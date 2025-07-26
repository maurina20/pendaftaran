<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('back/login');
    }

    function proses_login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            $penggunaa = $this->M_auth->get_email($this->input->post('email'));
            if ($penggunaa && password_verify($this->input->post('password'), $penggunaa->password)) {
                if ($penggunaa->status_pengguna == 'Non-Aktif') {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Email Sudah Tidak Aktif, Silahkan Hubungi Admin STIKOM</div>');
                    redirect('auth', 'refresh');
                } else {
                    $session = array(
                        'id_pengguna'  => $penggunaa->id_pengguna,
                        'nama_pengguna'  => $penggunaa->nama_pengguna,
                        'email'  => $penggunaa->email,
                        'password'  => $penggunaa->password,
                        'jabatan'  => $penggunaa->jabatan,
                        'hak_akses'  => $penggunaa->hak_akses,
                        'status_pengguna'  => $penggunaa->status_pengguna,
                    );
                    $this->session->set_userdata($session);
                    redirect('dashboard');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Email atau Password Salah</div>');
                redirect('auth', 'refresh');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Email atau Password Tidak Boleh Kosong</div>');
            redirect('auth', 'refresh');
        }
    }

    public function registerr()
    {
        $this->load->view('back/register');
    }

    function proses_register()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[pengguna.email]');
        $this->form_validation->set_rules('nama_pengguna', 'Nama User', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm', 'Konfirmasi Password', 'trim|matches[password]|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('min_length[6]', 'Panjang Karakter Harus terdiri dari 6 Karakter');
        $this->form_validation->set_message('matches', 'Password yang Anda Masukkan Berbeda');
        $this->form_validation->set_message('is_unique', 'Email Sudah Tersedia');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nama_pengguna' => $this->input->post('nama_pengguna'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'hak_akses' => 'SISWA',
                'status_pengguna' => 'Aktif'
            ];

            $this->M_auth->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan</div>');
            redirect('auth', 'refresh');
        } else {
            $this->load->view('back/register');
        }
    }

    public function forgot()
    {
        $this->load->view('back/forgot_password');
    }

    function password_new()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        $data['penggunak'] = $this->M_pengguna->get_email_forgot($this->input->post('email'));

        if ($data['penggunak']) {
            $data['pengguna'] = $this->M_pengguna->get_pengguna();
            $this->load->view('back/new_password', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Tidak Terdapat Data</div>');
            redirect('auth', 'refresh');
        }
    }

    function ubah_password()
    {
        $this->form_validation->set_rules('new_pasword', 'Password Baru', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('pasword_new', 'Confirm Password', 'trim|matches[new_pasword]|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('min_length', 'panjang password minimal 6 karakter');
        $this->form_validation->set_message('matches', 'Password Tidak Sesuai');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'password' => password_hash($this->input->post('new_pasword'), PASSWORD_DEFAULT)
            ];
            $this->M_pengguna->update($this->input->post('id_pengguna'), $data);
            $this->form_validation->set_message('is_unique', '');
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil di Ubah</div>');
            redirect('auth', 'refresh');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Password Gagal Diubah</div>');
            redirect('auth/password_new', 'refresh');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-Success">Anda Berhasil Logout</div>');
        redirect('landing');
    }
}
