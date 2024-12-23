<?php
session_start();

// Cek apakah sesi sudah ada
if (isset($_SESSION['username'])) {
    // User sudah login
    $username = $_SESSION['username'];
} else {
    // Redirect user ke halaman login jika belum login
    header("Location: login.html");
    exit();
}
?>
