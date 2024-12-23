<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    // Jika bukan admin, redirect ke halaman login
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="table-container">
    <h1>Admin Dashboard</h1>
    <div class="navigation">
      <a href="logout.php">Logout</a>
    </div>

    <a href="add_user.php">
      <button class="add-user">Add New User</button>
    </a>

    <div id="table-content">
      <!-- Menampilkan data pengguna -->
      <?php include 'fetch_data.php'; ?>
    </div>
  </div>
</body>
</html>
