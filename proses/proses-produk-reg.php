<?php 
	session_start();
	include "../koneksi.php";

	// Simpan
	if (isset($_POST["simpan-produk-reg"])) {
		$id_produk = $_POST['id_produk'];
        $kode = $_POST['kode_produk'];
        $nama = $_POST['nama_produk'];
        $merk = $_POST['merk'];
        $harga = $_POST['harga'];
        $lokasi = $_POST['id_lokasi'];
        $kat_produk = $_POST['kategori_produk'];
        $kat_penjualan = $_POST['kategori_penjualan'];
        $grade = $_POST['grade'];
        $id_user = $_POST['id_user'];
        $created = $_POST['created'];

		
		// Convert budget to integer
		$harga = intval(preg_replace("/[^0-9]/", "", $harga));

		// Mendapatkan informasi file
		$nama_file = $_FILES["fileku"]["name"];
		$tipe_file = $_FILES["fileku"]["type"];
		$ukuran_file = $_FILES["fileku"]["size"];
		$tmp_file = $_FILES["fileku"]["tmp_name"];

		// Enkripsi nama file
		$ubah_nama = 'IMG';
		$nama_file_baru = $ubah_nama . uniqid() . '.jpg';

		// Simpan file ke direktori tujuan
		$direktori_tujuan = "../gambar/upload-marwa/";
		$target_file = $direktori_tujuan . $nama_file_baru;
		move_uploaded_file($tmp_file, $target_file);

		$cek_data = mysqli_query($connect, "SELECT * FROM tb_produk_reguler WHERE kode_produk = '$kode'");

		if ($cek_data->num_rows > 0) {
			$_SESSION['info'] = 'Data sudah ada';
            echo "<script>document.location.href='../data-produk-reg.php'</script>";
		}else{
			$cek_data2 = mysqli_query($connect, "SELECT * FROM tb_produk_reguler WHERE kode_produk = '$kode' AND nama_produk = '$nama' AND id_merk = '$merk'");

			if($cek_data2->num_rows > 0){
				$_SESSION['info'] = 'Data sudah ada';
            	echo "<script>document.location.href='../data-produk-reg.php'</script>";
			}else{
				$sql = "INSERT INTO tb_produk_reguler
                (id_produk_reg, id_user, id_merk, id_kat_produk, id_kat_penjualan, id_grade, id_lokasi, kode_produk, nama_produk, harga_produk, gambar, created_date)
                VALUES
                ('$id_produk', '$id_user', '$merk', '$kat_produk', '$kat_penjualan', '$grade', '$lokasi', '$kode', '$nama', '$harga', '$nama_file_baru', '$created')";
        		$query = mysqli_query($connect, $sql) or die(mysqli_error($connect, $sql));

				$_SESSION['info'] = 'Disimpan';
            	echo "<script>document.location.href='../data-produk-reg.php'</script>";
			}
		}

	//Edit
	}elseif(isset($_POST["edit-grade-produk"])) {
		$id_grade = $_POST['id_grade'];
        $grade = $_POST['grade'];

		// cek data sebelum update
        $cek_grade = mysqli_query($connect, "SELECT * FROM tb_produk_grade WHERE nama_grade = '$grade'");

		if($cek_grade->num_rows > 0) {
			// Ada nama yang sama di database, tampilkan pesan error
			$_SESSION['info'] = 'Data sudah ada';
			echo "<script>document.location.href='../grade-produk.php'</script>";
		} else {
			// Data belum ada, simpan data
			$update = mysqli_query($connect, "UPDATE tb_produk_grade 
				SET
				nama_grade = '$grade'
				WHERE id_grade='$id_grade'");
				
			$_SESSION['info'] = 'Diupdate';
			echo "<script>document.location.href='../grade-produk.php'</script>";
		}

    // Hapus 
	}elseif($_GET['hapus-produk-reg']){
		//tangkap URL dengan $_GET
	    $idh = $_GET['hapus-produk-reg'];

		//mengambil nama gambar yang terkait
		$sql = "SELECT * FROM tb_produk_reguler WHERE id_produk_reg = '$idh'";
		$result = mysqli_query($connect, $sql);
		$row = mysqli_fetch_assoc($result);
		$gambar = $row['gambar'];

		echo $idh;

		//query untuk menghapus data berdasarkan ID
		$sql = "DELETE FROM tb_produk_reguler WHERE id_produk_reg = '$idh'";

		if (mysqli_query($connect, $sql)) {
			//hapus gambar terkait
			unlink("../gambar/upload-marwa/$gambar");
			$_SESSION['info'] = 'Dihapus';
	        echo "<script>document.location.href='../data-produk-reg.php'</script>";

		} else {
			$_SESSION['info'] = 'Data Gagal Dihapus';
	        echo "<script>document.location.href='../data-produk-reg.php'</script>";
		}
	}
?>