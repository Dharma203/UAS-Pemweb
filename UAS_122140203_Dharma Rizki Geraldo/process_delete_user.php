<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    // Jika bukan admin, redirect ke halaman login
    header("Location: login.html");
    exit();
}

include 'database.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "User berhasil dihapus.";
        header("Location: admin.php");
        exit();
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
}
?>
