<?php
    session_start();
    include "../koneksi.php";

    if(isset($_POST['simpan-br-in-import'])){
        $id_inv_br_import = $_POST['id_inv_br_import'];
        $no_inv = $_POST['no_inv'];
        $tgl_inv = $_POST['tgl_inv'];
        $id_sp = $_POST['id_sp'];
        $no_order = $_POST['no_order'];
        $tgl_order = $_POST['tgl_order'];
        $no_awb = $_POST['no_awb'];
        $tgl_kirim = $_POST['tgl_kirim'];
        $ship = $_POST['ship'];
        $tgl_est = $_POST['tgl_est'];
        $id_user = $_POST['id_user'];
        $created = $_POST['created'];
        $laut = 'laut';
	    $udara = 'udara';   

        if($ship == 10){
            $simpan_data = "INSERT INTO inv_br_import
                        (id_inv_br_import, id_user, id_supplier, no_inv, tgl_inv, no_order, tgl_order, shipping_by, no_awb, tgl_kirim, tgl_est, created_date)
                        VALUES
                        ('$id_inv_br_import', '$id_user', '$id_sp', '$no_inv', '$tgl_inv', '$no_order', '$tgl_order', '$udara', '$no_awb', '$tgl_kirim', '$tgl_est', '$created')";
            $query = mysqli_query($connect, $simpan_data);
            $_SESSION['info'] = 'Disimpan';
            header("Location:../barang-masuk-reg-import.php");
        }else{
            $simpan_data = "INSERT INTO inv_br_import
                            (id_inv_br_import, id_user, id_supplier, no_inv, tgl_inv, no_order, tgl_order, shipping_by, no_awb, tgl_kirim, tgl_est, created_date)
                            VALUES
                            ('$id_inv_br_import', '$id_user', '$id_sp', '$no_inv', '$tgl_inv', '$no_order', '$tgl_order', '$laut', '$no_awb', '$tgl_kirim', '$tgl_est', '$created')";
            $query = mysqli_query($connect, $simpan_data);
            $_SESSION['info'] = 'Disimpan';
            header("Location: ../barang-masuk-reg-import.php");
        }

    }

?>