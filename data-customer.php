<?php
    $page = 'data';
    $page2  = 'data-cs';
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

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Customer</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section>
      <div class="container-fluid">
        <div class="card">
          <div class="card-header text-center">
            <h4>Data Customer</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr class="bg-primary text-center text-white">
                    <td class="col-1">No</td>
                    <td class="col-4">Nama Customer</td>
                    <td class="col-5">Alamat</td>
                    <td class="col-2">Telepon</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>Ibu Melly</td>
                    <td>Jakarta</td>
                    <td>0812xxxx</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

  </main><!-- End #main -->

  <!-- Footer -->
  <?php include "page/footer.php" ?>
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include "page/script.php" ?>
</body>

</html>