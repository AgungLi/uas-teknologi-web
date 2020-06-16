<!DOCTYPE html>
<html>

<head>
	<title>Deden Martia Nanda</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!-- mengambil CSS Eksternal -->
	<link href="<?php echo base_url('assets/css/style.css') ?>"" rel=" stylesheet">
</head>

<body>
	<section>
		<nav>
			<div class="toggle">
				<button onclick="menu_open()" class="tombol tombol-navigasi">Menu</button>
			</div>
			<ul style="padding-top:20px;" id="menu-list">
				<li><a href="#aboutme">About Me</a></li>
				<li><a href="#education">Education</a></li>
				<li><a href="http://localhost/uasteknologiweb/admin/dasbor">Back</a></li>

			</ul>
		</nav>
		<div class="sosmed">
			<div class="isi-sosmed">
				<a href="https://github.com/dedenmartya/" target="_blank"><img src="<?php echo base_url() ?>./assets/images/github.png"> </a>
				<a href="https://api.whatsapp.com/send?phone=6287722305299&text=Assalamualaikum" target="_blank"><img src="<?php echo base_url() ?>./assets/images/wa2.png"></a>
				<a href="https://www.instagram.com/3rdinjection/" target="_blank"><img src="<?php echo base_url() ?>./assets/images/ig.png"> </a>
				<a href="mailto:dedenmartya1@gmail.com" target="_blank"><img src="<?php echo base_url() ?>./assets/images/gmail.png"></a>
				<a href="https://www.facebook.com/dedenmartya" target="_blank"><img style="width:38px;" src="<?php echo base_url() ?>./assets/images/fb.png"></a>
			</div>
		</div>

		<div class="banner">
			<center>
				<div id="circle3"></div>
				<div id="circle2"></div>
				<div id="circle"></div>
				<div class="title">
					<h1 class="name">Deden Martia Nanda!</h1>

					<!-- <div class="circle-small">

				</div>
			</center>
		</div>
		<div id="aboutme">
		</div>
		<!-- Start SVG Curve -->
					<svg id="curve" viewBox="0 0 1400 214.953" xml:space="preserve">
						<path style="opacity:1;" d="M0,139.29C207.803,40.048,277.683-60.968,472.864,45.364
					c195.181,106.331,346.987,163.042,481.928,77.975c134.939-85.065,337.348-34.515,437.348,41.225c100,75.743,7.861,6.627,7.861,6.627
					v73.387H0V139.29z" />
					</svg>
					<!-- End SVG Curve -->
	</section>
	<div id="wrapper">
		<section class="sec2">
			<div class="content">
				<div>
					<h1 class="title-content">About Me</h1>
					<div class="left-menu">
						<div class="circle-avatar"></div>

					</div>
					<div class="right-menu">
						<p>
							Hello Nama Saya Deden Martia Nanda, <br />Saya adalah seorang <i class="english">Mahasiswa Informatika di UNJANI</i> <i class="english">(Universitas Jenderal Achmad Yani)</i>
						</p>
						<p>
							Lahir pada bulan <b class="important">Maret</b> tanggal <b class="important">31</b> dan Pada tahun <b class="important">1999</b>, bertempat di <b class="important">Subang</b>, Jawa Barat, Indonesia.
						</p>
						<p>
							Hobby saya adalah <b class="important">Fotografi, berkreasi seni dan Travelling </b>, Bagi saya fotografi bukan hanya sekadar menyalurkan hobby belaka tetapi mampu menghasilkan sebuah keuntungan dalam berkarya. <b class="important">Tantangan & Belajar Hal-hal Baru</b> terlebih lagi dalam <b class="important">Perkembangan Teknologi</b> yang begitu <b class="important">Pesat</b>.
					</div>
				</div>
			</div>

		</section>


		<section class="sec3" id="education">
			<div class="content content-float">
				<h1 class="title-content">Education</h1>
				<div class="area-card">
					<div class="card">
						<div class="card-header" style="background:url('<?php echo base_url() ?>assets/images/sd1.jpg') ;background-size : cover;">
						</div>
						<div class="card-body">
							<p style="color:#fff">
								<b>SDN ANGKASA 1 LANUD SURYADHARMA</b>
								<br />
								<i>2005-2011</i>
							</p>
							<a href="#modal-sd" class="tombol tombol-link">Detail</a>
						</div>
					</div>
					<div class="card">
						<div class="card-header" style="background:url('<?php echo base_url() ?>assets/images/smp1.jpg') ;background-size : cover;">
						</div>
						<div class="card-body">
							<p style="color:#fff">
								<b>SMP NEGERI 1 KALIJATI</b>
								<br />
								<i>2011-2013</i>
							</p>
							<a href="#modal-smp" class="tombol tombol-link">Detail</a>
						</div>
					</div>
					<div class="card">
						<div class="card-header" style="background:url('<?php echo base_url() ?>assets/images/sman2.jpg') ;background-size : cover;">
						</div>
						<div class="card-body">
							<p style="color:#fff">
								<b>SMA NEGERI 2 SUBANG </b>
								<br />
								<i>2014-2017</i>
							</p>
							<a href="#modal-sma" class="tombol tombol-link">Detail</a>
						</div>
					</div>
					<div class="card">
						<div class="card-header" style="background:url('<?php echo base_url() ?>assets/images/unjani.jpg') ;background-size : cover;">
						</div>
						<div class="card-body">
							<p style="color:#fff">
								<b>UNIVERSITAS<br />JENDERAL ACHMAD YANI</b>
								<br />
								<i>2017-Now (SMT 7)</i>
							</p>
							<a href="#modal-unsika" class="tombol tombol-link">Detail</a>
						</div>


					</div>
				</div>
			</div>
	</div>

	<svg id="curve2" viewBox="0 0 1400 214.953" xml:space="preserve">
		<path style="opacity:1;fill:;" d="M0,139.29C207.803,40.048,277.683-60.968,472.864,45.364
					c195.181,106.331,346.987,163.042,481.928,77.975c134.939-85.065,337.348-34.515,437.348,41.225c100,75.743,7.861,6.627,7.861,6.627
					v73.387H0V139.29z" />
	</svg>
	</section>



	</div>
	<div class="detail" id="modal-sd">
		<div class="detail-sekolah">
			<div class="header-detail">
				<h3>SDN ANGKASA 1 LANUD SURYADHARMA</h3>
				<a class="tombol tombol-close" href="#close">Close</a>
			</div>
			<div class="body-detail">
				<p>
					Saya bersekolah di SDN 1 LANUD SURYADHARMA dari tahun 2005 hingga tahun 2011.
				</p>
			</div>
		</div>
	</div>

	<div class="detail" id="modal-smp">
		<div class="detail-sekolah">
			<div class="header-detail">
				<h3>SMP Negeri 1 KALIJATI</h3>
				<a class="tombol tombol-close" href="#close">Close</a>
			</div>
			<div class="body-detail">
				<p>
					Saya bersekolah di SMP Negeri 1 KALIJATI dari tahun 2011 hingga tahun 2014.
				</p>
			</div>
		</div>
	</div>

	<div class="detail" id="modal-sma">
		<div class="detail-sekolah">
			<div class="header-detail">
				<h3>SMA NEGERI 2 SUBANG</h3>
				<a class="tombol tombol-close" href="#close">Close</a>
			</div>
			<div class="body-detail">
				<p>
					Saya bersekolah di SMA Negeri 2 SUBANG dari tahun 2014 hingga tahun 2017.
				</p>
			</div>
		</div>
	</div>

	<div class="detail" id="modal-unsika">
		<div class="detail-sekolah">
			<div class="header-detail">
				<h3>UNIVERSITAS JENDERAL ACHMAD YANI</h3>
				<a class="tombol tombol-close" href="#close">Close</a>
			</div>
			<div class="body-detail">
				<p>
					Mahasiswa Aktif Semester 7 Program Studi S1-Informatika pada tahun 2020.
				</p>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function menu_open() {
			let menu_list = document.getElementById('menu-list');
			let tombol_navigasi = document.getElementsByClassName('tombol-navigasi')[0];
			menu_list.className = " tampilkan";
			tombol_navigasi.setAttribute('onclick', 'menu_close()');
		}

		function menu_close() {
			let menu_list = document.getElementById('menu-list');
			let tombol_navigasi = document.getElementsByClassName('tombol-navigasi')[0];
			menu_list.className = " hidden";
			tombol_navigasi.setAttribute('onclick', 'menu_open()');
		}
	</script>
</body>

</html>