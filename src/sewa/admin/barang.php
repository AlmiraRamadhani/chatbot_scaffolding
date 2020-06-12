<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Barang</h4>
		</div>
		<div class="panel-body">

			<a href="barang_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>

			<br />
			<br />

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>Nama</th>
					<th>Harga 1 Minggu</th>
					<th>Harga 2 Minggu</th>
					<th>Harga 1 Bulan</th>
					<th>Harga Perpanjangan</th>
					<th>Stok Barang</th>
					<th>Berat Barang</th>
					<th width="15%">OPSI</th>
				</tr>

				<?php
				include '../koneksi.php';

				$data = mysqli_query($koneksi, "select * from tb_product");
				$no = 1;
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['product_name']; ?></td>
						<td><?php echo $d['product_owp']; ?></td>
						<td><?php echo $d['product_twp']; ?></td>
						<td><?php echo $d['product_omp']; ?></td>
						<td><?php echo $d['product_ep']; ?></td>
						<td><?php echo $d['product_stock']; ?></td>
						<td><?php echo $d['product_weight']; ?></td>
						<td>
							<a href="barang_edit.php?product_id=<?php echo $d['product_id']; ?>" class="btn btn-sm btn-info">Edit</a>
							<a href="barang_hapus.php?product_id=<?php echo $d['product_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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