<?php
include '../koneksi.php';

$customer_nik = $_POST['customer_nik'];
$customer_name = $_POST['customer_name'];
$customer_address = $_POST['customer_address'];
$customer_phone = $_POST['customer_phone'];
$customer_company = $_POST['customer_company'];
$customer_project = $_POST['customer_project'];

mysqli_query($koneksi, "INSERT INTO tb_customer values('', '$customer_nik','$customer_name','$customer_address','$customer_phone','$customer_company','$customer_project')");

header("location:pelanggan.php?pesan=tambah");
