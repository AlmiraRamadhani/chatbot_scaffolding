<!DOCTYPE html>
<html>
<title>Penyewaan Scaffolding</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/chat.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script src="assets/js/chat.js"></script>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-wide w3-padding w3-card">
            <a href="index.php/#home" class="w3-bar-item w3-button">Penyewaan Scaffolding Samarinda</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="index.php/#home" class="w3-bar-item w3-button">Home</a>
                <a href="index.php/#about" class="w3-bar-item w3-button">About</a>
                <a href="index.php/#contact" class="w3-bar-item w3-button">Contact</a>
                <a href="chat.php" class="w3-bar-item w3-button">Chatbot</a>
                <a href="login.php" class="w3-bar-item w3-button">Login</a>
            </div>
        </div>
    </div>
    <?php include 'fungsi.php'; ?>

    <div class="col-md-9">
        <h3>Percobaan Chatbot</h3>

        <div class="container mt-3">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" class="form-inline">
                        <input type="text" name="keyword" id="keyword" class="form-control mr-2" placeholder="Silahkan bertanya" required>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <input type="button" value="Reset" onclick="javascript:eraseText();">
                    </form>

                    <textarea name="respon" id="respon" cols="30" rows="10" class="form-control mt-3" readonly>
                    <?php
                    if (isset($_POST['submit'])) {
                        $keyword = $_POST['keyword'];
                        ambilCache($keyword);
                    }
                    ?>
                </textarea>
                </div>
            </div>
        </div>
    </div>
    <script>
        function eraseText() {
            document.getElementById("respon").value = "";
        }
    </script>

</body>

</html>