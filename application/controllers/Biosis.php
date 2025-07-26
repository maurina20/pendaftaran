<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biosis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['title'] = 'Biodata';
        $data['biok'] = $this->M_bio->get_id($this->session->userdata('id_pengguna'));
        $data['dafsis'] = $this->M_daftar->get_id_siswa($this->session->userdata('id_pengguna'));

        if ($data['biok']) {
            if ($data['dafsis']) {
                $data['bio'] = $this->M_bio->get_bio();
                $this->template->load('back/template', 'back/bio/lihat_siswa', $data);
            } else {
                $data['bio'] = $this->M_bio->get_bio();
                $this->template->load('back/template', 'back/bio/siswa', $data);
            }
        } else {
            $this->template->load('back/template', 'back/bio/tambah_bio', $data);
        }
    }


    function tambah_bio()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('is_unique', 'Email Sudah Tersedia');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'id_pengguna' => $this->session->userdata('id_pengguna'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nik' => $this->input->post('nik'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'agama ' => $this->input->post('agama'),
                'kontak_hp_siswa' => $this->input->post('kontak_hp_siswa'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'desa_siswa' => $this->input->post('desa_siswa'),
                'kecamatan_siswa' => $this->input->post('kecamatan_siswa'),
                'kabupaten_siswa' => $this->input->post('kabupaten_siswa'),
                'provinsi_siswa' => $this->input->post('provinsi_siswa'),
                'nisn' => $this->input->post('nisn'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
                'alamat_sekolah' => $this->input->post('alamat_sekolah'),
                'desa_sekolah' => $this->input->post('desa_sekolah'),
                'kecamatan_sekolah' => $this->input->post('kecamatan_sekolah'),
                'kabupaten_sekolah' => $this->input->post('kabupaten_sekolah'),
                'provinsi_sekolah' => $this->input->post('provinsi_sekolah'),
                'nama_ortu' => $this->input->post('nama_ortu'),
                'kontak_hp_ortu' => $this->input->post('kontak_hp_ortu'),
                'pendidikan_ortu' => $this->input->post('pendidikan_ortu'),
                'pekerjaan_ortu' => $this->input->post('pekerjaan_ortu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
                'desa_ortu' => $this->input->post('desa_ortu'),
                'kecamatan_ortu' => $this->input->post('kecamatan_ortu'),
                'kabupaten_ortu' => $this->input->post('kabupaten_ortu'),
                'provinsi_ortu' => $this->input->post('provinsi_ortu')
            ];
            $this->M_bio->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan</div>');
            redirect('biosis', 'refresh');
        } else {
            $this->index();
        }
    }

    function edit_bio($id)
    {
        $data['title'] = 'Edit Data';
        $data['biok'] = $this->M_bio->get_id_bio($id);

        if ($data['biok']) {
            $data['bio'] = $this->M_bio->get_bio();
            $this->template->load('back/template', 'back/bio/edit_siswa', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Tidak Terdapat Data</div>');
            redirect('biosis', 'refresh');
        }
    }

    function ubah_bio()
    {

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');

        $this->form_validation->set_message('required', '{field} Harus di isi');
        $this->form_validation->set_message('is_unique', 'Username Sudah Tersedia');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'id_pengguna' => $this->session->userdata('id_pengguna'),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nik' => $this->input->post('nik'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'agama ' => $this->input->post('agama'),
                'kontak_hp_siswa' => $this->input->post('kontak_hp_siswa'),
                'alamat_siswa' => $this->input->post('alamat_siswa'),
                'desa_siswa' => $this->input->post('desa_siswa'),
                'kecamatan_siswa' => $this->input->post('kecamatan_siswa'),
                'kabupaten_siswa' => $this->input->post('kabupaten_siswa'),
                'provinsi_siswa' => $this->input->post('provinsi_siswa'),
                'nisn' => $this->input->post('nisn'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
                'alamat_sekolah' => $this->input->post('alamat_sekolah'),
                'desa_sekolah' => $this->input->post('desa_sekolah'),
                'kecamatan_sekolah' => $this->input->post('kecamatan_sekolah'),
                'kabupaten_sekolah' => $this->input->post('kabupaten_sekolah'),
                'provinsi_sekolah' => $this->input->post('provinsi_sekolah'),
                'nama_ortu' => $this->input->post('nama_ortu'),
                'kontak_hp_ortu' => $this->input->post('kontak_hp_ortu'),
                'pendidikan_ortu' => $this->input->post('pendidikan_ortu'),
                'pekerjaan_ortu' => $this->input->post('pekerjaan_ortu'),
                'alamat_ortu' => $this->input->post('alamat_ortu'),
                'desa_ortu' => $this->input->post('desa_ortu'),
                'kecamatan_ortu' => $this->input->post('kecamatan_ortu'),
                'kabupaten_ortu' => $this->input->post('kabupaten_ortu'),
                'provinsi_ortu' => $this->input->post('provinsi_ortu')
            ];
            $this->M_bio->update($this->input->post('id_siswa'), $data);
            $this->form_validation->set_message('is_unique', '');
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil di ubah</div>');
            redirect('biosis', 'refresh');
        } else {
            $this->edit_bio($this->input->post('id_bio'));
        }
    }

    function delete_bio($id)
    {
        $delete = $this->M_bio->get_id_bio($id);
        if ($delete) {
            $this->M_bio->delete($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success">Data Berhasil di hapus</div>');
            redirect('bio', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger">Data tidak ditemukan</div>');
            redirect('bio', 'refresh');
        }
    }
}
