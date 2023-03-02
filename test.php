<table class="table table-bordered">
    <thead>
        <tr>
            <td class="text-center col-2">Kode Barang</td>
            <td class="text-center col-6">Nama Barang</td>
            <td class="text-center col-2">Lokasi Barang</td>
            <td class="text-center col-4">Harga</td>
        </tr>
    </thead>
    <tbody>
        <?php
            date_default_timezone_set('Asia/Jakarta');
            include "koneksi.php";  
            $ide = $_POST['hapus_id'];
            foreach ($ide as $id) { 
            $sql = mysqli_query($connect," SELECT * FROM tb_barang_fast WHERE id_barang_fast = '$id' ");
            while($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td>
                <input type="hidden" name="id[]" value="<?php echo $data['id_barang_fast'] ?>">
                <input type="text" class="form-control" name="kode_barang[]" value="<?php echo $data['kode_barang'];?>" readonly>     
            </td>
            <td>
                <input type="text" class="form-control" name="nama_barang[]" value="<?php echo $data['nama_barang'];?>">
            </td>
            <td>
                <input type="text" class="form-control" name="lokasi_barang[]" value="<?php echo $data['lokasi_barang'];?>">
            </td>
            <td>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Rp.</div>
                    </div>
                    <input type="text" name="harga[]" class="form-control text-right" value="<?php echo $data['harga']; ?>">
                    <input type="hidden" name="user[]" class="form-control" value="<?php echo ucfirst($_SESSION ['tiket_nama']);?>" readonly>
                    <input type="hidden" name="tgl_update[]" class="form-control" value="<?php echo date('d-m-y (G:i:s)'); ?>" readonly>
                </div>
            </td>
        </tr>
    </tbody>
        <?php } } ?>
</table>
<script>
    function gfg_check_duplicates() {
        var myarray = [];
        for (i = 0; i < 4; i++) {
            myarray[i] = 
            document.getElementById("nama_barang" + i).value;
                }
            for (i = 0; i < 4; i++) {
            for (j = i + 1; j < 4; j++) {
                if (i == j || myarray[i] == "" || myarray[j] == "") 
                    continue;
                    if (myarray[i] == myarray[j]) {
                    document.getElementById("status" + i)
                        .innerHTML = "duplicated values!";
                    document.getElementById("status" + j)
                    .innerHTML = "duplicated values!";
                        }
                    }
                }
            }
</script>