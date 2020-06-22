<?php
include '../koneksi.php';
$id_cust = $_POST['id_cust'];
$fdate = $_POST['fdate'];
$ldate = $_POST['ldate'];
$loanstatus = 0;
$paidstatus = 0;
mysqli_query($koneksi, "INSERT INTO tb_transaction values ('','$id_cust','$fdate','$ldate','$loanstatus','$paidstatus','')");

$last_id = mysqli_insert_id($koneksi);
$barang = $_POST['barang'];
$qty = $_POST['qty'];

for ($i = 0; $i < count($barang); $i++) {
    if ($barang[$i] != "") {
        mysqli_query($koneksi, "INSERT INTO tb_detail VALUES ('', '$last_id', '$barang[$i]', '$qty[$i]')");
    }
}
header("location:transaksi.php?pesan=tambah");
