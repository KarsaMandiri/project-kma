<?php
    date_default_timezone_set('Asia/Jakarta');
    $UUID = generate_uuid();        
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
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="pt-2 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                  </div>
                  <form action="proses/proses-user.php" class="row g-3 needs-validation" method="POST">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama Lengkap</label>
                      <input type="hidden" name="id_user" class="form-control" value="USER<?php echo $UUID ?>">
                      <input type="text" name="nama_lengkap" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Silahkan isi nama lengkap!</div>
                    </div>

                    <div class="col-12">
                      <label for="jenkel" class="form-label">Jenis Kelamin</label>
                      <select class="selectize-js form-select" name="jenkel" required>
                        <option value="">Pilih...</option>    
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                      <div class="invalid-feedback">Silahkan isi Jenis Kelamin!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">E-mail</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Silahkan isi email anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Role</label>
                      <div class="input-group has-validation">
                        <select class="selectize-js form-select" name="role" required>
                          <option value="">Pilih...</option>     
                          <?php 
                            include "koneksi.php";
                            $sql = "SELECT * FROM user_role ";
                            $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
                            while ($data = mysqli_fetch_array($query)){?>
                              <option value="<?php echo $data['id_user_role']; ?>"><?php echo $data['role']; ?></option>
                          <?php } ?>
                        </select>
                      <div class="invalid-feedback">Silahkan isi role user!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Nama user</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Silahkan isi nama user!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control form-control form-password" required>
                      <input type="hidden" class="form-control" name="created" value="<?php echo date('d/m/Y, G:i') ?>">
                      <div class="invalid-feedback">Silahkan isi password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input me-2 form-checkbox" type="checkbox" value="" id="form2Example3" />
                        <label class="form-check-label" for="form2Example3">
                        Lihat password
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="simpan-user">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun? <a href="login.php">Login</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->
  <?php include "page/script.php" ?>
</body>
</html>

<!-- UUID -->
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
<!-- End UUID -->

<script type="text/javascript">
    $(document).ready(function(){       
        $('.form-checkbox').click(function(){
            if($(this).is(':checked')){
                $('.form-password').attr('type','text');
            }else{
                $('.form-password').attr('type','password');
            }
        });
    });       
</script>





