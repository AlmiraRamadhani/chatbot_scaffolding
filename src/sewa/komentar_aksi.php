<?php
include 'koneksi.php';

$comment_name = $_POST['comment_name'];
$comment_email = $_POST['comment_email'];
$comment_subject = $_POST['comment_subject'];
$comment = $_POST['comment'];

mysqli_query($koneksi, "INSERT INTO tb_comment values('', '$comment_name','$comment_email','$comment_subject','$comment')");

header("location:index.php?pesan=tambah");
