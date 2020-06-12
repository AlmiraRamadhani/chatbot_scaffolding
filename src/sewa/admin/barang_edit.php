<?php include 'header.php'; ?>

<div class="container">
	<br />
	<br />
	<br />
	<div class="col-md-5 col-md-offset-3">

		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Barang</h4>
			</div>
			<div class="panel-body">

				<?php
				include '../koneksi.php';

				$product_id = $_GET['product_id'];

				$data = mysqli_query($koneksi, "SELECT*FROM tb_product where product_id='$product_id'");
				while ($d = mysqli_fetch_array($data)) {
				?>

					<form method="post" action="barang_update.php">
						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" class="form-control" name="product_name" placeholder="Masukkan nama .." value="<?php echo $d['product_name']; ?>">
						</div>
						<div class="form-group">
							<label>Harga 1 Minggu</label>
							<!-- form id barang yang di edit, untuk di kirim ke file aksi -->
							<input type="hidden" name="product_id" value="<?php echo $d['product_id']; ?>">
							<input type="number" class="form-control" name="product_owp" placeholder="Masukkan harga .." value="<?php echo $d['product_owp']; ?>">
						</div>

						<div class="form-group">
							<label>Harga 2 Minggu</label>
							<input type="number" class="form-control" name="product_twp" placeholder="Masukkan harga .." value="<?php echo $d['product_twp']; ?>">
						</div>

						<div class="form-group">
							<label>Harga 1 Bulan</label>
							<input type="number" class="form-control" name="product_omp" placeholder="Masukkan harga .." value="<?php echo $d['product_omp']; ?>">
						</div>

						<div class="form-group">
							<label>Harga Perpanjangan</label>
							<input type="number" class="form-control" name="product_ep" placeholder="Masukkan harga .." value="<?php echo $d['product_ep']; ?>">
						</div>

						<div class="form-group">
							<label>Stok Barang</label>
							<input type="number" class="form-control" name="product_stock" placeholder="Masukkan stok .." value="<?php echo $d['product_stock']; ?>">
						</div>

						<div class="form-group">
							<label>Berat Barang</label>
							<input type="number" class="form-control" name="product_weight" placeholder="Masukkan berat .." value="<?php echo $d['product_stock']; ?>">
						</div>

						<br />

						<input type="submit" class="btn btn-primary" value="Simpan">
					</form>

				<?php
				}
				?>
			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>