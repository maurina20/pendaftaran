<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jurusan extends CI_Model
{

    function get_jurusan()
    {
        return $this->db->get('jurusan')->result();
    }
    function get_jurusan_daftar()
    {
        $this->db->where('status_jurusan', 'AKTIF');
        return $this->db->get('jurusan')->result();
    }
    function insert($data)
    {
        return $this->db->insert('jurusan', $data);
    }
    function get_id_jurusan($id)
    {
        $this->db->where('id_jurusan', $id);
        return $this->db->get('jurusan')->row();
    }
    function update($id, $data)
    {
        $this->db->where('id_jurusan', $id);
        $this->db->update('jurusan', $data);
    }
    function delete($id)
    {
        $this->db->where('id_jurusan', $id);
        $this->db->delete('jurusan');
    }
}
