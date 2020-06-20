<?php
include '../koneksi.php';
$id_cust = $_POST['id_cust'];
$fdate = $_POST['fdate'];
$ldate = $_POST['ldate'];
$loanstatus = 0;
$paidstatus = 0;
mysqli_query($koneksi, "INSERT INTO tb_transaction values ('','$id_cust','$fdate','$ldate','$loanstatus','$paidstatus')");

//tanggal
// $awal = strtotime($fdate);
// $akhir = strtotime($ldate);

// $diff = $akhir - $awal;
// $hari = round($diff / 86400);

//$datetime1 = date_create('2017-06-28');
// $datetime2 = date_create('2018-06-28');
// calculates the difference between DateTime objects 
// $interval = date_diff($datetime1, $datetime2);
// printing result in days format 
// echo $interval->format('%R%a days');
// echo $hari->format('%R%a days');
//echo  var_dump($hari);
//die();

$last_id = mysqli_insert_id($koneksi);
$barang = $_POST['barang'];
// $price = $hrg['harga'];
$qty = $_POST['qty'];

// if ($hari <= 7) {
//     $query = mysqli_query($koneksi, "SELECT product_owp AS harga FROM tb_product where product_id = product_id");
// } elseif ($hari >= 8 && $hari <= 14) {
//     $query = mysqli_query($koneksi, "SELECT product_twp AS harga FROM tb_product where product_id = product_id");
// } elseif ($hari >= 15 && $hari <= 30) {
//     $query = mysqli_query($koneksi, "SELECT product_omp AS harga FROM tb_product where product_id = product_id");
// }

//Convert hasil query ke array
// $hrg = mysqli_fetch_array($query);

//masuk db


for ($i = 0; $i < count($barang); $i++) {
    if ($barang[$i] != "") {
        mysqli_query($koneksi, "INSERT INTO tb_detail VALUES ('', '$last_id', '$barang[$i]', '$qty[$i]')");
    }
}
// $totalharga = $qty * product_owp


header("location:transaksi.php?pesan=tambah");