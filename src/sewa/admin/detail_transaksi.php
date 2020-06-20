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
			$no = 1;
			while ($d = mysqli_fetch_array($data)) {
			?>

				<table class="table">
					<tr>
						<td width="10%">Nama Pelanggan</td>
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
								echo "<div>DIPINJAM</div>";
							} else if ($d['paidstatus'] == "1") {
								echo "<div>SELESAI</div>";
							} ?>
						</td>
					</tr>
					<!-- <tr>
						<td width="10%">Total Bayar</td>
						<td>
							<?php
							if ($d['paidstatus']  == "0") {
								echo "<div>DIPINJAM</div>";
							} else if ($d['paidstatus'] == "1") {
								echo "<div>SELESAI</div>";
							} ?>
						</td>
					</tr> -->
					<tr>
						<td><a href="transaksi.php">Kembali</a></td>
					</tr>


				<?php
			}
				?>
				</table>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>