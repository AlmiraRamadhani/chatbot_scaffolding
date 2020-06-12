<?php include 'header.php'; ?>

<div class="container">
    <br />
    <br />
    <br />
    <div class="col-md-5 col-md-offset-3">

        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Pelanggan</h4>
            </div>
            <div class="panel-body">

                <?php
                include '../koneksi.php';

                $customer_id = $_GET['customer_id'];

                $data = mysqli_query($koneksi, "SELECT * FROM tb_customer where customer_id='$customer_id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>

                    <form method="post" action="pelanggan_update.php">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="hidden" name="customer_id" value="<?php echo $d['customer_id']; ?>">
                            <input type="text" class="form-control" name="customer_nik" placeholder="Masukkan NIK .." value="<?php echo $d['customer_nik']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="customer_name" placeholder="Masukkan nama .." value="<?php echo $d['customer_name']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="customer_address" placeholder="Masukkan alamat .." value="<?php echo $d['customer_address']; ?>">
                        </div>
                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" class="form-control" name="customer_phone" placeholder="Masukkan No. Telepon .." value="<?php echo $d['customer_phone']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Perusahaan</label>
                            <input type="text" class="form-control" name="customer_company" placeholder="Masukkan Nama Perusahaan .." value="<?php echo $d['customer_company']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Proyek</label>
                            <input type="text" class="form-control" name="customer_project" placeholder="Masukkan nama Proyek .." value="<?php echo $d['customer_project']; ?>">
                        </div>

                        <br />

                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    </form>

                <?php
                }
                ?>
            </div>
        </div>
    </div>

</div>

<?php include 'footer.php'; ?>