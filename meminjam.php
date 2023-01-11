<?php
// include database connection file
include 'config.php';

if (isset($_POST['pinjam'])){
  // get values from form
  $nim= $_POST['username'];
  $nama=$_POST['nama'];
  $kelas=$_POST['kelas'];
  $jumlah=$_POST['jumlah'];
  $keterangan=$_POST['keterangan'];
  $kode_barang=$_POST['kode_barang'];
  $hari=$_POST['hari'];
  $tanggal_peminjaman=$_POST['tanggal_peminjaman'];

   // validasi jumlah barang yang dipinjam
  $query = "SELECT stok FROM barang WHERE kode_barang = '$kode_barang'";
  $result = mysqli_query($db, $query);
  $item = mysqli_fetch_assoc($result);
  $available_quantity = $item['stok'];
  if ($jumlah > $available_quantity) {
    // redirect to pinjam.php with status=stok_tidak_cukup
    header("Location: barang.php?status=stok_tidak_cukup");
    exit;
  }

  // insert record into pengajuan table
  $sql= "INSERT INTO pengajuan(username,nama,kelas,jumlah,keterangan,kode_barang,hari,tanggal_peminjaman) VALUE ('$nim','$nama','$kelas','$jumlah','$keterangan','$kode_barang','$hari','$tanggal_peminjaman')";
  $query=mysqli_query($db,$sql);

  // if insert is successful, update stock
  if($query) {
    // update stock in barang table
    $sql1= "UPDATE barang SET stok = stok - $jumlah where kode_barang = '$kode_barang' ";
    $query1 = mysqli_query($db, $sql1);
    // redirect to pinjam.php with status=sukses
    header("Location: pinjam.php?status=berhasil");
  } else {
    // redirect to pinjam.php with status=gagal
    header("Location: pinjam.php?status=gagal");
  }
} else {
  die("Akses dilarang...");
}
?>
