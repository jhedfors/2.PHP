<?php session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <style>
      .wrapper{
        position: relative;

      }

      h2{
        margin-left: 40px;
      }
      form {
        width: 610px;
        padding: 20px;
        margin: 20px;
        border: 1px solid black;
        position: relative;

      }
      label{
        width: 130px;
        display: inline-block;
      }
      input {
        margin: 5px;
        border: 1px solid black;
      }
      .fileToUpload{
        width: 292px;

      }

      div.error{
        width: 300px;
        display: inline-block;
        position: relative;
        right: 0px;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <h2>Registration</h2>
      <form class="form" action="process.php" method="post" enctype="multipart/form-data">
        <label>Email:</label><input type="text" name="email" value="">
        <div class="error">
          <?php
              if(isset($_SESSION['errors']['email'])) {
                echo  $_SESSION['errors']['email'];
              }
           ?>
        </div><br>

        <label>First Name:</label><input type="text" name="first_name" value="">
        <div class="error">
          <?php
              if(isset($_SESSION['errors']['first_name'])) {
                echo  $_SESSION['errors']['first_name'];
              }
           ?>
        </div><br>
        <label>Last Name:</label><input type="text" name="last_name" value="">
        <div class="error">
          <?php
              if(isset($_SESSION['errors']['last_name'])) {
                echo  $_SESSION['errors']['last_name'];
              }
           ?>
        </div><br>
        <label>Password:</label><input type="password" name="password" value="">
        <div class="error">
          <?php
              if(isset($_SESSION['errors']['password'])) {
                echo  $_SESSION['errors']['password'];
              }
           ?>
        </div><br>
        <label>Confirm Password:</label><input type="password" name="confirmpassword" value="">
        <div class="error">
          <?php
              if(isset($_SESSION['errors']['confirmpassword'])) {
                echo  $_SESSION['errors']['confirmpassword'];
              }
           ?>
        </div><br>
        <label>Birthdate:</label><input type="text" name="birthdate" value="">
        <div class="error">
          <?php
              if(isset($_SESSION['errors']['birthdate'])) {
                echo  $_SESSION['errors']['birthdate'];
              }
           ?>
        </div><br>
        <input type="file" name="fileToUpload" class="fileToUpload"><br>
        <input type="submit" value="Submit">
      </form>


    </div>

  </body>
</html>
