<?php include "header.php"; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Produk 2</h4>
        </div>
        <div class="panel-body">

            <a href="keranjang1.php" class="btn btn-sm btn-info">Produk 1</a><br>
            <a href="keranjang3.php" class="btn btn-sm btn-info">Produk 3</a>

            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
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
                        <td>Rp. <?php echo $d['product_twp']; ?></td>
                        <td><?php echo $d['product_stock']; ?></td>
                        <td>
                            <a href="cart1.php?product_id=<?php echo $d['product_id']; ?>" class="btn btn-sm btn-info">Masukkan Keranjang</a>
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