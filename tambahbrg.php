<?php
include 'config.php';

if (isset($_POST['submit'])) {
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$lokasi=$_POST['lokasi'];
$foto=$_FILES['foto']['name'];
$stok=$_POST['stok'];
$ukuran_file=$_FILES['foto']['size'];
$x=explode('.', $foto);
$ekstensi=strtolower(end($x));
$ekstensi_diperbolehkan=array('jpg','png','jpeg');
$tmp_file=$_FILES['foto']['tmp_name'];
$path="fotobarang/".$foto;

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, "$path")) {
                $query = "INSERT INTO barang VALUES('$kode_barang','$nama_barang','$lokasi','$foto','$stok')";
                $sql = mysqli_query($db, $query);
                if ($sql) {
                    header("Location:barang_admin.php?pesan=berhasil");
                } else {
                    header("Location:home_admin.php?pesan=gagal");

                }
            }
        }
    }
}
?>
