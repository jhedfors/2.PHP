<?php
session_start();
session_destroy();
require("new-connection.php");

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email Validation</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <form class="form" action="process.php" method="post">
        <label for="email">Email Address:</label><input type="text" name="email" value="">
        <div class="error">
          <?php
              if(isset($_SESSION['errors']['email'])) {
                echo  $_SESSION['errors']['email'];
                $_SESSION['errors']['email'] = null;
              }
           ?>
        </div>
        <input type="submit" class="addemail" value="Submit">

      </form>

    </div>

  </body>
</html>
