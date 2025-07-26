<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{

    function get_laporan($tahun, $jurusan, $jenkel, $status)
    {
        if ($tahun != NULL && $jurusan != NULL && $jenkel != NULL && $status != NULL) { //semua isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_tahun =', $tahun);
            $this->db->where('daftar.id_jurusan =', $jurusan);
            $this->db->where('bio_siswa.jenis_kelamin =', $jenkel);
            $this->db->where('daftar.status_daftar =', $status);
        } else if ($tahun != NULL && $jurusan == NULL && $jenkel == NULL && $status == NULL) { //tahun isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_tahun =', $tahun);
        } else if ($tahun == NULL && $jurusan != NULL && $jenkel == NULL && $status == NULL) { //jurusan isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_jurusan =', $jurusan);
        } else if ($tahun == NULL && $jurusan == NULL && $jenkel != NULL && $status == NULL) { //jenkel isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('bio_siswa.jenis_kelamin =', $jenkel);
        } else if ($tahun == NULL && $jurusan == NULL && $jenkel == NULL && $status != NULL) { //status isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.status_daftar =', $status);
        } else if ($tahun != NULL && $jurusan != NULL && $jenkel == NULL && $status == NULL) { //tahun jurusan isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_tahun =', $tahun);
            $this->db->where('daftar.id_jurusan =', $jurusan);
        } else if ($tahun != NULL && $jurusan == NULL && $jenkel != NULL && $status == NULL) { //tahun jenkel isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_tahun =', $tahun);
            $this->db->where('bio_siswa.jenis_kelamin =', $jenkel);
        } else if ($tahun != NULL && $jurusan == NULL && $jenkel == NULL && $status != NULL) { //tahun status isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_tahun =', $tahun);
            $this->db->where('daftar.status_daftar =', $status);
        } else if ($tahun == NULL && $jurusan != NULL && $jenkel != NULL && $status == NULL) { //jurusan jenkel isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_jurusan =', $jurusan);
            $this->db->where('bio_siswa.jenis_kelamin =', $jenkel);
        } else if ($tahun == NULL && $jurusan != NULL && $jenkel == NULL && $status != NULL) { //jurusan status isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_jurusan =', $jurusan);
            $this->db->where('daftar.status_daftar =', $status);
        } else if ($tahun == NULL && $jurusan == NULL && $jenkel != NULL && $status != NULL) { //jenkel status isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('bio_siswa.jenis_kelamin =', $jenkel);
            $this->db->where('daftar.status_daftar =', $status);
        } else if ($tahun != NULL && $jurusan != NULL && $jenkel != NULL && $status == NULL) { //tahun jurusan jenkel isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_tahun =', $tahun);
            $this->db->where('daftar.id_jurusan =', $jurusan);
            $this->db->where('bio_siswa.jenis_kelamin =', $jenkel);
        } else if ($tahun != NULL && $jurusan != NULL && $jenkel == NULL && $status != NULL) { //tahun jurusan status isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_tahun =', $tahun);
            $this->db->where('daftar.id_jurusan =', $jurusan);
            $this->db->where('daftar.status_daftar =', $status);
        } else if ($tahun != NULL && $jurusan == NULL && $jenkel != NULL && $status != NULL) { //tahun jenkel status isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_tahun =', $tahun);
            $this->db->where('bio_siswa.jenis_kelamin =', $jenkel);
            $this->db->where('daftar.status_daftar =', $status);
        } else if ($tahun == NULL && $jurusan != NULL && $jenkel != NULL && $status != NULL) { //jurusan jenkel status isi
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
            $this->db->where('daftar.id_jurusan =', $jurusan);
            $this->db->where('bio_siswa.jenis_kelamin =', $jenkel);
            $this->db->where('daftar.status_daftar =', $status);
        } else {
            $this->db->select('*');
            $this->db->from('daftar');
            $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
            $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
            $this->db->join('pengguna', 'bio_siswa.id_pengguna=pengguna.id_pengguna');
            $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
        }
        return $this->db->get();
    }


    public static function tgl_id($date)
    {
        $str = explode('-', $date);
        $bulan = array(
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        );
        return $str['0'] . " " . $bulan[$str[1]] . " " . $str[2];
    }
}
