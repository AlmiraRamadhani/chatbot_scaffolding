<?php
include '../koneksi.php';

$id = $_GET['id'];
$loanstatus = 1;

// update data transaksi
mysqli_query($koneksi, "UPDATE tb_transaction set loanstatus='$loanstatus' where id='$id'");


header("location:transaksi.php");
