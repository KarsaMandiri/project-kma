<?php
    session_start();// memulai sebuah sesi

    include "koneksi.php";

    if (isset($_POST['login'])) {
        //maka kirimkan hasil inputan dari user
        //kemudian dengan username dan password yang ada di database

        $us = $_POST['user'];
        $ps = md5($_POST['pass']);

        //cocokan dengan kolom yang ada di tabel user
        $sql = "SELECT * FROM tb_user WHERE username='$us' AND password='$ps'";
        $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));

        //tarik data dari database
        $data = mysqli_fetch_array($query);

        //cek jika ada data atau record
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['tiket_user'] = $data['username'];//di ambil dari nama kolom operator
            $_SESSION['tiket_pass']  = $data['password'];
            $_SESSION['tiket_nama']  = $data['nama'];
            $_SESSION['tiket_level'] = $data['level'];
            $_SESSION['tiket_jenkel'] = $data['jenis_kelamin'];

            //arahkan ke halaman index.php
            header("location: index.php");
        }else{
            //error atau gagal login
            header("location: login.php?gagal");
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
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                  </div>
                  <form class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Silahkan isi nama lengkap!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Silahkan isi email anda!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Role</label>
                      <div class="input-group has-validation">
                        <select class="selectize-js form-select" name="role" required>
                          <?php 
                            include "koneksi.php";
                            $sql = "SELECT * FROM user_role ";
                            $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
                            while ($data = mysqli_fetch_array($query)){?>
                              <option value="<?php echo $data['id_user_role']; ?>"><?php echo $data['role']; ?></option>
                          <?php } ?>
                        </select>
                      <div class="invalid-feedback">Silahkan isi nama user!</div>
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
                      <input type="password" name="pass" class="form-control form-control form-password" placeholder="Masukan password" required> 
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
                      <button class="btn btn-primary w-100" type="submit" name="buat-akun">Buat Akun</button>
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