<?php
include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM tb_cache where id='$id'");

header("location:master_pertanyaan.php");
