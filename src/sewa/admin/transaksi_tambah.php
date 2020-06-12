<?php include 'header.php'; ?>

<?php

// koneksi database
include '../koneksi.php';
?>
<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Transaksi Baru</h4>
		</div>
		<div class="panel-body">



			<div class="col-md-8 col-md-offset-2">
				<a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
				<br />
				<br />
				<form method="post" action="transaksi_aksi.php">
					<div class="form-group">
						<label>Pelanggan</label>
						<select class="form-control" name="id_cust" required="required">
							<option value="">- Pilih Pelanggan</option>
							<?php
							// mengambil data pelanggan dari database
							$data = mysqli_query($koneksi, "select * from tb_customer");
							// mengubah data ke array dan menampilkannya dengan perulangan while
							while ($d = mysqli_fetch_array($data)) {
							?>
								<option value="<?php echo $d['customer_id']; ?>"><?php echo $d['customer_name']; ?></option>
							<?php
							}
							?>
						</select>
					</div>

					<div class="form-group">
						<label>Tanggal Pinjam</label>
						<input type="date" class="form-control" name="fdate" required="required">
					</div>

					<div class="form-group">
						<label>Tgl. Selesai</label>
						<input type="date" class="form-control" name="ldate" required="required">
					</div>

					<br>



					<br />

					<input type="submit" class="btn btn-primary" value="Simpan">
				</form>

			</div>

		</div>
	</div>
</div>

<?php include 'footer.php'; ?>

<!-- <script>
	function tampilkan() {

		var kategori = document.getElementById("tbl_barang").select1.value;
		var p_kontainer = document.getElementById("container");

		if (kategori == "owp") {
			p_kontainer.innerHTML = <?php $dataBarang = mysqli_query($koneksi, "SELECT product_owp FROM tb_product where product_id=product_owp"); ?>;
		} else if (kategori == "twp") {
			p_kontainer.innerHTML = "Bandung kota kembang";
		} else if (kategori == "omp") {
			p_kontainer.innerHTML = "Bogor kota hujan";
		}
	}
</script> -->