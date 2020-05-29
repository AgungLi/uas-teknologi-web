<?php
defined('BASEPATH') or exit('No direact script access allowed');

class Dasbor extends CI_Controller
{
    // load model
    public function __construct()
    {
        parent::__construct();
        // proteksi halaman
        $this->simple_login->cek_login();
    }
    //halaman dasbor
    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/dasbor/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
