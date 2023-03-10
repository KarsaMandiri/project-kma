<?php
    session_start();// memulai sebuah sesi

    include "koneksi.php";

    if (isset($_POST['login'])) {
        // Ambil data dari formulir login
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query untuk mencari data user dari database
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($connect, $query);

        // Periksa apakah username ditemukan
        if (mysqli_num_rows($result) == 1) {
          // Ambil data password dari database
          $row = mysqli_fetch_assoc($result);
          $password_hash = $row['password'];

          // Verifikasi password
          if (password_verify($password, $password_hash)) {
            // Password benar, simpan data user ke session dan arahkan ke halaman dashboard
            //ambil data dari nama kolom operator
            $_SESSION['tiket_id'] = $row['id_user'];
            $_SESSION['tiket_user'] = $row['username'];
            $_SESSION['tiket_pass'] = $row['password'];
            $_SESSION['tiket_nama'] = $row['nama_user'];
            $_SESSION['tiket_role'] = $row['id_user_role'];
            $_SESSION['tiket_jenkel'] = $row['jenkel'];
            header("Location: index.php");
          } else {
            // Password salah, kembali ke halaman login
            header("Location: login.php?gagal");
          }
        } else {
          // Username tidak ditemukan, kembali ke halaman login
          header("Location: login.php?gagal");
        }
    }
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
                    <h5 class="card-title text-center pb-0 fs-4">LOGIN INVENTORY</h5>
                  </div>
                  <?php 
                      if (isset($_GET["gagal"])) {?>
                          <div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong><i class="bi bi-info-circle-fill"></i></strong> Periksa kembali ussername dan password anda.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                  <?php } ?>
                  <form action="" method="POST" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control form-control" placeholder="Masukan username" required>
                        <div class="invalid-feedback">Please enter your username!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control form-control form-password" placeholder="Masukan password" required> 
                      <div class="invalid-feedback">Please enter your password!</div>
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
                      <input type="submit" class="btn btn-primary w-100" name="login" value="Login">
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Belum punya akun? <a href="registrasi-user.php">Buat akun</a></p>
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