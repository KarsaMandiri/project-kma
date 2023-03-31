<?php
    $page = 'data';
    $page2 = 'data-produk-set-marwa';
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
</head>

<body>
  <!-- nav header -->
  <?php include "page/nav-header.php" ?>
  <!-- end nav header -->
  
  <!-- sidebar  -->
  <?php include "page/sidebar.php"; ?>
  <!-- end sidebar -->
  

  <main id="main" class="main">
    <section>
      <div class="container-fluid">
        <div class="card">
          <div class="card-header text-center"><h5>Detail Produk Set Marwa</h5></div>
          <div class="card-body p-3">
            <div class="row">
              <div class="col-sm-8">
                <p>Nama Set : </p>
                <p>Lokasi :   , Lantai :   , Area :   ,  No. Rak :  </p>
              </div>
              <div class="col-sm-4 text-end">
                <a href="tambah-isi-produk-set-marwa.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah produk set</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr class="text-white" style="background-color: #051683;">
                    <th class="text-center p-3" style="width: 50px">No</th>
                    <th class="text-center p-3" style="width: 350px">Nama Produk</th>
                    <th class="text-center p-3" style="width: 80px">Qty</th>
                    <th class="text-center p-3" style="width: 150px">Harga</th>
                    <th class="text-center p-3" style="width: 80px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <td class="text-center">1</td>
                  <td>DF 14</td>
                  <td class="text-end">10</td>
                  <td class="text-end">15.000</td>
                  <td class="text-center">
                    <a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                  </td>
                </tbody>
              </table>
            </div>
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

<!-- Format nominal Indo -->
<script>
   const inputBudget = document.getElementById('inputBudget');
  
  inputBudget.addEventListener('input', () => {
    // Remove any non-digit characters
    let input = inputBudget.value.replace(/[^\d]/g, '');
    // Convert to a number and format with "Rp" prefix and "." and "," separator
    let formattedInput = Number(input).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    // Remove trailing ",00" if present
    formattedInput = formattedInput.replace(",00", "");
    // Update the input value with the formatted number
    inputBudget.value = formattedInput;
  });
</script>
