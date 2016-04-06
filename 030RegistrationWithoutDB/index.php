<?php session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <style>
      form {
        width: 200px;
        padding: 20px;
        margin: 20px;
        border: 1px solid black;
      }
      input {
        margin: 5px;
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <form class="form" action="process.php" method="post">
        Email:<input type="text" name="email" value="">
        First Name:<input type="text" name="first_name" value="">
        Password:<input type="text" name="password" value="">
        Confirm Password:<input type="text" name="confirmpassword" value="">
        Birthdate:<input type="text" name="name" value="">
        <input type="submit" value="Submit">
      </form>
    </div>

  </body>
</html>
