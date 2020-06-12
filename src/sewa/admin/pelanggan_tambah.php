<?php include 'header.php'; ?>

<div class="container">
	<br />
	<br />
	<br />
	<div class="col-md-5 col-md-offset-3">

		<div class="panel">
			<div class="panel-heading">
				<h4>Tambah Pelanggan Baru</h4>
			</div>
			<div class="panel-body">


				<form method="post" action="pelanggan_aksi.php">

					<div class="form-group">
						<label>NIK</label>
						<input type="number" id="nik" class="form-control" name="nik" placeholder="Masukkan nik ..">
					</div>

					<div class="form-group">
						<label>Nama</label>
						<input type="text" id="name" class="form-control" name="name" placeholder="Masukkan nama ..">
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<input type="text" id="address" class="form-control" name="address" placeholder="Masukkan alamat ..">
					</div>

					<div class="form-group">
						<label>Telepon</label>
						<input type="number" id="phone" class="form-control" name="phone" placeholder="Masukkan telepon ..">
					</div>

					<div class="form-group">
						<label>Perusahaan</label>
						<input type="text" id="company" class="form-control" name="company" placeholder="Masukkan perusahaan ..">
					</div>

					<div class="form-group">
						<label>Proyek</label>
						<input type="text" id="project" class="form-control" name="project" placeholder="Masukkan proyek ..">
					</div>

					<br />

					<input type="submit" class="btn btn-primary" value="Simpan">
				</form>


			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>