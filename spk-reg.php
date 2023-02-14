<?php
    $page  = 'transaksi';
    $page2 = 'spk';
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
          <li class="breadcrumb-item active">SPK</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section>
      <div class="container-fluid">
        <div class="card">
          <div class="card-body mt-3">
            <a href="form-create-spk.php" class="btn btn-primary btn-sm p-2"><i class="bi bi-plus-circle"></i> Buat SPK Reguler</a>
            <a href="form-create-spk-ecat.php" class="btn btn-success btn-sm p-2"><i class="bi bi-plus-circle"></i> Buat SPK E-cat</a>
          </div>
        </div>
        <div class="card">
          <div class="card-body mt-3">
            <div class="card-body">
              <div class="row g-3">
                <div class="col-7">
                  <nav>
                    <ol class="breadcrumb" style="font-size: 15px;">
                      <li class="breadcrumb-item active">SPK Reguler</li>
                      <li class="breadcrumb-item"><a style="color: blue;" href="spk-ecat.php">SPK E-Cat</a></li>
                    </ol>
                  </nav>
                </div>
                <div class="col-2">
                  <select class="form-select" aria-label="Default select example">
                    <option value="1">Paling Baru</option>
                    <option value="2">Paling Lama</option>
                  </select>
                </div>
                <div class="col-3"> 
                  <div class="input-group">
                    <div class="form-outline">
                      <input type="search" id="form1" class="form-control" placeholder="Cari di sini">
                    </div>
                    <button type="button" class="btn btn-primary">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <ul class="nav nav-tabs  nav-tabs-bordered" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="belum-diproses-tab" data-bs-toggle="tab" data-bs-target="#belum-diproses-tab-pane" type="button" role="tab" aria-controls="belum-diproses-tab-pane" aria-selected="true">Belum Diproses</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="dalam-proses-tab" data-bs-toggle="tab" data-bs-target="#dalam-proses-tab-pane" type="button" role="tab" aria-controls="dalam-proses-tab-pane" aria-selected="false">Dalam Proses</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="siap-kirim-tab" data-bs-toggle="tab" data-bs-target="#siap-kirim-tab-pane" type="button" role="tab" aria-controls="siap-kirim-tab-pane" aria-selected="false">Siap Kirim</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="dicetak-tab" data-bs-toggle="tab" data-bs-target="#dicetak-tab-pane" type="button" role="tab" aria-controls="dicetak-tab-pane" aria-selected="false">Invoice Sudah Dicetak</button>
              </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="dikirim-tab" data-bs-toggle="tab" data-bs-target="#dikirim-tab-pane" type="button" role="tab" aria-controls="dikirim-tab-pane" aria-selected="false">Dikirim</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="diterima-tab" data-bs-toggle="tab" data-bs-target="#diterima-tab-pane" type="button" role="tab" aria-controls="diterima-tab-pane" aria-selected="false">Diterima</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="transaksi-selesai-tab" data-bs-toggle="tab" data-bs-target="#transaksi-selesai-tab-pane" type="button" role="tab" aria-controls="transaksi-selesai-tab-pane" aria-selected="false">Transaksi Selesai</button>
              </li>
            </ul>
            <div class="card-body shadow-lg bg-body rounded mt-3">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="belum-diproses-tab-pane" role="tabpanel" aria-labelledby="belum-diproses-tab" tabindex="0">  
                  <div class="card-header">
                    <div class="row">
                      <div class="col-sm-10 text-dark"><a class="text-primary">SPK/REG/001/1/2023</a> / <a>PO-001</a> / <a><i class="bi bi-clock"></i> 01 Jan 2023, 08.30 WIB</a></div>
                      <div class="col-sm-2"><a class="btn btn-warning btn-sm">Kirim Hari Ini <i class="bi bi-info-circle"></i></a></div>
                    </div>
                  </div>
                  <div class="card-body p-2">
                    <div class="row">
                      <div class="col-sm-4 m-1 border">
                        <p>
                          Customer :<br>
                          Ibu Melly
                        </p>
                      </div>
                      <div class="col-sm-5 m-1 border">
                        <p>
                          Alamat :<br>
                          Jakarta
                        </p>
                      </div>
                      <div class="col-sm-2 p-2">
                        <a href="#" class="btn btn-primary btn-sm m-1"><i class="bi bi-eye-fill"></i> Lihat Data</a>
                        <a href="#" class="btn btn-secondary btn-sm m-1"><i class="bi bi-send"></i> Proses Pesanan</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="dalam-proses-tab-pane" role="tabpanel" aria-labelledby="dalam-proses-tab" tabindex="0">Dalam Proses</div>
                <div class="tab-pane fade" id="siap-kirim-tab-pane" role="tabpanel" aria-labelledby="siap-kirim-tab" tabindex="0">Siap Kirim</div>
                <div class="tab-pane fade" id="dicetak-tab-pane" role="tabpanel" aria-labelledby="dicetak-tab" tabindex="0">Invoice Sudah Dicetak</div>
                <div class="tab-pane fade" id="dikirim-tab-pane" role="tabpanel" aria-labelledby="dikirim-tab" tabindex="0">Dikirim</div>
                <div class="tab-pane fade" id="diterima-tab-pane" role="tabpanel" aria-labelledby="diterima-tab" tabindex="0">Diterima</div>
                <div class="tab-pane fade" id="transaksi-selesai-tab-pane" role="tabpanel" aria-labelledby="transaksi-selesai-tab" tabindex="0">Transaksi Selesai</div>
              </div>
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