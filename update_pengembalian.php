<?php
// include database connection file
include 'config.php';

if (isset($_POST['submit'])){
    $no_form = $_POST['no_form'];
$status=$_POST['status_pengajuan'];

$sql = "UPDATE pengajuan SET status_pengajuan='$status' WHERE no_form='$no_form'";
$query = mysqli_query($db,$sql);

    
// Redirect to homepage to display updated user in list
if($query) {
    header("Location: peminjaman_admin.php?status=sukses");
    }else{
    header("Location: peminjaman_admin.php?status=gagal");
    }
}else {
    
}

?>