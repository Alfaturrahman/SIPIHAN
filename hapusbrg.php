<?php

include("config.php");

if( isset($_GET['kode_barang']) ){

    // ambil id dari query string
    $kodebarang = $_GET['kode_barang'];

    // buat query hapus
    $sql = "DELETE FROM barang WHERE kode_barang='$kodebarang'";
    $query = mysqli_query($db, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: barang_admin.php?status=hapus');
    } else {
        header('Location: barang_admin.php?status=salah');
    }

} else {
    die("akses dilarang...");
}

?>