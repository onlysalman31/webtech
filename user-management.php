<?php
session_start();

// Only allow access if logged in
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>User Management</title>
  <link rel="stylesheet" href="../Assest/css/Admin.css" />
</head>
<body>
  <div class="container">
    <h2>User Management Form</h2>
    <form action="../Controller/user-management2.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required />
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required />
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required />
      </div>

      <div class="form-group">
        <label for="role">Role:</label>
        <select name="role" id="role" required>
          <option value="">Select Role</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>