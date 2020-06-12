<?php
session_start();
$product_id = $_GET['product_id'];

if (isset($_SESSION['keranjang'][$product_id])) {
    $_SESSION['keranjang'][$product_id] += 1;
} else {
    $_SESSION['keranjang'][$product_id] = 1;
}
header("location:cart3.php?pesan=tambah");
