<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Transaksi Penyewaan</h4>
		</div>
		<div class="panel-body">

			<a href="transaksi_tambah.php" class="btn btn-sm btn-info pull-right">Transaksi Baru</a>

			<br />
			<br />

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Pelanggan</th>
					<th>Tanggal Pinjam</th>
					<th>Tgl. Selesai</th>
					<th>Status Pinjam</th>
					<th>Status Bayar</th>
					<th>Waktu</th>
					<th width="30%">OPSI</th>
				</tr>

				<?php
				include '../koneksi.php';
				$data = mysqli_query($koneksi, "SELECT t.*, c.* FROM tb_transaction AS t LEFT JOIN tb_customer AS c ON t.id_cust = c.customer_id order by id desc");
				$no = 1;
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['customer_name']; ?></td>
						<td><?php echo $d['fdate']; ?></td>
						<td><?php echo $d['ldate']; ?></td>
						<td>
							<?php
							if ($d['loanstatus'] == "0") { ?>
								<a href="editls.php?id=<?php echo $d['id']; ?>">DIPINJAM</a>
							<?php } else if ($d['loanstatus'] == "1") { ?>
								<a href="editls.php?id=<?php echo $d['id']; ?>">SELESAI</a>
							<?php } ?>
						</td>
						<td>
							<?php
							if ($d['paidstatus'] == "0") { ?>
								<a href="editps.php?id=<?php echo $d['id']; ?>">BELUM DIBAYAR</a>
							<?php } else if ($d['paidstatus'] == "1") { ?>
								<a href="editps.php?id=<?php echo $d['id']; ?>">LUNAS</a>
							<?php } ?>
						</td>
						<td>
							<?php

							$tanggal1 = $fdate;
							$tanggal2 = $ldate;

							$perbedaan = $tanggal2->diff($tanggal1)->format("%a");

							?>
						</td>
						<td>
							<a href="detail_transaksi.php?id=<?php echo $d['id']; ?>" class="btn btn-sm">Detail</a>
							<a href="transaksi_edit.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-info">Edit</a>
							<a href="transaksi_hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger">Batalkan</a>
						</td>
					</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>