<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Pelanggan</h4>
		</div>
		<div class="panel-body">

			<a href="pelanggan_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>

			<br />
			<br />

			<table class="table table-bordered table-striped">
				<tr>
					<th width="1%">No</th>
					<th>NIK</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Perusahaan</th>
					<th>Proyek</th>
					<th width="15%">OPSI</th>
				</tr>

				<?php
				// koneksi database
				include '../koneksi.php';

				// mengambil data pelanggan dari database
				$data = mysqli_query($koneksi, "select * from tb_customer");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while ($d = mysqli_fetch_array($data)) {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['customer_nik']; ?></td>
						<td><?php echo $d['customer_name']; ?></td>
						<td><?php echo $d['customer_address']; ?></td>
						<td><?php echo $d['customer_phone']; ?></td>
						<td><?php echo $d['customer_company']; ?></td>
						<td><?php echo $d['customer_project']; ?></td>
						<td>
							<a href="pelanggan_edit.php?customer_id=<?php echo $d['customer_id']; ?>" class="btn btn-sm btn-info">Edit</a>
							<a href="pelanggan_hapus.php?customer_id=<?php echo $d['customer_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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