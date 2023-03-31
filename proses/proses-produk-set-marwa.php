<?php  
session_start();
include "../koneksi.php";

if(isset($_POST['simpan-set-marwa'])){
    $id_set_marwa = $_POST['id_set_marwa'];
    $kode_set = $_POST['kode_barang'];
    $nama_set_marwa = $_POST['nama_set_marwa'];
    $id_lokasi = $_POST['id_lokasi'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $id_user = $_POST['id_user'];
    $created = $_POST['created_date'];

    // Mengubah format menjadi int
    $harga = intval(preg_replace("/[^0-9]/", "", $harga));

    $cek_data = mysqli_query($connect, "SELECT * FROM tb_produk_set_marwa WHERE kode_set_marwa = '$kode_set'");

    if($cek_data -> num_rows > 0){
        $_SESSION['info'] = 'Data sudah ada';
        echo "<script>document.location.href='../data-produk-set-marwa.php'</script>";
    }else{
        mysqli_query($connect, "INSERT INTO tb_produk_set_marwa
                    (id_set_marwa, kode_set_marwa, nama_set_marwa, id_user, id_lokasi, id_merk, harga_set_marwa, stock, created_date) 
                    VALUES 
                    ('$id_set_marwa', '$kode_set', '$nama_set_marwa', '$id_user', '$id_lokasi', '$merk', '$harga', '$stock', '$created')");

        $_SESSION['info'] = 'Disimpan';
        echo "<script>document.location.href='../data-produk-set-marwa.php'</script>";

    }

}elseif(isset($_POST['edit-set-marwa'])){
    $id_set_marwa = $_POST['id_set_marwa'];
    $kode_set = $_POST['kode_barang'];
    $nama_set_marwa = $_POST['nama_set_marwa'];
    $id_lokasi = $_POST['id_lokasi'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $id_user = $_POST['id_user'];
    $updated = $_POST['updated_date'];

    $harga = intval(preg_replace("/[^0-9]/", "", $harga));

    $update = mysqli_query($connect, "UPDATE tb_produk_set_marwa
									  SET 
                                      kode_set_marwa = '$kode_set',
                                      nama_set_marwa = '$nama_set_marwa',
                                      id_lokasi = '$id_lokasi',
                                      id_merk = '$merk',
                                      harga_set_marwa = '$harga',
                                      updated_date = '$id_user'
                                      WHERE id_set_marwa = '$id_set_marwa'");
    
    if($update){
        $_SESSION['info'] = 'Diupdate';
		echo "<script>document.location.href='../data-produk-set-marwa.php'</script>";
    }else{
        $_SESSION['info'] = 'Data Gagal Diupdate';
		echo "<script>document.location.href='../data-produk-set-marwa.php'</script>";
    }


}elseif(isset($_GET['hapus-set-marwa'])){
    //tangkap URL dengan $_GET
    $idh = $_GET['hapus-set-marwa'];

    // perintah queery sql untuk hapus data
    $sql = "DELETE FROM tb_produk_set_marwa WHERE id_set_marwa='$idh'";
    $query_del = mysqli_query($connect,$sql) or die (mysqli_error($connect));

    if($query_del){
        $_SESSION['info'] = 'Dihapus';
        echo "<script>document.location.href='../data-produk-set-marwa.php'</script>";
    }else{
        $_SESSION['info'] = 'Data Gagal Dihapus';
        echo "<script>document.location.href='../data-produk-set-marwa.php'</script>";
    }

}

?>