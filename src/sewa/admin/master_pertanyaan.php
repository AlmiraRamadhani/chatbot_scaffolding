<?php include 'header.php'; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Pertanyaan Customer</h4>
        </div>
        <div class="panel-body">

            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Pertanyaan</th>
                    <th>Hitungan</th>
                    <th width="15%">OPSI</th>
                </tr>

                <?php
                include '../koneksi.php';

                $data = mysqli_query($koneksi, "select * from tb_cache");
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['query']; ?></td>
                        <td><?php echo $d['nilai']; ?></td>
                        <td>
                            <a href="pertanyaan_hapus.php?product_id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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