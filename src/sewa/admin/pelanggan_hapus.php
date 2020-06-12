<?php
include '../koneksi.php';
$customer_id = $_GET['customer_id'];

mysqli_query($koneksi, "DELETE FROM tb_customer where customer_id='$customer_id'");

header("location:pelanggan.php");
