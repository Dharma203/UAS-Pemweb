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
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        echo "User tidak ditemukan.";
        exit();
    }
} else {
    echo "ID tidak ditemukan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="form-container">
    <h1>Edit User</h1>

    <!-- Form untuk edit user -->
    <form action="process_edit_user.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

      <label for="name">Name</label>
      <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password">

      <label for="gender">Gender</label>
      <select name="gender" id="gender" required>
        <option value="Male" <?php echo ($user['gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
        <option value="Female" <?php echo ($user['gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
      </select>

      <button type="submit">Update User</button>
    </form>

    <div class="back-button">
      <a href="admin_dashboard.php">
        <button>Back to Dashboard</button>
      </a>
    </div>
  </div>
</body>
</html>
