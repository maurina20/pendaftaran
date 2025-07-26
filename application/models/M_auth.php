<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
    function get_email($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('pengguna')->row();
    }

    function insert($data)
    {
        $this->db->insert('pengguna', $data);
    }
}
