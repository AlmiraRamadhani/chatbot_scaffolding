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

					<table class="table table-bordered table-striped" id="tbl_barang">
						<thead>
							<tr>
								<th width="70%">Nama Barang</th>
								<th width="10%">Quantity</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<select name="barang[]" class="form-control select-barang" required>
										<?php
										$dataBarang = mysqli_query($koneksi, "SELECT * FROM tb_product");
										while ($db = mysqli_fetch_array($dataBarang)) {
										?>
											<option value="<?= $db['product_id']; ?>"><?= $db['product_name']; ?></option>
										<?php } ?>
									</select>
								</td>
								<td><input type="number" name="qty" id="qty[]" class="form-control"></td>
							</tr>
						</tbody>
					</table>
					<button type="button" name="add" id="add" class="btn btn-sm btn-success float-right">
						<i class="fas fa-fw fa-plus"></i> Tambah Barang
					</button>

					<br><br>

					<input type="submit" class="btn btn-primary" value="Simpan">
				</form>

			</div>

		</div>
	</div>
</div>

<?php include 'footer.php'; ?>