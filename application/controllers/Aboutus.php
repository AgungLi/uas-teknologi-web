<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{

	public function nihlah()
	{
		$data = array(
			'title' => 'Nihlah',
			'judul' => 'Tentang Nihlah',
			'isi'   => 'aboutus/aboutnihlah'
		);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function senas()
	{
		$this->load->view('aboutus/aboutsenas.php');
	}

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
		$this->load->view('layout/wrapper', $data, FALSE);
	}
}
