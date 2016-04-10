<?php
  session_start();
  require("connection.php");
  $query = "select * from quotes";
  $quotes = fetch_all($query);
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quotes</title>
    <link rel="stylesheet" href="style.css" >
  </head>
  <body>
    <div class="wrapper">
      <div class="main">
        <h2>Here are some awesome quotes!</h2>
          <?php
            foreach ($quotes as $quote) {
              $date = date("g:i A M d Y ", strtotime($quote['created_date']));
          ?>
          <div class="quotes">
            <p>
              "<?= $quote['quote'] ?>"
            </p>
            <p class='tagline'>
              -<?= $quote['author'] ?> at <?= $date ?>
            </p>
            <hr>
          </div>
          <?php
            }
           ?>
           <form class="" action="index.php" method="post">
             <input type="submit" name="return" value="Add Quote">
           </form>
      </div>
    </div>
  </body>
</html>
