<?php
include '../koneksi.php';
$id_cust = $_POST['id_cust'];
$fdate = $_POST['fdate'];
$ldate = $_POST['ldate'];
$loanstatus = 0;
$paidstatus = 0;
mysqli_query($koneksi, "INSERT INTO tb_transaction values ('','$id_cust','$fdate','$ldate','$loanstatus','$paidstatus','')");
//tanggal
$awal = date_create($fdate);
$akhir = date_create($ldate);
$hari = date_diff($awal, $akhir);

//$datetime1 = date_create('2017-06-28');
// $datetime2 = date_create('2018-06-28');

// calculates the difference between DateTime objects 
// $interval = date_diff($datetime1, $datetime2);

// printing result in days format 
// echo $interval->format('%R%a days');
// echo $hari->format('%R%a days');


//echo  var_dump($hari);
//die();
if ($hari <= 7) {
    $query = "SELECT product_owp FROM tb_product where product_id=product_id";
} elseif ($hari >= 8 && $hari <= 14) {
    $query = "SELECT product_twp FROM tb_product where product_id=product_id";
} elseif ($hari >= 15 && $hari <= 30) {
    $query = "SELECT product_omp FROM tb_product where product_id=product_id";
}
// $totalbayar =;
//masuk db
// $last_id = mysqli_insert_id($koneksi);
// $barang = $_POST['product_name'];
// $price = $_POST['price'];
// $qty = $_POST['quantity'];
// for ($i = 0; $i < count($barang); $i++) {
//     if ($barang[$i] != "") {
//         mysqli_query($koneksi, "INSERT INTO tb_detail VALUES ('', '$last_id', '$barang[$i]', '$price[$i]', '$qty[$i]')");
//     }
// }
header("location:transaksi.php?pesan=tambah");
