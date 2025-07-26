<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tahun extends CI_Model
{

    function get_tahun()
    {
        return $this->db->get('tahun_akademik')->result();
    }
    function get_tahun_daftar()
    {
        $this->db->where('status_tahun', 'AKTIF');
        return $this->db->get('tahun_akademik')->result();
    }
    function insert($data)
    {
        return $this->db->insert('tahun_akademik', $data);
    }
    function get_id_tahun($id)
    {
        $this->db->where('id_tahun', $id);
        return $this->db->get('tahun_akademik')->row();
    }
    function update($id, $data)
    {
        $this->db->where('id_tahun', $id);
        $this->db->update('tahun_akademik', $data);
    }
    function delete($id)
    {
        $this->db->where('id_tahun', $id);
        $this->db->delete('tahun_akademik');
    }
}
