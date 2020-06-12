<?php include 'header.php'; ?>

<?php
include '../koneksi.php';
if (isset($_POST['editButton'])) {
    $id = $_POST['id'];
    $dokumen = $_POST['dokumen'];

    mysqli_query($koneksi, "UPDATE tb_dokumen SET dokumen = '$dokumen' WHERE id = '$id'");
    header('location: master.php?pesan=edit');
}
?>

<div class="col-md-9">
    <h3>Edit Data</h3>

    <div class="card mt-3">
        <div class="card-body">
            <?php
            $id = $_GET['id'];

            $data = mysqli_query($koneksi, "SELECT * FROM tb_dokumen WHERE id = '$id'");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id"><b>ID</b></label>
                        <input type="text" name="id" id="id" class="form-control" value="<?= $d['id']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="data"><b>Data</b></label>
                        <input type="text" name="dokumen" id="dokumen" class="form-control" value="<?= $d['dokumen']; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="editButton">
                            <i class="fas fa-fw fa-edit"></i> Edit Data
                        </button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>