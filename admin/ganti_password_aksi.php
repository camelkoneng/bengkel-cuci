<?php
include '../koneksi.php';

// Ambil password baru dari form dan hash dengan md5
$password_baru = md5($_POST['password_baru']);

// Update password di database
mysqli_query($koneksi, "UPDATE admin SET password='$password_baru'");

// Redirect ke halaman ganti password dengan pesan sukses
header("location: ganti_password.php?pesan=oke");
exit(); // Menambahkan exit untuk menghentikan eksekusi setelah redirect
?>
