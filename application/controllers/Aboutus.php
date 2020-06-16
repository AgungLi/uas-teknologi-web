<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{


	public function deden()
	{
		$this->load->view('aboutus/aboutdeden.php');
	}

	public function agung()
	{
		$data = array(
			'title' => 'Agung Laksmana Ismail',
			'judul' => 'Tentang Agung',
			'isi'   => 'aboutus/aboutagung'
		);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}
}
