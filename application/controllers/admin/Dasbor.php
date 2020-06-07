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
        $readAPI = file_get_contents('https://api.kawalcorona.com/indonesia');
        $nasional = json_decode($readAPI, true);
        $provinsi = json_decode(file_get_contents("https://api.kawalcorona.com/indonesia/provinsi/"), true);

        $data = array(
            'title' => 'Dashboard data Covid19',
            'judul' => 'Kasus Covid 19 di Indonesia',
            'nasional' => $nasional,
            'provinsi' => $provinsi,
            'isi'   => 'admin/dasbor/list'
        );
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}
