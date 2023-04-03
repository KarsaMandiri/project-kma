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
  <style>
     input[type="text"]:read-only {
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
    <section>
      <div class="container-fluid">
        <div class="card">
          <div class="card-header text-center">
            <h4>Tambah Data Produk Set Marwa</h4>
          </div>
          <div class="card-body p-3">
            <form action="proses/proses-produk-set-marwa.php" method="POST">
              <?php 
                  $UUID = generate_uuid();
              ?>
              <div class="mb-3">
                  <label class="form-label"><strong>Kode Produk Set</strong></label>
                  <input type="hidden" class="form-control" name="id_set_marwa" value="SETMRW<?php echo $UUID; ?>">
                  <input type="text" class="form-control" name="kode_barang" required>
              </div>
              <div class="mb-3">
                  <label class="form-label"><strong>Nama Produk Set</strong></label>
                  <input type="text" class="form-control" name="nama_set_marwa" required>
              </div>
              <div class="mb-3">
                <div class="row">
                  <div class="col-sm mb-3">
                    <label class="form-label"><strong>Lokasi Produk</strong></label>
                    <input type="hidden" class="form-control" name="id_lokasi" id="id_lokasi">
                    <input  type="text" class="form-control" name="lokasi" id="nama_lokasi" placeholder="Pilih..." data-bs-toggle="modal" data-bs-target="#modalLokasi" readonly>
                  </div>
                  <div class="col-sm mb-3">
                    <label class="form-label"><strong>No. Lantai</strong></label>
                    <input disabled type="text" class="form-control" name="no_lantai" id="no_lantai" readonly>
                  </div>
                  <div class="col-sm mb-3">
                    <label class="form-label"><strong>Area</strong></label>
                    <input disabled type="text" class="form-control" name="area" id="area" readonly>
                  </div>
                  <div class="col-sm">
                    <label class="form-label"><strong>No. Rak</strong></label>
                    <input disabled type="text" class="form-control" name="no_rak" id="no_rak" readonly>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <div class="row">
                  <div class="col-sm mb-3">
                    <label class="form-label"><strong>Merk</strong></label>
                    <select class="selectize-js form-select" name="merk" required>
                      <option value="">Pilih...</option>
                      <?php 
                          include "koneksi.php";
                          $sql = "SELECT * FROM tb_merk ";
                          $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
                          while ($data = mysqli_fetch_array($query)){?>
                      <option value="<?php echo $data['id_merk']; ?>"><?php echo $data['nama_merk']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-sm mb-3">
                    <label class="form-label"><strong>Harga Produk Set</strong></label>
                    <input type="text" class="form-control" name="harga" id="inputBudget" required>
                  </div>
                    <div class="col-sm">
                      <label class="form-label"><strong>Stok</strong></label>
                      <input type="text" class="form-control" name="stock" required>
                      <input type="hidden" class="form-control" name="id_user" value="<?php echo $_SESSION['tiket_id'] ?>" required>
                      <input type="hidden" class="form-control" name="created_date" id="datetime-input" required>
                    </div>
                  </div> 
                </div>
                <div class="mb-3 pt-3 text-end">
                    <button type="submit" name="simpan-set-marwa" class="btn btn-primary btn-md"><i class="bx bx-save"></i> Simpan Data</button>
                    <a href="data-produk-set-marwa.php" class="btn btn-secondary btn-md"><i class="bi bi-x"></i> Tutup</a>
                </div>
            </form>
        </div>  
    </section>
  </main><!-- End #main -->
  
  <!-- Modal SP -->
  <div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Tambah Data Produk Set</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
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

 <!-- Modal Lokasi -->
 <div class="modal fade" id="modalLokasi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Pilih Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card">
            <div class="card-body table-responsive mt-3">
                <table class="table table-bordered table-striped" id="table2">
                    <thead>
                      <tr class="text-white" style="background-color: #051683;">
                          <td class="text-center p-3" style="width: 80px">No</td>
                          <td class="text-center p-3" style="width: 200px">Lokasi</td>
                          <td class="text-center p-3" style="width: 200px">No. Lantai</td>
                          <td class="text-center p-3" style="width: 300px">Area</td>
                          <td class="text-center p-3" style="width: 150px">No. Rak</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        include "koneksi.php";
                        $no = 1;
                        $sql = "SELECT lp.*,  uc.nama_user as user_created, uu.nama_user as user_updated
                                FROM tb_lokasi_produk as lp
                                LEFT JOIN user uc ON (lp.id_user = uc.id_user)
                                LEFT JOIN user uu ON (lp.user_updated = uu.id_user)";
                        $query = mysqli_query($connect, $sql) OR DIE(mysqli_error($connect, $sql));
                        while($data = mysqli_fetch_array($query)){
                      ?>
                      <tr data-id="<?php echo $data['id_lokasi']; ?>" data-nama="<?php echo $data['nama_lokasi']; ?>" data-lantai="<?php echo $data['no_lantai']?>" data-area="<?php echo $data['nama_area']?>" data-rak="<?php echo $data['no_rak']; ?>" data-bs-dismiss="modal">
                        <td class="text-center"><?php echo $no;?></td>
                        <td class="text-center"><?php echo $data['nama_lokasi']; ?></td>
                        <td class="text-center"><?php echo $data['no_lantai']; ?></td>
                        <td class="text-center"><?php echo $data['nama_area']; ?></td>
                        <td class="text-center"><?php echo $data['no_rak']; ?></td>
                      </tr>
                      <?php $no++; ?>
                      <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Lokasi -->

<!-- Select Data -->
<script src="assets/js/select-data.js"></script>

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
    // Convert to a number and format with "Rp" prefix and "." and "," separator
    let formattedInput = Number(input).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    // Remove trailing ",00" if present
    formattedInput = formattedInput.replace(",00", "");
    // Update the input value with the formatted number
    inputBudget.value = formattedInput;
  });
</script>

<!-- Clock js -->
<script>
  function inputDateTime() {
    // Get current date and time
    let currentDate = new Date();

    // Format date and time as yyyy-mm-ddThh:mm:ss
    let year = currentDate.getFullYear();
    let month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
    let day = currentDate.getDate().toString().padStart(2, '0');
    let hours = currentDate.getHours();
    let minutes = currentDate.getMinutes().toString().padStart(2, '0');
    let seconds = currentDate.getSeconds().toString().padStart(2, '0');
    let formattedDateTime = `${day}/${month}/${year}, ${hours}:${minutes}`;

    // Set value of input field to current date and time
    document.getElementById("datetime-input").setAttribute('value', formattedDateTime);

  }

  // Call updateDateTime function every second
  setInterval(inputDateTime, 1000);
</script>
