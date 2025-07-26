<?php
defined('BASEPATH') or exit('No direct script access allowed');

function cek_login()
{
    $CL = &get_instance();
    $email = $CL->session->email;
    if ($email == NULL) {
        $CL->session->set_flashdata('message', '<div class="alert alert-danger"> Anda Harus Login Terlebih Dahulu</div>');
        redirect('auth');
    }
}
