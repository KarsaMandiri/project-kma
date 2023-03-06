<?php 
	session_start();
	include "../koneksi.php";

	// Simpan Role
	if (isset($_POST["simpan-sp"])) {
		$id_sp = $_POST['id_sp'];
		$nama_sp = $_POST['nama_sp'];
		$alamat = $_POST['alamat_sp'];
		$telp = $_POST['telp_sp'];
		$created = $_POST['created'];

		$cek_sp = mysqli_query($connect, "SELECT nama_sp FROM tb_supplier WHERE nama_sp = '$nama_sp'");

		if ($cek_sp->num_rows > 0) {
			$_SESSION['info'] = 'Data Gagal Disimpan';
            echo "<script>document.location.href='../data-supplier.php'</script>";
		}else{
			mysqli_query($connect, "INSERT INTO tb_supplier
                      (id_sp, nama_sp, alamat, no_telp, created_date) VALUES ('$id_sp', '$nama_sp', '$alamat', '$telp', '$created')");

			$_SESSION['info'] = 'Disimpan';
            echo "<script>document.location.href='../data-supplier.php'</script>";
		}

	//Edit Role 
	}elseif(isset($_POST["edit-sp"])) {
		$id_sp = $_POST['id_sp'];
		$nama_sp = $_POST['nama_sp'];
		$alamat = $_POST['alamat_sp'];
		$telp = $_POST['telp_sp'];
		$updated = $_POST['updated'];
		$update = mysqli_query($connect, "UPDATE tb_supplier 
	                SET
					nama_sp = '$nama_sp',
					alamat = '$alamat',
					no_telp = '$telp',
					updated_date = '$updated'
	                WHERE id_sp='$id_sp'");
    if($update){
            $_SESSION['info'] = 'Diupdate';
            echo "<script>document.location.href='../data-supplier.php'</script>";
        } else {
            $_SESSION['info'] = 'Data Gagal Diupdate';
            echo "<script>document.location.href='../data-supplier.php'</script>";
        }

    // Hapus Role
	}elseif($_GET['hapus-sp']){
		//tangkap URL dengan $_GET
	    $idh = $_GET['hapus-sp'];

	    // perintah queery sql untuk hapus data
	    $sql = "DELETE FROM tb_supplier WHERE id_sp='$idh'";
	    $query_del = mysqli_query($connect,$sql) or die (mysqli_error($connect));

	    if($query_del){
	        $_SESSION['info'] = 'Dihapus';
	        echo "<script>document.location.href='../data-supplier.php'</script>";
	    }else{
	        $_SESSION['info'] = 'Data Gagal Dihapus';
	        echo "<script>document.location.href='../data-supplier.php'</script>";
	    }
	}
?>