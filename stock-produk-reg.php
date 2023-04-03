<?php
    $page = 'data';
    $page2 = 'data-stock-reg';
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
  <style>
  #gambarProduk {
    width: 500px;
    height: 600px;
    object-fit: contain;
    object-position: top;
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

    <div class="pagetitle">
      <h1>Stock Produk Reguler</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Stock Produk Reguler</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section>
      <!-- SWEET ALERT -->
      <div class="info-data" data-infodata="<?php if(isset($_SESSION['info'])){ echo $_SESSION['info']; } unset($_SESSION['info']); ?>"></div>
      <!-- END SWEET ALERT -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body p-3">
            <a href="tambah-stock-produk-reg.php" class="btn btn-primary btn-md"><i class="bi bi-plus-circle"></i> Tambah data stock produk</a>
            <div class="table-responsive mt-3">
              <table class="table table-striped table-bordered" id="table1">
                <thead>
                  <tr class="text-white" style="background-color: #051683;">
                    <td class="text-center p-3" style="width: 50px">No</td>
                    <td class="text-center p-3" style="width: 450px">Nama Produk</td>
                    <td class="text-center p-3" style="width: 100px">Merk</td>
                    <td class="text-center p-3" style="width: 80px">Stock</td>
                    <td class="text-center p-3" style="width: 50px">Aksi</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    date_default_timezone_set('Asia/Jakarta');
                    
                    include "koneksi.php";
                    $no = 1;
                    $sql = "SELECT * FROM stock_produk_reguler AS spr
                            LEFT JOIN tb_produk_reguler AS tpr ON (spr.id_produk_reg = tpr.id_produk_reg)
                            LEFT JOIN tb_merk AS tm ON (tm.id_merk = tpr.id_merk)
                            ";
                    $query = mysqli_query($connect, $sql);
                    while($data = mysqli_fetch_array($query)){
                  ?>
                  <tr>
                    <td class="text-center"><?php echo $no; ?></td>
                    <td><?php echo $data['nama_produk']; ?></td>
                    <td class="text-center"><?php echo $data['nama_merk']; ?></td>
                    <td class="text-end"><?php echo $data['stock']; ?></td>
                    <td class="text-center">
                      <a href="proses/proses-stock-reg.php?hapus-stock-reg=<?php echo $data['id_stock_prod_reg']?>" class="btn btn-sm btn-danger delete-data"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <?php $no++; ?>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
 <!-- Modal Detail -->
 <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-body">
         <div class="card">
          <div class="card-header text-center"><h4><strong>Detail Produk Reguler</strong></h4></div>
          <div class="card-body p-3">
            <div class="row">
              <div class="col-5">
                <img alt="Gambar Produk" id="gambarProduk" class="img-fluid">
              </div>
              <div class="col-7">
                <table class="table table-bordered table-striped">
                  <tr>
                    <td>Kode Produk</td>
                    <td id="kodeProduk"></td>
                  </tr>
                  <tr>
                    <td>No Izin Edar</td>
                    <td id="izinEdar"></td>
                  </tr>
                  <tr>
                    <td>Nama Produk</td>
                    <td id="namaProduk"></td>
                  </tr>
                  <tr>
                    <td>Merk Produk</td>
                    <td id="merkProduk"></td>
                  </tr>
                  <tr>
                    <td>Harga Produk</td>
                    <td id="hargaProduk"></td>
                  </tr>
                  <tr>
                    <td>Kategori Produk</td>
                    <td id="katProduk"></td>
                  </tr>
                  <tr>
                    <td>Kategori Penjualan</td>
                    <td id="katPenjualan"></td>
                  </tr>
                  <tr>
                    <td>Kategori Penjualan</td>
                    <td id="katGrade"></td>
                  </tr>
                  <tr>
                    <td>Lokasi Produk</td>
                    <td id="katLokasi"></td>
                  </tr>
                  <tr>
                    <td>No. Lantai</td>
                    <td id="lantaiLokasi"></td>
                  </tr>
                  <tr>
                    <td>Area</td>
                    <td id="areaLokasi"></td>
                  </tr>
                  <tr>
                    <td>No. Rak</td>
                    <td id="rakLokasi"></td>
                  </tr>
                  <tr>
                    <td>Dibuat Tanggal</td>
                    <td id="created"></td>
                  </tr>
                  <tr>
                    <td>Dibuat Oleh</td>
                    <td id="userCreated"></td>
                  </tr>
                  <tr>
                    <td>Diubah Tanggal</td>
                    <td id="updated"></td>
                  </tr>
                  <tr>
                    <td>Diubah Oleh</td>
                    <td id="userUpdated"></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end modal detail -->

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

<?php 
  function format_rupiah($angka){
    $rupiah = "Rp " . number_format($angka,0,',','.');
    return $rupiah;
}
?>

<script>
  // delete button
  $("#table1").on("click", ".delete-button", function () {
    $(this).closest("tr").remove();
    if ($("#table1 tbody tr").length === 0) {
      $("#table1 tbody").append("<tr><td colspan='9' align='center'>Data not found</td></tr>");
    }
  });
</script>

<script>
  $(document).ready(function() {
  $('.btn-detail').click(function() {
    var kodeProduk = $(this).data('kode-produk');
    var izinEdar = $(this).data('izin-edar');
    var namaProduk = $(this).data('nama-produk');
    var merkProduk = $(this).data('merk-produk');
    var hargaProduk = $(this).data('harga-produk');
    var katProduk = $(this).data('kategori-produk');
    var katPenjualan = $(this).data('kategori-penjualan');
    var katGrade = $(this).data('grade-produk');
    var katLokasi = $(this).data('lokasi-produk');
    var lantaiLokasi = $(this).data('lantai-produk');
    var areaLokasi = $(this).data('area-produk');
    var rakLokasi = $(this).data('rak-produk');
    var gambarProduk = $(this).data('gambar-produk');
    var created = $(this).data('created-produk');
    var userCreated = $(this).data('user-created');
    var updated = $(this).data('updated-produk');
    var userUpdated = $(this).data('user-updated');

    $('#kodeProduk').html(kodeProduk);
    $('#izinEdar').html(izinEdar);
    $('#namaProduk').html(namaProduk);
    $('#merkProduk').html(merkProduk);
    $('#hargaProduk').html(hargaProduk);
    $('#katProduk').html(katProduk);
    $('#katPenjualan').html(katPenjualan);
    $('#katGrade').html(katGrade);
    $('#katLokasi').html(katLokasi);
    $('#lantaiLokasi').html(lantaiLokasi);
    $('#areaLokasi').html(areaLokasi);
    $('#rakLokasi').html(rakLokasi);
    $('#gambarProduk').attr('src', 'gambar/upload-marwa/' + gambarProduk);
    $('#created').html(created);
    $('#userCreated').html(userCreated);
    $('#updated').html(updated);
    $('#userUpdated').html(userUpdated);

    $('#modalDetail').modal('show');
  });
});
</script>
