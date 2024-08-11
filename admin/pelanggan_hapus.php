<?php
include '../koneksi.php';

$id = $_GET['id'];

// Sanitasi input untuk menghindari SQL Injection
$id = mysqli_real_escape_string($koneksi, $id);

$query = "DELETE FROM pelanggan WHERE pelanggan_id='$id'";

if (mysqli_query($koneksi, $query)) {
    header("Location: pelanggan.php");
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
