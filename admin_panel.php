<?php
 session_start();
 if(!$_SESSION["userID"])
 {
   header("Location:admin.login.php?signin");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" type="text/css" href="css/ddash_style.css">
  <title> Dashboard </title>
  <style>
body {
  background-image: url('Resource/admin.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>
  <div class="top_img">
  </div>
  <div class="navigation-bar" style="text-align: center">
    <a href="admin_panel.php" >Home</a>
    <a href="aregister.php">Register</a>
    <a href="adelete.php">Delete</a>
    <a class='logout' href="logout.php">Logout</a>
  </div>
  

</body>
</html>
