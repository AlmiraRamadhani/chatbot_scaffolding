<?php include "header.php"; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Isi Keranjang</h4>
        </div>
        <div class="panel-body">

            <a href="keranjang2.php" class="btn btn-sm btn-info pull-right">Tambah Barang</a>

            <br />
            <br />

            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</>
                    <th>SubHarga</th>
                    <th width="15%">OPSI</th>
                </tr>

                <?php
                include '../koneksi.php';

                $no = 1;

                foreach ($_SESSION['keranjang'] as $product_id => $jumlah) :
                    $data = mysqli_query($koneksi, "SELECT * FROM tb_product WHERE product_id=$product_id");
                    $d = $data->fetch_assoc();
                    $subharga = $d['product_owp'] * $jumlah;
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['product_name']; ?></td>
                        <td>Rp.<?php echo number_format($d['product_twp']); ?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td>Rp. <?php echo number_format($subharga); ?></td>
                        <td>
                            <a href="barang_hapus.php?product_id=<?php echo $d['product_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>

            </table>
            <a href="checkout2.php" class="btn btn-sm btn-info pull-right">Checkout</a>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>s