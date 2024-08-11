<?php
include '../koneksi.php';
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$query = "INSERT INTO pelanggan (pelanggan_id, pelanggan_nama, pelanggan_hp, pelanggan_alamat) VALUES ('', '$nama', '$hp', '$alamat')";
mysqli_query($koneksi, $query);
header("Location: pelanggan.php");
?>
