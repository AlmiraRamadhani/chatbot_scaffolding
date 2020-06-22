<?php
include '../koneksi.php';

$id = $_POST['id'];
$id_cust = $_POST['id_cust'];
$fdate = $_POST['fdate'];
$ldate = $_POST['ldate'];
$loanstatus = 0;
$paidstatus = 1;
$total = $_POST['totalharga'];
mysqli_query($koneksi, "UPDATE tb_transaction set id_cust='$id_cust', fdate='$fdate', ldate='$ldate', totalharga='$total'  where id='$id'");

header("location:transaksi.php");
