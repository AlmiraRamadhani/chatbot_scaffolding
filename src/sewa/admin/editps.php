<?php
include '../koneksi.php';

$id = $_GET['id'];
$paidstatus = 1;

// update data transaksi
mysqli_query($koneksi, "UPDATE tb_transaction set paidstatus='$paidstatus' where id='$id'");

header("location:transaksi.php");
