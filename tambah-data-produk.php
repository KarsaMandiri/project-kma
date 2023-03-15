<?php
    $page = 'data';
    $page2 = 'data-produk';
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
    #table2{
      cursor: pointer;
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
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Data Produk</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section>
        <div class="container">
            <div class="card">
                <div class="card-header text-center">
                    <h5>Form Tambah Data Produk</h5>
                </div>
                 <div class="card-body">
                    <form action="proses/proses-produk.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                        <?php 
                            $UUID = generate_uuid();
                        ?>
                        <div class="mb-3">
                            <label class="form-label"><strong>Kode Produk</strong></label>
                            <input type="hidden" class="form-control" name="id_produk" value="BR-REG<?php echo $UUID; ?>">
                            <input type="text" class="form-control" name="kode_barang" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"><strong>Nama Produk</strong></label>
                            <input type="text" class="form-control" name="nama_barang" required>
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
                            <div class="col-sm">
                              <label class="form-label"><strong>Harga Produk</strong></label>
                              <input type="text" class="form-control" name="harga" id="inputBudget" required>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                              <div class="col-sm mb-3">
                                <label class="form-label"><strong>Lokasi Produk</strong></label>
                                <input type="hidden" class="form-control" name="lokasi" id="id_lokasi">
                                <input type="text" class="form-control" name="lokasi" id="nama_lokasi" placeholder="Pilih..." data-bs-toggle="modal" data-bs-target="#modal2" readonly>
                              </div>
                              <div class="col-sm mb-3">
                                <label class="form-label"><strong>No. Lantai</strong></label>
                                <input type="text" class="form-control" name="no_lantai" id="no_lantai" readonly>
                              </div>
                              <div class="col-sm mb-3">
                                <label class="form-label"><strong>Area</strong></label>
                                <input type="text" class="form-control" name="area" id="area" readonly>
                              </div>
                              <div class="col-sm">
                                <label class="form-label"><strong>No. Rak</strong></label>
                                <input type="text" class="form-control" name="no_rak" id="no_rak" readonly>
                              </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                              <div class="col-sm mb-3">
                                <label class="form-label"><strong>Kategori Produk</strong></label>
                                <select class="selectize-js form-select" name="kategori_produk" required>
                                <option value="">Pilih...</option>
                                <?php 
                                    include "koneksi.php";
                                    $sql = "SELECT * FROM tb_kat_produk 
                                            LEFT JOIN tb_merk ON (tb_kat_produk.id_merk = tb_merk.id_merk)
                                            ORDER BY nama_kategori ASC";
                                    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
                                    while ($data = mysqli_fetch_array($query)){?>
                                    <option value="<?php echo $data['id_kat_produk']; ?>"><?php echo $data['nama_merk']; ?> - <?php echo $data['nama_kategori']; ?></option>
                                <?php } ?>
                                </select>
                              </div>
                              <div class="col-sm">
                                <label class="form-label"><strong>Kategori Penjualan</strong></label>
                                <select class="selectize-js form-select" name="kategori_penjualan" required>
                                <option value="">Pilih...</option>
                                <?php 
                                    include "koneksi.php";
                                    $sql = "SELECT * FROM tb_kat_penjualan ";
                                    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
                                    while ($data = mysqli_fetch_array($query)){?>
                                    <option value="<?php echo $data['id_kat_penjualan']; ?>"><?php echo $data['nama_kategori']; ?></option>
                                <?php } ?>
                                </select>
                              </div>
                              <div class="col-sm">
                                <label class="form-label"><strong>Grade Produk</strong></label>
                                <select class="selectize-js form-select" name="kategori_penjualan" required>
                                <option value="">Pilih...</option>
                                <?php 
                                    include "koneksi.php";
                                    $sql = "SELECT * FROM tb_produk_grade ";
                                    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
                                    while ($data = mysqli_fetch_array($query)){?>
                                    <option value="<?php echo $data['id_grade']; ?>"><?php echo $data['nama_grade']; ?></option>
                                <?php } ?>
                                </select>
                              </div>
                            </div>
                        </div>
                        <div class="mb-3 col-sm-6">
                          <div class="input-group">
                            <input class="form-control" type="file" id="formFile" accept="image/*" onchange="compressImage(event)">
                            <label class="input-group-text bg-danger text-white" onclick="resetForm()">Reset</label>
                          </div>
                        </div>
                        <div class="preview-image">
                          <img id="imagePreview" src="#" alt="Preview Image" style="display:none;">
                        </div>
                        <input type="hidden" class="form-control" name="id_user" value="<?php echo $_SESSION['tiket_id']; ?>">
                        <input type="hidden" class="form-control" name="created" id="datetime-input">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="simpan-produk" class="btn btn-primary btn-md m-1"><i class="bx bx-save"></i> Simpan Data</button>
                        <button type="button" class="btn btn-secondary btn-md m-1" data-bs-dismiss="modal"><i class="bi bi-x"></i> Tutup</button>
                    </div>
                    </form>
                 </div>
            </div>
        </div>
    </section>
  </main><!-- End #main -->
 
  <!-- Modal Lokasi -->
  <div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Pilih Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card">
            <div class="card-body mt-3">
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
                            date_default_timezone_set('Asia/Jakarta');
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

  <!-- Modal Gambar -->
  <div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Pilih Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="card">
            <div class="card-body mt-3">
              <div class="input-group">
                <input class="form-control" type="file" id="formFile" accept="image/*" onchange="compressImage(event)">
                <label class="input-group-text bg-danger text-white" onclick="resetForm()">Reset</label>
              </div>
              
              <div class="mt-3">
                <button id="formFile" onchange="compressImage(event)">Compress</button>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Gambar -->

  <!-- Footer -->
  <?php include "page/footer.php" ?>
  <!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php include "page/script.php" ?>
</body>
</html>

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

<!-- select data -->
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

<!-- Script untuk menjalankan fungsi previewImage() dan resetForm() -->
<script>
  function compressImage() {
  var file = document.querySelector('#formFile').files[0];
  var reader = new FileReader();

  reader.onload = function() {
    var img = new Image();
    img.src = reader.result;

    img.onload = function() {
      var canvas = document.createElement('canvas');
      var ctx = canvas.getContext('2d');
      var maxWidth = 650;
      var maxHeight = 650;
      var width = img.width;
      var height = img.height;

      // Calculate new dimensions
      if (width > height) {
        if (width > maxWidth) {
          height *= maxWidth / width;
          width = maxWidth;
        }
      } else {
        if (height > maxHeight) {
          width *= maxHeight / height;
          height = maxHeight;
        }
      }

      // Set canvas dimensions
      canvas.width = width;
      canvas.height = height;

      // Compress image
      ctx.drawImage(img, 0, 0, width, height);
      canvas.toBlob(function(blob) {
        // Get compressed file size
        var compressedSize = blob.size;
        console.log('Compressed file size:', compressedSize);

        // Get original file size
        var originalSize = file.size;
        console.log('Original file size:', originalSize);

        // Set compressed image preview
        var preview = document.querySelector('#imagePreview');
        preview.src = URL.createObjectURL(blob);
        preview.style.display = 'block';
        preview.style.width = '300px';
        preview.style.height = '300px';
      }, file.type);
    };
  };

  if (file) {
    reader.readAsDataURL(file);
  }
}

function resetForm() {
  document.getElementById('formFile').value = '';
  var preview = document.querySelector('#imagePreview');
  preview.style.display = 'none';
  preview.src = '#';
}


</script>
