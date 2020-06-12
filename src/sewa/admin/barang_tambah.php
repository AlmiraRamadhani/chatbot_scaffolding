<?php include 'header.php'; ?>

<div class="container">
	<br />
	<br />
	<br />
	<div class="col-md-5 col-md-offset-3">

		<div class="panel">
			<div class="panel-heading">
				<h4>Tambah Barang Baru</h4>
			</div>
			<div class="panel-body">


				<form method="post" action="barang_aksi.php">

					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" id="product_name" class="form-control" name="product_name" placeholder="Masukkan nama ..">
					</div>

					<div class="form-group">
						<label>Harga 1 Minggu</label>
						<input type="number" id="product_owp" class="form-control" name="product_owp" placeholder="Masukkan harga ..">
					</div>

					<div class="form-group">
						<label>Harga 2 Minggu</label>
						<input type="number" id="product_twp" class="form-control" name="product_twp" placeholder="Masukkan harga ..">
					</div>

					<div class="form-group">
						<label>Harga 1 Bulan</label>
						<input type="number" id="product_omp" class="form-control" name="product_omp" placeholder="Masukkan harga ..">
					</div>

					<div class="form-group">
						<label>Harga Perpanjangan</label>
						<input type="number" id="product_ep" class="form-control" name="product_ep" placeholder="Masukkan harga ..">
					</div>

					<div class="form-group">
						<label>Stok Barang</label>
						<input type="number" id="product_stock" class="form-control" name="product_stock" placeholder="Masukkan stok ..">
					</div>

					<div class="form-group">
						<label>Berat Barang</label>
						<input type="number" id="product_weight" class="form-control" name="product_weight" placeholder="Masukkan berat ..">
					</div>

					<br />

					<input type="submit" class="btn btn-primary" value="Simpan">
				</form>


			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>