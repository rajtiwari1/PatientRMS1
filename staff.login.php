<?php
 session_start();
 if (isset($_SESSION["userID"]) && $_SESSION["uc"]=="3") {
   header("Location:sdashboard.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="manifest" href="Resource/favicon/site.webmanifest">
  <link rel="stylesheet" type="text/css" href="css/dlogin_style.css">
  <title> Login </title>
  <style type="text/css">
     body {
  background-image: url('Resource/staff.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
  </style>
</head>
<body>
 <div class="login_box">
   <form class="login_form" action="staff_login.process.php" method="post">
     <h2>Sign In</h2>
     <?php
      if(isset($_GET["error"]))
      {
        if ($_GET["error"]=="emptyfields") {
          echo "<p class=login_error>Fill in all the fields</p>";
        }
        else if ($_GET["error"]=="wrongpass") {
          echo "<p class=login_error>Password does not match</p>";
        }
        else if ($_GET["error"]=="nouser") {
         echo "<p class=login_error>No User Found!</p>";
        }
      }
      else if (isset($_GET["login"])) {
         if ($_GET["login"]=="success") {
         echo "<p class=login_success>Login Succesful!</p>";
           }
      }
      ?>
     <label for="userID">User ID</label>
     <input type="text" name="userID" placeholder="Enter your ID ">
     <label for="pass">Password</label>
     <input type="password" name="pass" placeholder="Enter your Password">
     <input type="submit" name="login-submit" value="Login">
   </form>
   </div>
 </div>
 </div>
</body>
