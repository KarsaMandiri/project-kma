<?php
$page = 'br-masuk';
$page2 = 'br-masuk-reg';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

    <style>
        #table2 {
            cursor: pointer;
        }

        #table3 {
            cursor: pointer;
        }

        input[type="text"]:read-only {
            background: #e9ecef;
        }

        textarea[type="text"]:read-only {
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
        <!-- Loading -->
        <div class="loader loader">
            <div class="loading">
                <img src="img/loading.gif" width="200px" height="auto">
            </div>
        </div>
        <!-- ENd Loading -->
        <section>
            <!-- SWEET ALERT -->
            <div class="info-data" data-infodata="<?php if (isset($_SESSION['info'])) {
                                                        echo $_SESSION['info'];
                                                    }
                                                    unset($_SESSION['info']); ?>"></div>
            <!-- END SWEET ALERT -->
            <div class="container-fluid">
                <div class="card shadow p-3">
                    <?php
                    $id = base64_decode($_GET['id']);
                    $UUID = generate_uuid();
                    $month = date('m');
                    $year = date('y');
                    ?>
                    <form method="post" action="proses/proses-br-in-lokal.php" class="form">
                        <div class="row">
                            <input type="hidden" class="form-control" name="id_isi_inv_br_in_lokal" value="BR-lokal-<?php echo $year ?><?php echo $UUID ?><?php echo $month ?>">
                            <input type="hidden" class="form-control" name="id_inv_br_in_lokal" value="<?php echo $id ?>">
                            <div class="col-sm-6 mb-3">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="hidden" class="form-control" name="id_produk" id="idProduk">
                                <input type="text" class="form-control" name="nama_produk" id="namaProduk" placeholder="Pilih..." data-bs-toggle="modal" data-bs-target="#modalBarang" readonly>
                            </div>
                            <div class="col-sm-3 mb-3">
                                <label>Merk</label>
                                <input type="text" class="form-control" id="merkProduk" readonly>
                            </div>
                            <div class="col-sm-3 mb-3">
                                <label>Qty</label>
                                <input type="text" class="form-control" name="qty" id="qtyInput" disabled>
                            </div>
                            <input type="hidden" name="id_user" value="<?php echo $_SESSION['tiket_id'] ?>">
                            <input type="hidden" class="form-control" name="created" id="datetime-input">
                        </div>
                        <div class="text-end">
                            <button type="submit" name="simpan-isi-br-in-lokal" id="submitButton" class="btn btn-primary" disabled><i class="bx bx-save" style="color: white; font-size: 18px;"></i> Simpan Data</button>
                            <a href="barang-masuk-lokal.php?id=<?php echo $id ?>" class="btn btn-secondary"><i class="bi bi-arrow-left-square-fill" style="color: white; font-size: 18px;"></i> Tutup</a>
                        </div>
                    </form>
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

<!-- Generate UUID -->
<?php
function generate_uuid()
{
    return sprintf(
        '%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );
}
?>
<!-- End Generate UUID -->

<!-- Modal Barang -->
<div class="modal fade" id="modalBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Barang</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table2">
                        <thead>
                            <tr class="text-white" style="background-color: #051683;">
                                <td class="text-center p-3" style="width: 50px">No</td>
                                <td class="text-center p-3" style="width: 350px">Nama Produk</td>
                                <td class="text-center p-3" style="width: 100px">Merk</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            date_default_timezone_set('Asia/Jakarta');

                            include "koneksi.php";
                            $no = 1;
                            $sql = "SELECT pr.*,  
                        mr.*
                        FROM tb_produk_reguler as pr
                        LEFT JOIN tb_merk mr ON (pr.id_merk = mr.id_merk)
                        ";
                            $query = mysqli_query($connect, $sql);
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr data-idprod="<?php echo $data['id_produk_reg']; ?>" data-namaprod="<?php echo $data['nama_produk']; ?>" data-merkprod="<?php echo $data['nama_merk']; ?>" data-bs-dismiss="modal">
                                    <td class="text-center"><?php echo $no; ?></td>
                                    <td><?php echo $data['nama_produk']; ?></td>
                                    <td class="text-center"><?php echo $data['nama_merk']; ?></td>
                                </tr>
                                <?php $no++; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Barang -->

<script>
    // Fngsi Untuk membuat form input Qty menjadi enabled
    function enableQtyActual() {
        $('#qtyInput').prop('disabled', false);
    }

    // select Produk Reguler
    $(document).on('click', '#table2 tbody tr', function(e) {
        $('#idProduk').val($(this).data('idprod'));
        $('#namaProduk').val($(this).data('namaprod'));
        $('#merkProduk').val($(this).data('merkprod'));
        $('#modalBarang').modal('hide');

        // Aktifkan input qtyActual
        enableQtyActual();
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

<!-- Number Format -->
<script>
    $(document).on('input', '#qtyInput', function(e) {
        var qtyInput = $(this).val().replace(/\D/g, '');
        var qtyAwal = qtyInput ? parseInt(qtyInput) : 0;
        $(this).val(qtyAwal.toLocaleString('id-ID').replace(',', '.'));

        console.log(qtyAwal.toLocaleString('id-ID').replace(',', '.'));

        // mendapatkan tombol dengan id "submitButton"
        var submitButton = document.getElementById("submitButton");

        // memeriksa apakah nilai qty sudah diisi atau tidak
        if ($(this).val().trim() !== '' && parseInt($(this).val().replace(/\D/g, '')) > 0) {
            submitButton.disabled = false;
        } else {
            submitButton.disabled = true;
        }
    });
</script>