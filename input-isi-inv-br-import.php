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
            <?php  
                $id = $_GET['id'];
            ?>
            <form method="post" action="form-multiple-br-import.php" class="form">
                <div class="row">
                    <div class="col">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" name="id_inv_import" id="id_inv_import" value="<?php echo $id ?>">
                        <input type="text" class="form-control" name="id_produk" id="idProduk">
                        <input type="text" class="form-control" name="nama_produk" id="namaProduk" placeholder="Pilih..." data-bs-toggle="modal" data-bs-target="#modalBarang" readonly>
                    </div>
                    <div class="col">
                        <label for="start_karton">Nomor Karton Awal</label>
                        <input type="number" class="form-control" name="start_karton" id="start_karton">
                    </div>
                    <div class="col">
                        <label for="end_karton">Nomor Karton Akhir</label>
                        <input type="number" class="form-control" name="end_karton" id="end_karton">
                    </div>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Create Forms</button>
            </form>     
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

<!-- Modal Barang -->
<div class="modal fade" id="modalBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered" id="table2">
            <thead>
              <tr class="text-white" style="background-color: #051683;">
                <td class="text-center p-3" style="width: 50px">No</td>
                <td class="text-center p-3" style="width: 350px">Nama Produk</td>
                <td class="text-center p-3" style="width: 100px">Merk</td>
              </tr>
            </thead>
            <tbody>
              <?php 
                date_default_timezone_set('Asia/Jakarta');
                
                include "koneksi.php";
                $no = 1;
                $sql = "SELECT pr.*,  
                        mr.*
                        FROM tb_produk_reguler as pr
                        LEFT JOIN tb_merk mr ON (pr.id_merk = mr.id_merk)
                        ";
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
              ?>
              <tr data-idprod= "<?php echo $data['id_produk_reg'];?>" data-namaprod = "<?php echo $data['nama_produk'];?>" data-merkprod = "<?php echo $data['nama_merk'];?>" data-bs-dismiss="modal">
                <td class="text-center"><?php echo $no; ?></td>
                <td><?php echo $data['nama_produk']; ?></td>
                <td class="text-center"><?php echo $data['nama_merk']; ?></td>
              </tr>
              <?php $no++; ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Barang -->

<script>
  // select Produk Reguler
  $(document).on('click', '#table2 tbody tr', function (e) {
    $('#idProduk').val($(this).data('idprod'));
    $('#namaProduk').val($(this).data('namaprod'));
    $('#merkProduk').val($(this).data('merkprod'));
    $('#modalBarang').modal('hide');
  });
</script>