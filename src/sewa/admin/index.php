<?php include 'header.php'; ?>

<?php
include '../koneksi.php';
?>

<div class="container">
	<div class="alert alert-info text-center">
		<h4 style="margin-bottom: 0px"><b>Selamat Datang di Sistem Informasi Penyewaan Scaffolding!</h4>
	</div>

	<div class="panel">
		<div class="panel-heading">
			<h4>Dashboard</h4>
		</div>
		<div class="panel-body">
			<div class="row">
				<!-- customer -->
				<div class="col-md-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-user"></i>
								<span class="pull-right">

									<?php
									$pelanggan = mysqli_query($koneksi, "select * from tb_customer");
									echo mysqli_num_rows($pelanggan);
									?>
								</span>
							</h1>
							Jumlah Pelanggan
						</div>
					</div>
				</div>

				<!-- product -->
				<div class="col-md-3">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-heart"></i>
								<span class="pull-right">

									<?php
									$barang = mysqli_query($koneksi, "select * from tb_product");
									echo mysqli_num_rows($barang);
									?>
								</span>
							</h1>
							Jumlah Barang
						</div>
					</div>
				</div>

				<!-- transaksi dipinjam -->
				<div class="col-md-3">
					<div class="panel panel-warning">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-retweet"></i>
								<span class="pull-right">

									<?php
									$proses = mysqli_query($koneksi, "select * from tb_transaction where loanstatus='0'");
									echo mysqli_num_rows($proses);
									?>
								</span>
							</h1>
							Transaksi dalam Peminjaman
						</div>
					</div>
				</div>

				<!-- transaksi selesai -->
				<div class="col-md-3">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-ok-circle"></i>
								<span class="pull-right">

									<?php
									$proses = mysqli_query($koneksi, "select * from tb_transaction where loanstatus='1'");
									echo mysqli_num_rows($proses);
									?>
								</span>
							</h1>
							Transaksi Selesai
						</div>
					</div>
				</div>

				<!-- pertanyaan -->
				<div class="col-md-3">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-info-sign"></i>
								<span class="pull-right">

									<?php
									$pertanyaan = mysqli_query($koneksi, "select * from tb_cache");
									echo mysqli_num_rows($pertanyaan);
									?>
								</span>
							</h1>
							Daftar Pertanyaan
						</div>
					</div>
				</div>

				<!-- jawaban -->
				<div class="col-md-3">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h1>
								<i class="glyphicon glyphicon-info-sign"></i>
								<span class="pull-right">

									<?php
									$jawaban = mysqli_query($koneksi, "select * from tb_dokumen");
									echo mysqli_num_rows($jawaban);
									?>
								</span>
							</h1>
							Daftar Jawaban
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 
	<div class="col-md-9">
		<div class="jumbotron">
			<h1 class="display-3">Welcome back!</h1>
			<p class="lead">Selamat datang di sistem informasi Penyewaan Scaffolding</p>
			<hr class="my-4">
			<p>Anda sekarang login sebagai : <?= $_SESSION['nama']; ?>.</p>
		</div>
	</div> -->


</div>

<?php include 'footer.php'; ?>