<?php
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];

// Sanitasi input untuk menghindari SQL Injection
$id = mysqli_real_escape_string($koneksi, $id);
$nama = mysqli_real_escape_string($koneksi, $nama);
$hp = mysqli_real_escape_string($koneksi, $hp);
$alamat = mysqli_real_escape_string($koneksi, $alamat);

$query = "UPDATE pelanggan SET pelanggan_nama='$nama', pelanggan_hp='$hp', pelanggan_alamat='$alamat' WHERE pelanggan_id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: pelanggan.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
