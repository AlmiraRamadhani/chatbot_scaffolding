<?php

$koneksi = mysqli_connect("localhost", "root", "", "penyewa2_db_sewa");

if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
