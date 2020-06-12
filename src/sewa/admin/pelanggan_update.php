<?php
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
if ($_POST['submit']) {
    $customer_id = $_POST['customer_id'];
    $customer_nik = $_POST['customer_nik'];
    $customer_name = $_POST['customer_name'];
    $customer_address = $_POST['customer_address'];
    $customer_phone = $_POST['customer_phone'];
    $customer_company = $_POST['customer_company'];
    $customer_project = $_POST['customer_project'];
    
    // update data
    mysqli_query($koneksi, "UPDATE tb_customer SET customer_nik='$customer_nik', customer_name='$customer_name', customer_address='$customer_address', customer_phone='$customer_phone', customer_company='$customer_company', customer_project='$customer_project' where customer_id='$customer_id'");
    
    // mengalihkan halaman kembali ke halaman pelanggan
    header("location:pelanggan.php");
}