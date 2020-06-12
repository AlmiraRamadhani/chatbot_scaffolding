<?php
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus transaksi
mysqli_query($koneksi, "DELETE from tb_transaction where id='$id'");

// alihkan halaman ke halaman transaksi
header("location:transaksi.php");
