<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Transaksi Penyewaan</h4>
		</div>
		<div class="panel-body">

			<br />
			<br />

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
			<table>
				<tr>
					<th width="1%">No</th>
					<th width="15%">Nama Produk</th>
					<th width="10%">Jumlah</th>
				</tr>
				<?php
				include '../koneksi.php';
				$product_id = $_GET['product_id'];
				$query = mysqli_query($koneksi, "SELECT d.*, p.* FROM tb_detail AS d LEFT JOIN tb_product AS p ON d.product_id = p.product_id where product_id='$product_id'");
				$no = 1;
				while ($d = mysqli_fetch_array($query)) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['product_name']; ?></td>
						<td><?php echo $d['quantity']; ?></td>
					</tr>
					<tr>
						<td>
							Total Bayar
						</td>
						<td>

						</td>
					</tr>
				<?php
				}
				?>
			</table>
			<a href="transaksi.php">Kembali</a>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>