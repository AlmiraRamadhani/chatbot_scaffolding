<?php
// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$id_cust = $_POST['id_cust'];
$fdate = $_POST['fdate'];
$ldate = $_POST['ldate'];

// update data transaksi
mysqli_query($koneksi, "UPDATE tb_transaction set id_cust='$id_cust', fdate='$fdate', ldate='$ldate' where id='$id'");

header("location:transaksi.php");
