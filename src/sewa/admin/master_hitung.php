<?php include 'header.php'; ?>
<?php include 'fungsi.php'; ?>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <h4>Penghitungan TF-IDF</h4>

            <br>
            <br>
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h6 align="center">
                            <span class="pull-right">
                                <?php buatIndex(); ?>
                            </span>
                        </h6><br><br>
                        <h4 align="center">Jumlah Dokumen</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h6 align="center">
                            <span class="pull-right">
                                <?php hitungBobot(); ?>
                            </span>
                        </h6><br><br>
                        <h4 align="center">Bobot Dokumen</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h6 align="center">
                            <span class="pull-right">
                                <?php panjangVektor(); ?>
                            </span>
                        </h6><br><br>
                        <h4 align="center">Jumlah Vektor</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <button type="button" class="btn btn-info mb-3 mx-2" data-toggle="modal" data-target="#modalVektor">
                    Hasil Count Vektor
                </button>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Term</th>
                            <th>Doc-id</th>
                            <th>Count</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $i = 1;
                        $result = mysqli_query($koneksi, "SELECT * FROM tb_index ORDER BY id");
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row['term']; ?></td>
                                <td><?= $row['id_doc']; ?></td>
                                <td><?= $row['jumlah']; ?></td>
                                <td><?= $row['bobot']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalVektor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Panjang Vektor TF-IDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID Dokumen</th>
                            <th>Panjang Vektor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $result = mysqli_query($koneksi, "SELECT * FROM tb_vektor as v, tb_dokumen as d on v.doc_id=d.id");
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?= $row['dokumen']; ?></td>
                                <td><?= $row['panjang']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>