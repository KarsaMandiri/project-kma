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
          <div class="card-header text-center"><h5>Tambah Isi Produk Set Marwa</h5></div>
          <div class="card-body p-3">
            <form action="">
                <input type="text" name="id_isi_set_marwa">
                <input type="text" name="id_produk_set" value="">
                <div class="mb-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Nama Produk</label>
                            <input type="text" name="nama_produk" id="nama_produk" placeholder="Pilih..." required>
                        </div>
                        <div class="col-sm-4">
                            <label>Merk</label>
                            <input type="text" name="merk" id="merk" required>
                        </div>
                        <div class="col-sm-2">
                            <label>Merk</label>
                            <input type="text" name="harga" id="harga" required>
                        </div>
                    </div>
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk" placeholder="Pilih..." required>
                </div>
            </form>
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
