<?php
include '../koneksi.php';

$product_id = $_GET['product_id'];

mysqli_query($koneksi, "DELETE FROM tb_product where product_id='$product_id'");

header("location:barang.php");
