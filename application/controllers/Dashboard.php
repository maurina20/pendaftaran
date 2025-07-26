<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['jurusana'] = $this->M_jurusan->get_id_jurusan(1);
        $data['jurusanb'] = $this->M_jurusan->get_id_jurusan(2);
        $data['jurusanc'] = $this->M_jurusan->get_id_jurusan(3);

        $data['htpengguna'] = $this->M_pengguna->hitung_pengguna_siswa();
        $data['htjmlha'] = $this->M_daftar->hitung_jmla();
        $data['htjmlhb'] = $this->M_daftar->hitung_jmlb();
        $data['htjmlhc'] = $this->M_daftar->hitung_jmlc();

        $this->template->load('back/template', 'back/dashboard', $data);
    }
}
