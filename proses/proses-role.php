<?php 
	session_start();
	include "../koneksi.php";

	// Simpan Role
	if (isset($_POST["simpan-role"])) {
		$id_role = $_POST['id_user_role'];
		$hak_akses = $_POST['role'];
		$created = $_POST['created'];

		$cek_role = mysqli_query($connect, "SELECT role FROM user_role WHERE role = '$hak_akses'");

		if ($cek_role->num_rows > 0) {
			$_SESSION['info'] = 'Data Gagal Disimpan';
            echo "<script>document.location.href='../data-user-role.php'</script>";
		}else{
			mysqli_query($connect, "INSERT INTO user_role 
                      (id_user_role, role, created) VALUES ('$id_role', '$hak_akses', '$created')");

			$_SESSION['info'] = 'Disimpan';
            echo "<script>document.location.href='../data-user-role.php'</script>";
		}

	//Edit Role 
	}elseif(isset($_POST["edit-role"])) {
		$id_update = $_POST['id_user_role'];
		$hak_akses = $_POST['role'];
		$update = mysqli_query($connect, "UPDATE user_role 
	                SET
	                role ='$hak_akses'
	                WHERE id_user_role='$id_update'");
    if($update){
            $_SESSION['info'] = 'Diupdate';
            echo "<script>document.location.href='../data-user-role.php'</script>";
        } else {
            $_SESSION['info'] = 'Data Gagal Diupdate';
            echo "<script>document.location.href='../data-user-role.php'</script>";
        }

    // Hapus Role
	}elseif($_GET['hapus-role']){
		//tangkap URL dengan $_GET
	    $idh = $_GET['hapus-role'];

	    // perintah queery sql untuk hapus data
	    $sql = "DELETE FROM user_role WHERE id_user_role='$idh'";
	    $query_del = mysqli_query($connect,$sql) or die (mysqli_error($connect));

	    if($query_del){
	        $_SESSION['info'] = 'Dihapus';
	        echo "<script>document.location.href='../data-user-role.php'</script>";
	    }else{
	        $_SESSION['info'] = 'Data Gagal Dihapus';
	        echo "<script>document.location.href='../data-user-role.php'</script>";
	    }
	}
?>