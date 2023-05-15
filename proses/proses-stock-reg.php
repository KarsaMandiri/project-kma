<?php
session_start();
include "../koneksi.php";

if (isset($_POST['simpan-stock-reg'])) {
    $id_stock_reg = $_POST['id_stock_reg'];
    $id_produk = $_POST['id_produk'];
    $stock = $_POST['stock'];
    $id_user = $_POST['id_user'];
    $created = $_POST['created_date'];
    $register_value = 1;

    $stock = intval(preg_replace("/[^0-9]/", "", $stock));

    $cek_data = "SELECT id_produk_reg FROM stock_produk_reguler WHERE id_produk_reg = '$id_produk'";
    $query = mysqli_query($connect, $cek_data);

    if ($query->num_rows > 0) {
        $_SESSION['info'] = 'Data sudah ada';
        echo "<script>document.location.href='../stock-produk-reg.php'</script>";
    } else {
        mysqli_query($connect, "INSERT INTO stock_produk_reguler
                        (id_stock_prod_reg, id_user, id_produk_reg, stock, created_date)
                        values
                        ('$id_stock_reg', '$id_user', '$id_produk', '$stock', '$created')");

        $update = mysqli_query($connect, "UPDATE tb_produk_reguler 
                                              SET
                                              register_value = '$register_value'
                                              WHERE id_produk_reg='$id_produk'");
        $_SESSION['info'] = 'Disimpan';
        echo "<script>document.location.href='../stock-produk-reg.php'</script>";
    }
} elseif (isset($_GET['hapus-stock-reg'])) {
    $idh = base64_decode($_GET['hapus-stock-reg']);
    $idu = base64_decode($_GET['id_produk']);
    $register_val = 0;
    $update = mysqli_query($connect, "UPDATE tb_produk_reguler 
                                          SET
                                          register_value = '$register_val'
                                          WHERE id_produk_reg='$idu'");

    $hapus_data = "DELETE FROM stock_produk_reguler WHERE id_stock_prod_reg = '$idh'";
    $query = mysqli_query($connect, $hapus_data);

    if ($query) {
        $_SESSION['info'] = 'Dihapus';
        echo "<script>document.location.href='../stock-produk-reg.php'</script>";
    } else {
        $_SESSION['info'] = 'Data Gagal Dihapus';
        echo "<script>document.location.href='../stock-produk-reg.php'</script>";
    }
}
