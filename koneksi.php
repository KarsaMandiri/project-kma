<?php
	$server = "localhost";//nama server
	$user = "root";//usernya
	$password = "";//password
	$db = "db_inventory";//database

	// Koneksi dan memilih database di server
	$connect = mysqli_connect($server,$user,$password,$db) or die(mysqli_error());

	//echo "Terhubung";
?>