<?php
include 'session.php'; // Include session.php for session validation
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="table-container">
    <h1>Welcome to Your Dashboard, <?php echo $username; ?>!</h1>
    <p>Here is your data:</p>
    
    <div id="table-content">
      <!-- Content will be fetched by PHP -->
      <?php include 'fetch_data.php'; ?>
    </div>

    <div class="navigation">
      <a href="logout.php">Logout</a>
    </div>
  </div>
</body>
</html>
