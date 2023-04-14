<?php
    $page = 'br-masuk';
    $page2 = 'br-masuk-reg';
    include "akses.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Inventory KMA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <?php include "page/head.php"; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

    <style>
        #table2{
            cursor: pointer;
        }
        #table3{
            cursor: pointer;
        }

        input[type="text"]:read-only {
        background: #e9ecef;
        }

        textarea[type="text"]:read-only {
        background: #e9ecef;
        }
    </style>
</head>

<body>
  <!-- nav header -->
  <?php include "page/nav-header.php" ?>
  <!-- end nav header -->
  
  <!-- sidebar  -->
  <?php include "page/sidebar.php"; ?>
  <!-- end sidebar -->
  

  <main id="main" class="main">
     <!-- Loading -->
     <div class="loader loader">
      <div class="loading">
        <img src="img/loading.gif" width="200px" height="auto">
      </div>
    </div>
    <!-- ENd Loading -->
    <section>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header"><h5 class="text-center">Form Input Barang Masuk Import</h5></div>
                <div class="card-body p-3">
                    <!-- Pills Tabs -->
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Order</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Actual</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card">
                        <div class="card-body mt-3">
                            <?php  
                                $id = $_GET['id'];
                            ?>
                            <div class="text-start">
                                <a href="input-isi-inv-br-import.php?id=<?php echo $id ?>" class="btn btn-md btn-primary text-end"><i class="bi bi-plus-circle"></i> Tambah data</a>
                            </div>
                            <div class="table-responsive mt-3">
                                <div class="border p-3 mb-3">
                                    <?php  
                                        include "koneksi.php";
                                        $sql = "SELECT ibi.*, ibi.created_date AS created, sp.*, uc.nama_user as user_created, uu.nama_user as user_updated
                                            FROM inv_br_import AS ibi
                                            LEFT JOIN user uc ON (ibi.id_user = uc.id_user)
                                            LEFT JOIN user uu ON (ibi.user_updated = uu.id_user)
                                            LEFT JOIN tb_supplier sp ON (ibi.id_supplier = sp.id_sp)
                                            LIMIT 1";
                                        $query = mysqli_query($connect, $sql);
                                        while($data = mysqli_fetch_array($query)){
                                    ?>
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <p>No. Invoice </p>
                                            <p>Tgl. Invoice </p>
                                            <p>Tgl. Order</p>
                                            <p>No. AWB</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p>: <?php echo $data['no_inv'] ?></p>
                                            <p>: <?php echo $data['tgl_inv'] ?></p>
                                            <p>: <?php echo $data['tgl_order'] ?></p>
                                            <p>: <?php echo $data['no_awb'] ?></p>
                                        </div>
                                        <div class="col-sm-1">
                                            <p>Supplier</p>
                                            <p>Alamat</p>
                                            <p>Dikirim Via</p>
                                            <p>Tgl. Estimasi</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p>: <?php echo $data['nama_sp'] ?></p>
                                            <p>: <?php echo $data['alamat'] ?></p>
                                            <p>: <?php echo $data['shipping_by'] ?></p>
                                            <p>: <?php echo $data['tgl_est'] ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <table class="table table-bordered table-striped" id="table1">
                                    <thead>
                                        <tr class="text-white" style="background-color: navy;">
                                            <td class="text-center p-3 col-4">Nama Barang</td>
                                            <td class="text-center p-3 col-2">Qty_Order</td>
                                            <td class="text-center p-3 col-2">Qty_Actual</td>
                                            <td class="text-center p-3 col-2">Status</td>
                                            <td class="text-center p-3 col-2">Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>DF 14</td>
                                            <td class="text-end">1000</td>
                                            <td class="text-end">900</td>
                                            <td class="text-end">Kurang : 100 item</td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-primary btn-sm rounded"><i class="bi bi-plus-circle"></i></a>
                                                <a href="" class="btn btn-warning btn-sm rounded"><i class="bi bi-pencil" style="font-size: 14px;"></i></a>
                                                <a href="" class="btn btn-danger btn-sm rounded"><i class="bi bi-trash" style="font-size: 14px;"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>DF 14</td>
                                            <td class="text-end">1000</td>
                                            <td class="text-end">900</td>
                                            <td class="text-end">Kurang : 100 item</td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-primary btn-sm rounded"><i class="bi bi-plus-circle"></i></a>
                                                <a href="" class="btn btn-warning btn-sm rounded"><i class="bi bi-pencil" style="font-size: 14px;"></i></a>
                                                <a href="" class="btn btn-danger btn-sm rounded"><i class="bi bi-trash" style="font-size: 14px;"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                  Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                </div>
              </div><!-- End Pills Tabs -->
                </div>
            </div>
        </div>
    </section>
  </main><!-- End #main -->
  <!-- Footer -->
  <?php include "page/footer.php" ?>
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include "page/script.php" ?>
</body>
</html>
