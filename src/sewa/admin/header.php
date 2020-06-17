<!DOCTYPE html>
<html>

<head>
	<title>Sistem Informasi Penyewaan Scaffolding Samarinda</title>

	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/select2.min.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>

</head>

<body style="background: #f0f0f0">
	<!-- cek apakah sudah login -->
	<?php
	session_start();
	if ($_SESSION['status'] != 'logged_in') {
		header('location: ../index.php?pesan=not_login');
	}
	?>

	<!-- menu navigasi -->
	<nav class="navbar navbar-inverse" style="border-radius: 0px">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">PENYEWAAN SCAFFOLDING</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-file"></i> Master Transaksi <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="barang.php"><i class="glyphicon glyphicon-file"></i> Barang</a></li>
							<li><a href="pelanggan.php"><i class="glyphicon glyphicon-user"></i> Pelanggan</a></li>
							<li><a href="komentar.php"><i class="glyphicon glyphicon-user"></i> Komentar Customer</a></li>
							<li><a href="transaksi.php"><i class="glyphicon glyphicon-user"></i> Transaksi</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-file"></i> Master Chatbot <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="master.php"><i class="glyphicon glyphicon-user"></i>Jawaban</a></li>
							<li><a href="master_hitung.php"><i class="glyphicon glyphicon-user"></i>Hitung TF-IDF</a></li>
							<li><a href="master_chat.php"><i class="glyphicon glyphicon-user"></i>Chatbot</a></li>
							<li><a href="master_pertanyaan.php"><i class="glyphicon glyphicon-user"></i>History Pertanyaan</a></li>
						</ul>
					</li>
					<!-- <li><a href="laporan.php"><i class="glyphicon glyphicon-list-alt"></i> Laporan</a></li> -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-wrench"></i> Pengaturan <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="ganti_password.php"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a></li>
							<li><a href="../logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
						</ul>
					</li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<p class="navbar-text">Halo, <b><?php echo $_SESSION['nama']; ?></b> !</p>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- akhir menu navigasi -->