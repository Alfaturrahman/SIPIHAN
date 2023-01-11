<?php

include 'config.php';

$passwordlama = $_POST['passwordlama'];
$passwordbaru = $_POST['passwordbaru'];
$konfirmasipassword = $_POST['konfirmasipassword'];
$username = $_POST['username'];

$cekuser = "SELECT * from user where username = '$username' and password = '$passwordlama'";
$querycekuser = mysqli_query($db, $cekuser);
$count = mysqli_num_rows($querycekuser);

if ($count >= 1) {
    if ($passwordbaru == $konfirmasipassword) {
        $updatepassword = "UPDATE user set password = '$passwordbaru' where username = '$username'";
        $updatequery = mysqli_query($db, $updatepassword);
        if ($updatequery) {
            echo "Password telah diganti menjadi $passwordbaru";
            header("location:ganti-pass_admin.php?ganti=berhasil");
        }
    } else {
        // display error message
        header("location:ganti-pass_admin.php?gagal=tidak_sama");
    }
}

?>
