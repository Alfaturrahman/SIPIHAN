<?php

session_start();
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($db,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
    $data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="laboran"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "laboran";
		// alihkan ke halaman dashboard admin
		header("location:home_admin.php");
 
        }else if($data['level']=="mahasiswa"){
 
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "mahasiswa";
            // alihkan ke halaman dashboard admin
            header("location:home.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>