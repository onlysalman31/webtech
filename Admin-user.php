<?php
  session_start();
  if (!isset($_SESSION['status']) || $_SESSION['role'] !== 'user') {
    header('location: ../View/login.html');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Dashboard</title>
  <link rel="stylesheet" href="../Assest/css/Admin.css" />
</head>
<body>
  <div class="container">
    <h2>User Dashboard</h2>

    <div class="dashboard-buttons">
      <button onclick="location.href='view-profile.html'">View Profile</button>
      <button onclick="location.href='update-info.html'">Update Info</button>

      <h3>Progress</h3>
      <button onclick="location.href='upload-photo.html'">Upload Progress Photo</button>

      <h3>Feedback</h3>
      <button onclick="location.href='feedback.html'">Give Feedback</button>

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