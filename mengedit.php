<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $lokasi = $_POST['lokasi'];
    $foto = $_POST['foto'];
    $stok = $_POST['stok'];
   

    //

    $cekbarang = "SELECT * from barang where kode_barang = '$kode_barang'";

    $querycekbarang = mysqli_query($db, $cekbarang);

    $count = mysqli_num_rows($querycekbarang);

    if ($count >= 1) {

        $updatebarang = "UPDATE barang set nama_barang = '$nama_barang',lokasi='$lokasi',foto='$foto',stok='$stok' where kode_barang = '$kode_barang'";

        $updatequery = mysqli_query($db, $updatebarang);

        if ($updatequery) {

            header("Location:barang_admin.php?status=berhasil");

        }

    }
}
?>