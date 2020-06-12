<?php include 'header.php'; ?>

<?php

// koneksi database
include '../koneksi.php';
?>
<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Edit Transaksi Penyewaan</h4>
		</div>
		<div class="panel-body">



			<div class="col-md-8 col-md-offset-2">
				<a href="transaksi.php" class="btn btn-sm btn-info pull-right">Kembali</a>
				<br />
				<br />
				<?php
				// menangkap id yang dikirim melalui url
				$id = $_GET['id'];

				// megambil data pelanggan yang ber id di atas dari tabel pelanggan
				$transaksi = mysqli_query($koneksi, "select * from tb_transaction where id='$id'");
				while ($t = mysqli_fetch_array($transaksi)) {
				?>
					<form method="post" action="transaksi_update.php">
						<!-- menyimpan id transaksi yang di edit dalam form hidden berikut -->
						<input type="hidden" name="id" value="<?php echo $t['id']; ?>">

						<div class="form-group">
							<label>Pelanggan</label>
							<select class="form-control" name="id_cust" required="required">
								<option value="">- Pilih Pelanggan</option>
								<?php
								$data = mysqli_query($koneksi, "select * from tb_customer");
								while ($d = mysqli_fetch_array($data)) {
								?>
									<option <?php if ($d['customer_id'] == $t['id_cust']) {
												echo "selected='selected'";
											} ?> value="<?php echo $d['customer_id']; ?>"><?php echo $d['customer_name']; ?></option>
								<?php
								}
								?>
							</select>
						</div>

						<div class="form-group">
							<label>Tanggal Pinjam</label>
							<input type="date" class="form-control" name="fdate" required="required" value="<?php echo $t['fdate']; ?>">
						</div>

						<div class="form-group">
							<label>Tgl. Selesai</label>
							<input type="date" class="form-control" name="ldate" required="required" value="<?php echo $t['ldate']; ?>">
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