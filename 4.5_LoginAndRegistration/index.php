<?php
session_start();
require('connection.php');
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login and Registration</title>
    <link rel="stylesheet" href="style.css" >
  </head>
  <body>
    <?php
      if(isset($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $error) {
          echo "<p class='error'>{$error}'</p>";
        }
        unset($_SESSION['errors']);
      }
      if (isset($_SESSION['success_message'])) {
        echo "<p class='success'>{$_SESSION['success_message']}'</p>";
        unset($_SESSION['success_message']);
      }

     ?>
    <h2>Register</h2>
    <form action="process.php" method="post">
      <input type="hidden" name="action" value="register">
      <label for="first_name">First Name:</label><input type="text" name="first_name">
      <label for="last_name">Last Name:</label><input type="text" name="last_name">
      <label for="email">Email address:</label><input type="text" name="email">
      <label for="password">Password:</label><input type="password" name="password">
      <label for="confirm_password">Confirm Password:</label><input type="password" name="confirm_password">
      <input type="submit" value="Register">
    </form>
    <h2>Login</h2>
    <form action="process.php" method="post">
      <input type="hidden" name="action" value="login">
      <label for="email">Email address:</label><input type="text" name="email">
      <label for="password">Password:</label><input type="password" name="password">
      <input type="submit" value="Login">
    </form>
  </body>
</html>
