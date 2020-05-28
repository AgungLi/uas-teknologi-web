<?php
defined('BASEPATH') or exit('No direact script access allowed');

class Login extends CI_Controller
{
    //halaman login
    public function index()
    {
        $data = array('title' => 'Login Admin');
        $this->load->view('login/list', $data, FALSE);
    }
}
