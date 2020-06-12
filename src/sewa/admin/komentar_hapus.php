<?php
include '../koneksi.php';

$comment_id = $_GET['comment_id'];

mysqli_query($koneksi, "DELETE FROM tb_comment where comment_id='$comment_id'");

header("location:barang.php");
