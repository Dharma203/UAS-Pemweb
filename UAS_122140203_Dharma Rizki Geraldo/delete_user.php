<?php
include 'database.php'; // Koneksi ke database

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Hapus data dari database
  $sql = "DELETE FROM users WHERE id = '$id'";
  if (mysqli_query($conn, $sql)) {
    header("Location: admin.php"); // Redirect ke halaman admin setelah berhasil
    exit();
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}

$conn->close();
?>
