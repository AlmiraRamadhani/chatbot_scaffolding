<?php include 'header.php'; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Data Komentar Customer</h4>
        </div>
        <div class="panel-body">

            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subyek</th>
                    <th>Komentar</th>
                    <th width="15%">OPSI</th>
                </tr>

                <?php
                include '../koneksi.php';

                $data = mysqli_query($koneksi, "select * from tb_comment");
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['comment_name']; ?></td>
                        <td><?php echo $d['comment_email']; ?></td>
                        <td><?php echo $d['comment_subject']; ?></td>
                        <td><?php echo $d['comment']; ?></td>
                        <td>
                            <a href="komentar_hapus.php?product_id=<?php echo $d['product_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
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