<?php
    $page = 'data';
    $page2 = 'data-produk';
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
          <li class="breadcrumb-item active">Data Produk</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section>
      <div class="container-fluid">
        <div class="card">
          <div class="card-header text-center">
            <h4>Data Produk</h4>
          </div>
          <div class="card-body p-3">
            <form>
              <a href="#" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#modal1"><i class="bi bi-plus-circle"></i> Tambah data produk</a>
              <a href="#" class="btn btn-warning btn-md"><i class="bi bi-pencil"></i> Edit produk</a>
              <a href="#" class="btn btn-danger btn-md"><i class="bi bi-trash"></i> Hapus produk</a>
              <div class="table-responsive mt-3">
                <table class="table table-striped table-bordered" id="table1">
                  <thead>
                    <tr class="text-white" style="background-color: #051683;">
                      <td class="text-center">Pilih</td>
                      <td class="text-center p-3">No</td>
                      <td class="text-center p-3">Kode Produk</td>
                      <td class="text-center p-3">Nama Produk</td>
                      <td class="text-center p-3">Merk</td>
                      <td class="text-center p-3">Harga</td>
                      <td class="text-center p-3">Lokasi Produk</td>
                      <td class="text-center p-3">Kategori Produk</td>
                      <td class="text-center p-3">Kategori Penjualan</td>
                      <td class="text-center p-3">Stok</td>
                      <td class="text-center p-3">Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-center"><input type="checkbox" class="checkbox"></td>
                      <td class="text-center">1</td>
                      <td>BR001</td>
                      <td>DF 14 </td>
                      <td class="text-center">Marwa</td>
                      <td class="text-end">7.500</td>
                      <td class="text-center">2-20</td>
                      <td class="text-center">Surgical Instrument</td>
                      <td class="text-center">Super Fast Market</td>
                      <td class="text-center">100</td>
                      <td class="text-center">
                        <div class="dropdown">
                          <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#info-produk<?php echo $data['id_barang_fast']?>">Detail</a></li>
                            <li><a href="#" class="dropdown-item">Edit</a></li>
                            <li><a href="#" class="dropdown-item">Hapus</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </form>
            <!-- start modal detail -->
            <?php
                include "koneksi.php";

                //Menampilkan Data
                $sql = "SELECT * FROM tb_barang_fast
                ORDER BY id_barang_fast ";
                $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));

                $no = 1;

                while ($data = mysqli_fetch_array($query)){ ?> 
            <div class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" id="info-produk<?php echo $data['id_barang_fast']?>">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="col-12 modal-title text-center"> INFORMASI PRODUK</h4>
                        </div>
                        <div class="modal-body">
                            <?php
                                //Menampilkan Data
                                $id = $data['id_barang_fast'];
                                $query_detail = mysqli_query($connect, "SELECT * FROM tb_barang_fast WHERE id_barang_fast='$id'");
                                while ($data = mysqli_fetch_array($query_detail)) {  ?>
                            <table class="table table-striped table-bordered" style="border: 2px solid white;">
                                <tr>
                                    <td style="width: 200px;">Kode Barang</td>
                                    <td><?php echo $data['kode_barang']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">Nama Produk</td>
                                    <td><?php echo $data['nama_barang']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">Merk</td>
                                    <td><?php echo $data['merk']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">Harga</td>
                                    <td>Rp. <?php echo number_format ($data['harga'],0,',','.'); ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">Lokasi Barang</td>
                                    <td><?php echo $data['lokasi_barang']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">Kategori Produk</td>
                                    <td><?php echo $data['kategori_barang']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">Kategori Penjualan</td>
                                    <td><?php echo $data['kategori_penjualan']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">Stock Produk</td>
                                    <td><?php echo $data['stock']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">Created</td>
                                    <td><?php echo $data['created']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">Tanggal Updated</td>
                                    <td><?php echo $data['tgl_update']; ?></td>
                                </tr>
                                <tr>
                                    <td style="width: 200px;">User Update</td>
                                    <td><?php echo $data['user']; ?></td>
                                </tr>
                                <?php } ?>
                            </table>                   
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Close</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- end modal Detail -->
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
          <h1 class="modal-title fs-5">Tambah Data Produk</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="proses/proses-produk.php" method="POST">
          <div class="modal-body">
            <div class="mb-3">
              <?php 
                  $UUID = generate_uuid();
              ?>
              <div class="mb-3">
                <label class="form-label"><strong>Kode Produk</strong></label>
                <input type="hidden" class="form-control" name="id_produk" value="BR<?php echo $UUID; ?>">
                <input type="text" class="form-control" name="kode_barang" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><strong>Nama Produk</strong></label>
                <input type="text" class="form-control" name="nama_barang" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><strong>Merk</strong></label>
                <select class="selectize-js form-select" name="merk" required>
                  <?php 
                    include "koneksi.php";
                    $sql = "SELECT * FROM user_role ";
                    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
                    while ($data = mysqli_fetch_array($query)){?>
                      <option value="<?php echo $data['id_user_role']; ?>"><?php echo $data['role']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><strong>Harga Produk</strong></label>
                <input type="text" class="form-control" name="harga" id="inputBudget" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><strong>Lokasi Produk</strong></label>
                <input type="text" class="form-control" name="lokasi_produk" required>
              </div>
              <div class="mb-3">
                <label class="form-label"><strong>Kategori Produk</strong></label>
                <select class="selectize-js form-select" name="kategori_produk" required>
                  <?php 
                    include "koneksi.php";
                    $sql = "SELECT * FROM user_role ";
                    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
                    while ($data = mysqli_fetch_array($query)){?>
                      <option value="<?php echo $data['id_user_role']; ?>"><?php echo $data['role']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><strong>Kategori Penjualan</strong></label>
                <select class="selectize-js form-select" name="kategori_penjualan" required>
                  <?php 
                    include "koneksi.php";
                    $sql = "SELECT * FROM user_role ";
                    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
                    while ($data = mysqli_fetch_array($query)){?>
                      <option value="<?php echo $data['id_user_role']; ?>"><?php echo $data['role']; ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label"><strong>Stok</strong></label>
                <input type="text" class="form-control" name="stok" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="simpan-produk" class="btn btn-primary btn-md"><i class="bx bx-save"></i> Simpan Data</button>
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
      $("#table1 tbody").append("<tr><td colspan='9' align='center'>Data not found</td></tr>");
    }
  });
</script>

<!-- Format nominal Indo -->
<script>
  const inputBudget = document.getElementById('inputBudget');
  
  inputBudget.addEventListener('input', () => {
    // Remove any non-digit characters
    let input = inputBudget.value.replace(/[^\d]/g, '');
    // Convert to a number and format with "." separator
    let formattedInput = Number(input).toLocaleString('en-US');
    // Update the input value with the formatted number
    inputBudget.value = formattedInput;
  });
</script>
