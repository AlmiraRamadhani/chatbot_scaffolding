<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Penyewaan Scaffolding</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>

<body style="background: #f0f0f0">
    <br />
    <br />
    <br />
    <br />

    <center>
        <h2>SISTEM INFORMASI PENYEWAAN SCAFFOLDING</h2>
    </center>

    <br />
    <br />
    <br />
    <br />

    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == 'no_username') {
                    echo "<div class='alert alert-dismissible alert-danger'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					Login gagal! Username tidak ditemukan!
					</div>";
                } else if ($_GET['pesan'] == 'wrong_password') {
                    echo "<div class='alert alert-dismissible alert-danger'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					Login gagal! Password salah!
					</div>";
                } else if ($_GET['pesan'] == 'logout') {
                    echo "<div class='alert alert-dismissible alert-info'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					Anda telah logout dari sistem.
					</div>";
                } else if ($_GET['pesan'] == 'not_login') {
                    echo "<div class='alert alert-dismissible alert-danger'>
					<button type='button' class='close' data-dismiss='alert'>&times;</button>
					Anda belum login!
					</div>";
                }
            }
            ?>

            <form action="login_aksi.php" method="post">
                <div class="panel">
                    <br />
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <!-- <div class="form-check">
                            <label for="show" class="form-form-check-label">
                                <input type="checkbox" onclick="showPassword()" class="form-check-input"> Show Password
                            </label>
                        </div> -->
                        <input type="submit" class="btn btn-primary" value="Login">
                        <br><br>
                        <a href="index.php" class="btn btn-info">Back to Home</a>
                    </div>
                    <br />
                </div>
            </form>

        </div>
    </div>
</body>

</html>