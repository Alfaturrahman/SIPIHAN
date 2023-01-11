<?php session_start();
 
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
   header("location:index.php?pesan=gagal");
 }

 ?>
<!DOCTYPE html>
<html>

<head>
    <title>SIPIHAN V.3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="style/style01.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/resposive.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Karma", sans-serif
        }

        .w3-bar-block .w3-bar-item {
            padding: 20px
        }
    </style>
</head>

<body>

    <!-- Sidebar (hidden by default) -->
    <nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left"
        style="display:none;z-index:2;width:25%;min-width:300px" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Tutup Menu</a>
        <a href="home_admin.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-home"></i>
            Beranda</a>
        <a href="barang_admin.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-list"></i>
            Daftar Barang</a>
        <a href="pengajuan_admin.php" onclick="w3_close()" class="w3-bar-item w3-button"><i
                class="fa-solid fa-computer"></i> Daftar Pengajuan</a>
        <a href="pengembalian_admin.php" onclick="w3_close()" class="w3-bar-item w3-button"><i
                class="fa-solid fa-arrow-right-arrow-left"></i> Daftar Pengembalian</a>
        <a href="peminjaman_admin.php" onclick="w3_close()" class="w3-bar-item w3-button"><i
                class="fa-solid fa-list-check"></i> Daftar Peminjaman</a>
    </nav>

    <!-- Top menu -->
    <div class="w3-top bg-color text-white">
        <div class="bg-color w3-xlarge" style="max-width:1200px;margin:auto">
            <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
            <div class="btn-group me-3 w3-right w3-padding-16">
                <button type="button" class="btn btn-pink dropdown-toggle text-white" data-bs-toggle="dropdown"
                    data-bs-display="static" aria-expanded="true">
                    <i class="fa-sharp fa-solid fa-user"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="static">
                    <li><button class="dropdown-item"
                            type="button"><b>Halo,<?php echo $_SESSION['username']?></b></button></li>
                    <li><a class="dropdown-item" type="button" href="ganti-pass_admin.php">Ganti Password</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a href="index.php" class="dropdown-item" type="button" h>Logout</a></li>
                </ul>
            </div>
            <div class="w3-center w3-padding-16">
                <a class="navbar-brand ms-3">
                    <img src="img/SIPIHAN F.png" height="45px" href="#"></a>
            </div>
        </div>
    </div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
        <div class="container mt-3">
            <h2 class="text-center">DAFTAR PENGEMBALIAN</h2>
            
            <a href="home_admin.php" type="button" class="btn btn-danger">Kembali</a>
            <p></p>
            <table class="table table-striped table-responsive-md">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>kode_barang</th>
                        <th>Hari</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- TABEL PENGEMBALIAN -->
                    <?php
include 'config.php'; $no = 1;
$sql = "SELECT * FROM pengajuan where status_pengajuan = 'Terima'";
$query = mysqli_query($db, $sql);
while ($form = mysqli_fetch_assoc($query)) {
echo "<tr>";
?>

                    <tr>
                        <td><?php echo $form['username'];?></td>
                        <td><?php echo $form['nama'];?></td>
                        <td><?php echo $form['kelas'];?></td>
                        <td><?php echo $form['jumlah'];?></td>
                        <td><?php echo $form['keterangan'];?></td>
                        <td><?php echo $form['kode_barang'];?></td>
                        <td><?php echo $form['hari'];?></td>
                        <td><?php echo $form['tanggal_peminjaman'];?></td>
                        <td>
                            <form action="update_pengembalian.php" method="POST">
                                <input type="hidden" name="no_form" value="<?php echo $form['no_form']; ?>">
                                <select name="status_pengajuan">
                                    <option value="Belum Dikembalikan">Belum Dikembalikan</option>
                                    <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
                                </select>
                        </td>
                        <td><input type="submit" name="submit" value="KIRIM"></td>
                        </form>

                        <?php 
}
?>
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <footer class="w3-row-padding w3-padding-32">
            <div class="w3-third">
                <h5>© 2022 TRPL B PAGI KELOMPOK 3</h5>
            </div>

        </footer>

        <!-- End page content -->
    </div>


    <script src="script/script.js"></script>

</body>

</html>