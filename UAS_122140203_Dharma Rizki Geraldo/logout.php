<?php
session_start();

// Hapus session
session_unset();
session_destroy();

// Hapus cookie jika ada
if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 3600, "/"); // Hapus cookie dengan waktu kedaluwarsa di masa lalu
}

header("Location: login.html");
exit();
?>
