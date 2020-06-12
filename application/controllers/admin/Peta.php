<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Dashboard data Covid19',
            'judul' => 'Peta Penyebaran Covid19 Di Indonesia Berdasarkan Provinsi',
            'isi'   => 'admin/dasbor/peta'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
