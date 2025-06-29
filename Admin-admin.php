<?php
session_start();

// Check if user is logged in and role is admin
if (!isset($_SESSION['loggedin']) || !isset($_SESSION['user_info']) || $_SESSION['user_info']['role'] !== 'admin') {
    header('location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../Assest/css/Admin.css" />
</head>
<body>
  <div class="container">
    <h2>Admin Dashboard</h2>

    <div class="dashboard-buttons">
      <button onclick="location.href='view-user.html'">View All Users</button>
      <button onclick="location.href='view-reports.html'">View Reports</button>

      <h3>System Settings</h3>
      <button onclick="location.href='change-password.html'">Change Admin Password</button>
      <button onclick="location.href='configure-email.html'">Configure Email Notifications</button>
      <button onclick="location.href='backup-db.html'">Backup Database</button>

      <h3>Other Options</h3>
      <button onclick="location.href='upload-announcements.html'">Upload Announcements</button>
      <button onclick="location.href='review-feedback.html'">Review Feedback</button>
      <button onclick="location.href='update-homepage.html'">Update Homepage Content</button>
      <button onclick="logout()">Logout</button>
    </div>
  </div>

  <script>
    function logout() {
      window.location.href = "../Controller/logout.php";
    }
  </script>
</body>
</html>