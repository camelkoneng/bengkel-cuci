<?php
session_start(); // Memulai sesi
session_destroy(); // Menghapus semua data sesi
header("Location: ../index.php?pesan=logout"); // Mengalihkan ke halaman index dengan pesan logout
exit(); // Menghentikan eksekusi skrip setelah header
?>
