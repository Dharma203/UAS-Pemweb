<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New User</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="form-container">
    <h1>Add New User</h1>

    <!-- Form untuk menambah user -->
    <form action="process_add_user.php" method="POST">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" required>

      <label for="gender">Gender</label>
      <select name="gender" id="gender" required>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>

      <button type="submit">Add User</button>
    </form>

    <div class="back-button">
      <a href="admin_dashboard.php">
        <button>Back to Dashboard</button>
      </a>
    </div>
  </div>
</body>
</html>
