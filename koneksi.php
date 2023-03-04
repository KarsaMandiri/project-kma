<?php
	$server = "localhost";//nama server
	$user = "root";//usernya
	$password = "";//password
	$db = "db_inventory";//database

	// Koneksi dan memilih database di server
	$connect = mysqli_connect($server,$user,$password,$db);

	if (!$connect) {
		die("Koneksi gagal: " . mysqli_connect_error());
	}
		// echo "Koneksi berhasil";
	// mysqli_close($connect);
?>