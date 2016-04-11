<?php
session_start();
require('connection.php');

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Wall - User Login</title>
    <link rel="stylesheet" href="style.css" >
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <h2>The CodingDojo Wall</h2>
      </div>

      <div class="login">
        <h3>Returning Users</h3>
        <form action="process.php" method="post">
          <label for="email">Email Address:</label><input type="text" name="email">
            <div class="error">
              test
            </div>
          <label for="password">Password</label><input type="password" name="password" value="">
            <div class="error">
              test
            </div>
          <input type="hidden" name="login">      
          <input type="submit" value="Login">
        </form>

      </div>
      <div class="register">
        <h3>New Users</h3>
        <form action="process.php" method="post">
          <label for="first_name">First Name:</label><input type="text" name="first_name">
            <div class="error">
              test
            </div>
          <label for="last_name">Last Name:</label><input type="text" name="last_name">
            <div class="error">
              test
            </div>
          <label for="email">Email Address:</label><input type="text" name="email">
            <div class="error">
              test
            </div>
          <label for="password">Password:</label><input type="password" name="password" value="">
            <div class="error">
              test
            </div>
          <label for="password">Confirm Password:</label><input type="password" name="confirm_password" value="">
            <div class="error">
              test
            </div>
          <input type="hidden" name="register">
          <input type="submit" value="Register">
        </form>

      </div>

    </div>


  </body>
</html>
