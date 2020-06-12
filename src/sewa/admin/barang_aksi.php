<?php
include '../koneksi.php';

$product_name = $_POST['product_name'];
$product_owp = $_POST['product_owp'];
$product_twp = $_POST['product_twp'];
$product_omp = $_POST['product_omp'];
$product_ep = $_POST['product_ep'];
$product_stock = $_POST['product_stock'];
$product_weight = $_POST['product_weight'];

mysqli_query($koneksi, "INSERT INTO tb_product values('', '$product_name','$product_owp','$product_twp','$product_omp','$product_ep','$product_stock','$product_weight')");

header("location:barang.php?pesan=tambah");
