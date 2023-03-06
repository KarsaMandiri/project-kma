<?php
    $page = 'data';
    $page2  = 'data-cs';
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
          <div class="card-body p-3">
            <button class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#modal-cs"><i class="bi bi-plus-circle"></i> Tambah data customer</button>
            <div class="table-responsive mt-3">
              <table class="table table-striped table-bordered" id="table1">
                <thead>
                  <tr class="text-white" style="background-color: #051683;">
                    <td class="text-center p-3 col-1">No</td>
                    <td class="text-center p-3 col-3">Nama Customer</td>
                    <td class="text-center p-3 col-5">Alamat</td>
                    <td class="text-center p-3 col-2">Telepon</td>
                    <td class="text-center p-3 col-2">Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">1</td>
                    <td>Ibu Melly</td>
                    <td>Jakarta</td>
                    <td>0812xxxx</td>
                    <td class="text-center">
                      <!-- Edit Data -->
                      <a class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modal2"><i class="bi bi-pencil"></i></a>
                      <!-- Hapus Data -->
                      <a class="btn btn-danger btn-sm delete-button"><i class="bi bi-trash"></i></a>
                    </td>
                    <!-- Modal Edit CS -->
                    <div class="modal fade" id="modal2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5">Edit Data Customer</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="proses/proses-cs.php" method="POST">
                            <div class="modal-body">
                              <div class="mb-3">
                                <div class="mb-3">
                                <label class="form-label">Nama Customer</label>
                                <input type="hidden" class="form-control" name="id_user_role" value="">
                                <input type="text" class="form-control" name="nama_sp" value="Ibu Melly" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat_sp" value="Jakarata" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Telepon</label>
                                <input type="text" class="form-control" name="telp_sp" value="0812xxx" required>
                                <input type="hidden" class="form-control" name="created" value="<?php echo date('d/m/Y, G:i') ?>">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="edit-cs" class="btn btn-primary btn-md"><i class="bx bx-save"></i> Simpan Data</button>
                              <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal"><i class="bi bi-x"></i> Tutup</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal Edit CS -->
                  </tr>
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

<!-- Modal CS -->
<div class="modal fade" id="modal-cs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="proses/proses-cs.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <?php 
                $UUID = generate_uuid();
            ?>
            <div class="mb-3">
            <label class="form-label">Nama Custumer</label>
            <input type="hidden" class="form-control" name="id_user_role" value="CS<?php echo $UUID; ?>">
            <input type="text" class="form-control" name="nama_cs" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat_cs" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="text" class="form-control" name="telp_cs" required>
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
<!-- End Modal CS -->

<!-- Modal Confirm Hapus -->
<div class="modal fade" id="confirm-delete-modal" tabindex="-1" role="dialog"
  aria-labelledby="confirm-delete-modal-label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirm-delete-modal-label">Confirm Delete</h5>

        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirm-delete-btn">Delete</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Confirm Hapus -->

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


<script>
  // delete button
  $("#table1").on("click", ".delete-button", function () {
    $(this).closest("tr").remove();
    if ($("#table1 tbody tr").length === 0) {
      $("#table1 tbody").append("<tr><td colspan='5' align='center'>Data not found</td></tr>");
    }
  });
</script>
