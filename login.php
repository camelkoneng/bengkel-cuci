<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$data = mysqli_query($koneksi, $query);
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("Location: admin/index.php");
} else {
    header("Location: index.php?pesan=gagal");
}
?>
