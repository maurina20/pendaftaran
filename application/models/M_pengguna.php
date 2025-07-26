<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengguna extends CI_Model
{
    function get_pengguna()
    {
        return $this->db->get('pengguna')->result();
    }
    function insert($data)
    {
        return $this->db->insert('pengguna', $data);
    }
    function get_id_pengguna($id)
    {
        $this->db->where('id_pengguna', $id);
        return $this->db->get('pengguna')->row();
    }
    function get_email_forgot($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('pengguna')->row();
    }
    function update($id, $data)
    {
        $this->db->where('id_pengguna', $id);
        $this->db->update('pengguna', $data);
    }
    function delete($id)
    {
        $this->db->where('id_pengguna', $id);
        $this->db->delete('pengguna');
    }
    function hitung_pengguna_siswa()
    {
        $this->db->select('*');
        $this->db->from('pengguna');
        $this->db->where('hak_akses', 'SISWA');
        return $this->db->get()->num_rows();
    }
}
