<?php
// Proteksi halaman admin dengan fungsi cek_login yang ada di simple_login
$this->simple_login->cek_login();

// gabungkan semua bagian layout jadi satu
require_once('head.php');
// require_once('navbar.php');
require_once('sidebar.php');
require_once('content.php');
require_once('footer.php');
