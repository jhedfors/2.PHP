<?php
session_start();
require('connection.php');

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>The Wall</title>
    <link rel="stylesheet" href="style.css" >
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <h2>The CodingDojo Wall</h2>
        <div class="welcome">
          <h4>Welcome [placeholder]</h4>
          <a href="process.php">Logoff</a>
        </div>
      </div>
      <div class="main">
        <p>Post a message</p>
        <form class="message_post" action="process.php" method="post">
          <textarea name="post_message"></textarea>
          <input type="submit" value="Post a message">
        </form>

        <?php
         
         ?>

      </div>

    </div>

  </body>
</html>
