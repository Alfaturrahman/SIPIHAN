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
    style="display:none;z-index:2;width:20%;min-width:300px" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button">Tutup Menu</a>
    <a href="home_admin.php" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fas fa-home"></i> Beranda</a>
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
          <li><button class="dropdown-item" type="button"><b>Halo,<?php echo $_SESSION['username']?></b></button></li>
          <li><a class="dropdown-item" type="button" href="ganti-pass_admin.php">Ganti Password</a></li>
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
    <?php
    
              if (isset($_GET['ganti'])) {
                if ($_GET['ganti'] == "berhasil") {
                  echo '<div class="alert alert-primary alert-dismissible fade show row-4 text-center ms-3" role="alert" id="message">';
                    echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                      echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                    echo '</svg>';
              echo 'Ganti Password Berhasil!';
                  echo '</div>';
                  echo "<script>
                  setTimeout(function() {
                      document.getElementById('message').style.display='none';
                  }, 3000);
              </script>";
          }
        
                }
              if (isset($_GET['gagal'])) {
                  if ($_GET['gagal'] == "tidak_sama") {
                    echo '<div class="alert alert-danger alert-dismissible fade show row-4 text-center ms-3" role="alert" id="message">';
                      echo '<svg xmlns="http://www.w3.org/2000/svg" class="bi bi-info-fill flex-shrink-0 me-2" viewBox="0 0 16 16" style="height: 1em; width: 1em; vertical-align: -0.125em;" role="img" aria-label="Warning:">';
                        echo '<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>';
                      echo '</svg>';
                echo 'Ganti Password Gagal';
                    echo '</div>';
                    echo "<script>
                    setTimeout(function() {
                        document.getElementById('message').style.display='none';
                    }, 3000);
                </script>";
            }
          
                  }
          
          ?>
    <div class="container">
      <form action="proses_ubah_pw_admin.php" method="POST">
        <label for="inputPassword3" class="col-form-label">NIM</label>
        <input type="text" name="username" class="form-control col-3" id="inputPassword3"
          value="<?php echo $_SESSION['username']; ?>" readonly>
        <label for="passwordlama" class="col-form-label">Password lama</label>
        <input type="password" class="form-control col-3" name="passwordlama" id="passwordlama" required>
        <label for="passwordbaru" class="col-form-label">Password Baru</label>
        <input type="password" class="form-control col-3" name="passwordbaru" id="passwordbaru" required>
        <label for="konfirmasipassword" class="col-form-label">Konfirmasi Password</label>
        <input type="password" class="form-control col-3" name="konfirmasipassword" id="konfirmasipassword" required>
        <br>
        <button type="submit" class="btn btn-danger float-start mb-2 mt-2">Kirim</button>
        <br>
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