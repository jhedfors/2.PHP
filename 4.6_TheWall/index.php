<?php
session_start();
require('connection.php');

// $query = "INSERT INTO users (first_name, last_name, email, password, created_on, modified_on)
// VALUES ('Jeff', 'Hedfors', 'jeff@hedfors.net', 'abc', NOW(), NOW())";
$query = "SELECT * FROM users";



// echo $query;
// var_dump(fetch_all($query));

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
          <textarea name="name"></textarea>
          <input type="submit" name="name" value="Post a message">
        </form>

      </div>

    </div>

  </body>
</html>
