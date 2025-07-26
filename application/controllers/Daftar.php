<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
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

        $this->template->load('back/template', 'back/daftar/daftar_data', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Data';
        $data['daftar'] = $this->M_daftar->get_daftar();
        $data['biok'] = $this->M_bio->get_id($this->session->userdata('id_pengguna'));

        if ($data['biok']) {
            $data['bio'] = $this->M_bio->get_bio();
            $data['tahun'] = $this->M_tahun->get_tahun_daftar();
            $data['jurusan'] = $this->M_jurusan->get_jurusan_daftar();
            $this->template->load('back/template', 'back/daftar/tambah_daftar', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Tidak Terdapat Data</div>');
            redirect('bio', 'refresh');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Biodata';
        $data['dafsis'] = $this->M_daftar->get_id_sis($id);
        $data['biok'] = $this->M_bio->get_id_bio($id);
        if ($data['dafsis']) {
            $data['bio'] = $this->M_bio->get_bio();
            $this->template->load('back/template', 'back/daftar/lihat_daftar', $data);
        } else {
            $this->template->load('back/template', 'back/bio/tambah_bio', $data);
        }
    }

    function tambah_daftar()
    {
        if (isset($_POST['submit'])) {
            $config['upload_path']          = './asset/dokung/';
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

            $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required');
            $this->form_validation->set_rules('nik', 'NIK', 'trim|required');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');

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
                redirect('daftar', 'refresh');
            } else {
                $this->index();
            }
        } else {
            $this->index();
        }
    }


    function terima($id)
    {
        $terimaa = $this->M_daftar->get_id_daftar($id);
        if ($terimaa) {
            $data = [
                'status_daftar' => 'LOLOS'
            ];
            $this->M_daftar->update($id, $data);
            $this->form_validation->set_message('is_unique', '');
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil di ubah</div>');
            redirect('daftar', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger">Data tidak ditemukan</div>');
            redirect('daftar', 'refresh');
        }
    }
    function tolak($id)
    {
        $tolakk = $this->M_daftar->get_id_daftar($id);
        if ($tolakk) {
            $data = [
                'status_daftar' => 'TIDAK LOLOS'
            ];
            $this->M_daftar->update($id, $data);
            $this->form_validation->set_message('is_unique', '');
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil di ubah</div>');
            redirect('daftar', 'refresh');
        } else {
            $this->session->set_flashdata('hapus', '<div class="alert alert-danger">Data tidak ditemukan</div>');
            redirect('daftar', 'refresh');
        }
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
