<?php 
	session_start();
 
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
    style="display:none;z-index:2;width:20%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Tutup Menu</a>
    <a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Beranda</a>
    <a href="barang.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-list"></i> Daftar
      Barang</a>
    <a href="pinjam.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa-solid fa-computer"></i>
      Peminjaman</a>
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
          <li><button class="dropdown-item" type="button"><b>Halo,<?php echo $_SESSION['username']?></b></button></li>
          <li><a class="dropdown-item" type="button" href="ganti-pass.php">Ganti Password</a></li>
          <div class="dropdown-divider"></div>
          <li><a href="logout.php" class="dropdown-item" type="button" h>Logout</a></li>
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
    <p class="bg-color fs-4 text-center text-white mb-2">
      Selamat Datang Di SIPIHAN
    </p>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/g1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/g2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/g3.png" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
    <br>
    <p class="fs-4 ms-2 me2">Aplikasi peminjaman alat praktikum berbasis web ini merupakan terobosan baru untuk
      memecahkan
      masalah peminjaman
      alat secara manual. Aplikasi ini berfungsi untuk mendata peminjaman alat dan bahan praktikum untuk
      seluruh pengguna
      jurusan Informatika Politeknik Negeri Batam. Dalam aplikasi ini sudah terdapat data-data tentang
      alat dan bahan yang tersedia untuk peminjaman. </p>


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