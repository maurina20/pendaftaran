<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['title'] = 'Laporan Pendaftaran';
        $data['tahun'] = $this->M_tahun->get_tahun();
        $data['jurusan'] = $this->M_jurusan->get_jurusan();

        $this->template->load('back/template', 'back/laporan/laporan', $data);
    }
    public function pdf()
    {
        $this->load->library('pdfgenerator');
        $tahun = $this->input->post('id_jenis');
        $jurusan = $this->input->post('id_tempat');
        $jenkel = $this->input->post('jenis_kelamin');
        $status = $this->input->post('status_daftar');

        $data['title'] = "Laporan Pendaftaran";
        $file_pdf = $data['title'];
        $paper = 'A4';
        $orientation = "portrait";

        $data['get_laporan'] = $this->M_laporan->get_laporan($tahun, $jurusan, $jenkel, $status)->result();
        $html = $this->load->view('back/laporan/cetak_laporan', $data, true);

        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
    function laporan_pendaftaran()
    {
        $tahun = $this->input->post('id_jenis');
        $jurusan = $this->input->post('id_tempat');
        $jenkel = $this->input->post('jenis_kelamin');
        $status = $this->input->post('status_daftar');

        $data['get_laporan'] = $this->M_laporan->get_laporan($tahun, $jurusan, $jenkel, $status)->result();

        $this->load->view('back/laporan/cetak_laporan', $data);
    }
}
