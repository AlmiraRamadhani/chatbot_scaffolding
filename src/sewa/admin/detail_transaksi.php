<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Transaksi Penyewaan</h4>
		</div>
		<div class="panel-body">
			<?php
			include '../koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi, "SELECT t.*, c.* FROM tb_transaction AS t LEFT JOIN tb_customer AS c ON t.id_cust = c.customer_id where id='$id'");
			while ($d = mysqli_fetch_array($data)) {
			?>
				<table class="table" id="tb-transaksi">
					<tr>
						<td width="15%">Nama Pelanggan</td>
						<td><?php echo $d['customer_name']; ?></td>
					</tr>
					<tr>
						<td width="10%">Tanggal Pinjam</td>
						<td><?php echo $d['fdate']; ?></td>
					</tr>
					<tr>
						<td width="10%">Tanggal Selesai</td>
						<td><?php echo $d['ldate']; ?></td>
					</tr>
					<tr>
						<td width="10%">Status Pinjam</td>
						<td>
							<?php
							if ($d['loanstatus'] == "0") {
								echo "<div>DIPINJAM</div>";
							} else if ($d['loanstatus'] == "1") {
								echo "<div>SELESAI</div>";
							} ?>
							</>
					</tr>
					<tr>
						<td width="10%">Status Bayar</td>
						<td>
							<?php
							if ($d['paidstatus'] == "0") {
								echo "<div>BELUM DIBAYAR</div>";
							} else if ($d['paidstatus'] == "1") {
								echo "<div>LUNAS</div>";
							} ?>
						</td>
					</tr>
				</table>
			<?php
			}
			?>
			<table class="table">
				<tr>
					<th width="1%">No</th>
					<th width="15%">Nama Produk</th>
					<th width="10%">Jumlah</th>
					<th width="10%">Harga</th>
				</tr>
				<?php
				include '../koneksi.php';
				// $query = mysqli_query($koneksi, "SELECT d.*, p.*, t.* FROM tb_detail AS d 	JOIN tb_product AS p ON d.product_id = p.product_id, JOIN tb_transaction AS t ON d.transaction_id = t.id WHERE transaction_id = '$id'");
				$query = mysqli_query($koneksi, "SELECT * FROM tb_detail as d JOIN tb_product as p ON d.product_id=p.product_id JOIN tb_transaction as t ON t.id=d.transaction_id WHERE transaction_id = '$id'");
				$no = 1;
				$total = 0;
				while ($p = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?= $p['product_name']; ?></td>
						<td><?php echo $p['quantity']; ?></td>
						<td>
							<?php
							$awal = strtotime($p['fdate']);
							$akhir = strtotime($p['ldate']);
							$diff = $akhir - $awal;
							$juml_hari = ceil($diff / 86400);
							if ($juml_hari <= 7) {
								$harga = $p['product_owp'] * $p['quantity'];
								//$harga = $p['product_owp'];
							} elseif ($juml_hari > 7 && $juml_hari <= 14) {
								$harga = $p['product_twp'] * $p['quantity'];
							} elseif ($juml_hari > 14 && $juml_hari <= 30) {
								$harga = $p['product_omp'] * $p['quantity'];
							}

							echo 'Rp. ' . number_format($harga, 0, ',', '.');
							?>
						</td>
					</tr>
				<?php
					$total += $harga;
				}
				?>
				<tr>
					<td colspan="3"><b>Total Harga</b></td>
					<td><b>Rp. <?= number_format($total, 0, ',', '.'); ?></b></td>
				</tr>
			</table>
			<a href="transaksi.php">Kembali</a>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>