<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_daftar extends CI_Model
{
    function get_daftar()
    {
        $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
        $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
        $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
        return $this->db->get('daftar')->result();
    }
    function insert($data)
    {
        return $this->db->insert('daftar', $data);
    }
    function get_id_daftar($id)
    {
        $this->db->where('id_daftar', $id);
        return $this->db->get('daftar')->row();
    }
    function get_id_siswa($id)
    {
        $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
        $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
        $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
        $this->db->where('id_pengguna', $id);
        return $this->db->get('daftar')->row();
    }
    function get_id_sis($id)
    {
        $this->db->join('bio_siswa', 'daftar.id_siswa=bio_siswa.id_siswa');
        $this->db->join('jurusan', 'daftar.id_jurusan=jurusan.id_jurusan');
        $this->db->join('tahun_akademik', 'daftar.id_tahun=tahun_akademik.id_tahun');
        $this->db->where('daftar.id_siswa', $id);
        return $this->db->get('daftar')->row();
    }
    function update($id, $data)
    {
        $this->db->where('id_daftar', $id);
        $this->db->update('daftar', $data);
    }
    function delete($id)
    {
        $this->db->where('id_daftar', $id);
        $this->db->delete('daftar');
    }

    function hitung_jmla()
    {
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->where('id_jurusan', 1);
        return $this->db->get()->num_rows();
    }
    function hitung_jmlb()
    {
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->where('id_jurusan', 2);
        return $this->db->get()->num_rows();
    }
    function hitung_jmlc()
    {
        $this->db->select('*');
        $this->db->from('daftar');
        $this->db->where('id_jurusan', 3);
        return $this->db->get()->num_rows();
    }
}
