<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bio extends CI_Model
{
    function get_bio()
    {
        return $this->db->get('bio_siswa')->result();
    }
    function insert($data)
    {
        return $this->db->insert('bio_siswa', $data);
    }
    function get_id_bio($id)
    {
        $this->db->where('id_siswa', $id);
        return $this->db->get('bio_siswa')->row();
    }
    function get_id($id)
    {
        $this->db->where('id_pengguna', $id);
        return $this->db->get('bio_siswa')->row();
    }
    function update($id, $data)
    {
        $this->db->where('id_siswa', $id);
        $this->db->update('bio_siswa', $data);
    }
    function delete($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete('bio_siswa');
    }
}
