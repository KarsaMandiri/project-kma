<?php
    $page = 'data';
    $page2 = 'data-sp';
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
          <li class="breadcrumb-item active">Supplier</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section>
      <div class="container-fluid">
        <div class="card">
          <div class="card-header text-center">
            <h4>Data Supplier</h4>
          </div>
          <div class="card-body p-3">
            <a href="#" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#modal1"><i class="bi bi-plus-circle"></i> Tambah data supllier</a>
            <div class="table-responsive mt-3">
              <table class="table table-striped table-bordered" id="table1">
                <thead>
                  <tr class="text-white" style="background-color: #051683;">
                    <td class="text-center p-3 col-1">No</td>
                    <td class="text-center p-3 col-3">Nama Supplier</td>
                    <td class="text-center p-3 col-5">Alamat</td>
                    <td class="text-center p-3 col-2">Telepon</td>
                    <td class="text-center p-3 col-2">Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>Patwal</td>
                    <td>Pakistan</td>
                    <td>0813xxx</td>
                    <td>
                      <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal2"><i class="bi bi-pencil"></i></a>
                      <a href="#" class="btn btn-danger btn-sm delete-button"><i class="bi bi-trash"></i></a>
                      <!-- Modal Edit SP -->
                        <div class="modal fade" id="modal2" tabindex="-1">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5">Tambah Data Supplier</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="proses/proses-sp.php" method="POST">
                                <div class="modal-body">
                                  <div class="mb-3">
                                    <div class="mb-3">
                                    <label class="form-label">Nama Supplier</label>
                                    <input type="hidden" class="form-control" name="id_user_role" value="">
                                    <input type="text" class="form-control" name="nama_sp" value="Patwal" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat_sp" value="Pakistan" required>
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Telepon</label>
                                    <input type="text" class="form-control" name="telp_sp" value="0813xxx" required>
                                    <input type="hidden" class="form-control" name="created" value="<?php echo date('d/m/Y, G:i') ?>">
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="submit" name="simpan-cs" class="btn btn-primary btn-md"><i class="bx bx-save"></i> Simpan Data</button>
                                  <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal"><i class="bi bi-x"></i> Tutup</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- End Modal Edit SP -->
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <!-- Modal SP -->
  <div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Tambah Data Supplier</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="proses/proses-sp.php" method="POST">
          <div class="modal-body">
            <div class="mb-3">
              <?php 
                  $UUID = generate_uuid();
              ?>
              <div class="mb-3">
              <label class="form-label">Nama Supplier</label>
              <input type="hidden" class="form-control" name="id_user_role" value="SP<?php echo $UUID; ?>">
              <input type="text" class="form-control" name="nama_sp" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat_sp" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Telepon</label>
              <input type="text" class="form-control" name="telp_sp" required>
              <input type="hidden" class="form-control" name="created" value="<?php echo date('d/m/Y, G:i') ?>">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="simpan-cs" class="btn btn-primary btn-md"><i class="bx bx-save"></i> Simpan Data</button>
            <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal"><i class="bi bi-x"></i> Tutup</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Modal SP -->

  <!-- Footer -->
  <?php include "page/footer.php" ?>
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include "page/script.php" ?>
</body>
</html>

<!-- Generat UUID -->
<?php
  function generate_uuid() {
  return sprintf( '%04x%04x%04x',
    mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
    mt_rand( 0, 0xffff ),
    mt_rand( 0, 0x0fff ) | 0x4000,
    mt_rand( 0, 0x3fff ) | 0x8000,
    mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
  );
}
?>
<!-- End Generate UUID -->

<script>
  // delete button
  $("#table1").on("click", ".delete-button", function () {
    $(this).closest("tr").remove();
    if ($("#table1 tbody tr").length === 0) {
      $("#table1 tbody").append("<tr><td colspan='5' align='center'>Data not found</td></tr>");
    }
  });
</script>
