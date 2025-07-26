<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftarsiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['title'] = 'Pendaftaran';
        $data['daftar'] = $this->M_daftar->get_daftar();
        $data['dafsis'] = $this->M_daftar->get_id_siswa($this->session->userdata('id_pengguna'));
        $data['biok'] = $this->M_bio->get_id($this->session->userdata('id_pengguna'));

        if ($data['biok']) {
            if ($data['dafsis']) {
                $this->template->load('back/template', 'back/daftar/lihat_daftar', $data);
            } else {
                $data['bio'] = $this->M_bio->get_bio();
                $data['tahun'] = $this->M_tahun->get_tahun_daftar();
                $data['jurusan'] = $this->M_jurusan->get_jurusan_daftar();
                $this->template->load('back/template', 'back/daftar/tambah_daftar', $data);
            }
        } else {
            $this->template->load('back/template', 'back/bio/tambah_bio', $data);
        }
    }

    function tambah_daftar()
    {
        if (isset($_POST['submit'])) {
            $config['upload_path']          = './assets/dokung/';
            $config['allowed_types']        = 'jpg|png|jpeg|pdf';
            $config['max_size']             = 10240;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            //pasfoto
            if (!empty($_FILES['pasfoto']['name'])) {
                $this->upload->do_upload('pasfoto');
                $datapasfoto = $this->upload->data();
                $filepasfoto = $datapasfoto['file_name'];
            }
            //dok_akta
            if (!empty($_FILES['dok_akta']['name'])) {
                $this->upload->do_upload('dok_akta');
                $datadok_akta = $this->upload->data();
                $filedok_akta = $datadok_akta['file_name'];
            }
            //dok_ijazah
            if (!empty($_FILES['dok_ijazah']['name'])) {
                $this->upload->do_upload('dok_ijazah');
                $datadok_ijazah = $this->upload->data();
                $filedok_ijazah = $datadok_ijazah['file_name'];
            }
            //dok_skl
            if (!empty($_FILES['dok_skl']['name'])) {
                $this->upload->do_upload('dok_skl');
                $datadok_skl = $this->upload->data();
                $filedok_skl = $datadok_skl['file_name'];
            }
            //dok_skn
            if (!empty($_FILES['dok_skn']['name'])) {
                $this->upload->do_upload('dok_skn');
                $datadok_skn = $this->upload->data();
                $filedok_skn = $datadok_skn['file_name'];
            }
            //
            if (!empty($_FILES['dok_rapor']['name'])) {
                $this->upload->do_upload('dok_rapor');
                $datadok_rapor = $this->upload->data();
                $filedok_rapor = $datadok_rapor['file_name'];
            }
            //dok_ktp_ortu
            if (!empty($_FILES['dok_ktp_ortu']['name'])) {
                $this->upload->do_upload('dok_ktp_ortu');
                $datadok_ktp_ortu = $this->upload->data();
                $filedok_ktp_ortu = $datadok_ktp_ortu['file_name'];
            }
            //dok_kk
            if (!empty($_FILES['dok_kk']['name'])) {
                $this->upload->do_upload('dok_kk');
                $datadok_kk = $this->upload->data();
                $filedok_kk = $datadok_kk['file_name'];
            }
            //dok_prestasi
            if (!empty($_FILES['dok_prestasi']['name'])) {
                $this->upload->do_upload('dok_prestasi');
                $datadok_prestasi = $this->upload->data();
                $filedok_prestasi = $datadok_prestasi['file_name'];
            }

            $this->form_validation->set_rules('id_siswa', 'Nama Lengkap', 'trim|required');
            $this->form_validation->set_rules('id_jurusan', 'Jurusan', 'trim|required');
            $this->form_validation->set_rules('id_tahun', 'Tahun Akademik', 'trim|required');

            $this->form_validation->set_message('required', '{field} Harus di isi');
            $this->form_validation->set_message('is_unique', 'Email Sudah Tersedia');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            if ($this->form_validation->run() == TRUE) {

                $data = [
                    'id_siswa' => $this->input->post('id_siswa'),
                    'id_jurusan' => $this->input->post('id_jurusan'),
                    'id_tahun' => $this->input->post('id_tahun'),
                    'tgl_daftar' => date('Y-m-d'),
                    'pasfoto' => $filepasfoto,
                    'dok_akta' => $filedok_akta,
                    'dok_ijazah' => $filedok_ijazah,
                    'dok_skl' => $filedok_skl,
                    'dok_skn' => $filedok_skn,
                    'dok_rapor' => $filedok_rapor,
                    'dok_ktp_ortu' => $filedok_ktp_ortu,
                    'dok_kk' => $filedok_kk,
                    'prestasi' => $this->input->post('prestasi'),
                    'dok_prestasi' => $filedok_prestasi,
                    'status_daftar' => 'DAFTAR'
                ];

                $this->M_daftar->insert($data);
                $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Disimpan</div>');
                redirect('daftarsiswa', 'refresh');
            } else {
                $this->index();
            }
        } else {
            $this->index();
        }
    }

    function edit_daftar($id)
    {
        $data['title'] = 'Edit Data';
        $data['daftark'] = $this->M_daftar->get_id_daftar($id);

        if ($data['daftark']) {
            $data['daftar'] = $this->M_daftar->get_daftar();
            $this->template->load('back/template', 'back/daftar/edit_daftar', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Tidak Terdapat Data</div>');
            redirect('daftar', 'refresh');
        }
    }

    function ubah_daftar()
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
            $this->M_daftar->update($this->input->post('id_siswa'), $data);
            $this->form_validation->set_message('is_unique', '');
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil di ubah</div>');
            redirect('daftar', 'refresh');
        } else {
            $this->edit_daftar($this->input->post('id_daftar'));
        }
    }

    public function cetak()
    {
        $this->load->library('pdfgenerator');
        $data['daftar'] = $this->M_daftar->get_daftar();
        $data['dafsis'] = $this->M_daftar->get_id_sis($this->input->post('id_siswa'));

        $data['title'] = "Cetak Pendaftaran";
        $file_pdf = $data['title'];
        $paper = 'A4';
        $orientation = "portrait";

        $html = $this->load->view('back/daftar/cetak_pendaftaran', $data, true);

        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }


    function delete_daftar($id)
    {
        $delete = $this->M_daftar->get_id_daftar($id);
        if ($delete) {
            $this->M_daftar->delete($id);
            $this->session->set_flashdata('hapus', '<div class="alert alert-success">Data Berhasil di hapus</div>');
            redirect('daftar', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger">Data tidak ditemukan</div>');
            redirect('daftar', 'refresh');
        }
    }
}
