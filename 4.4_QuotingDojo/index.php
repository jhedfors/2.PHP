<?php
  session_start();
  require("connection.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to Quoting Dojo</title>
    <link rel="stylesheet" href="style.css" >
  </head>
  <body>
    <div class="wrapper">
      <div class="main">
        <h2>Welcome to Quoting Dojo</h2>
        <form class="newQuotes" action="process.php" method="post">
          <label for="author">Your Name:</label><input type="text" name="author" value="">
          <div class="error">
            <?php
                if(isset($_SESSION['errors']['author'])) {
                  echo  $_SESSION['errors']['author'];
                  $_SESSION['errors']['author'] = null;
                }
             ?>
          </div>
          <label for="quote">Your Quote:</label><textarea name="quote" value=""></textarea>
          <div class="error">
            <?php
                if(isset($_SESSION['errors']['quote'])) {
                  echo  $_SESSION['errors']['quote'];
                  $_SESSION['errors']['quote'] = null;
                }
             ?>
          </div>
          <input type="submit" name="addQuote" value="Add my quote!">
          <input type="submit" name="skipToQuotes" value="Skip to Quotes!">
        </form>
      </div>
    </div>
  </body>
</html>
