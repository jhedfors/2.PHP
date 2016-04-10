<?php
  session_start();
  require("connection.php");
  $query = "select * from quotes";
  $quotes = fetch_all($query);

  //this foreach loop creates an array (i have named $sortingkey that contains the values of the keys I want sorted in the $quotes array
  foreach ($quotes as $key => $row) {
    $sortingkey[$key]  = $row['created_date'];
  }

  // this built-in function sorts $quotes by decending order (SORT_DESC) by they values stored in $sortingkey
  array_multisort($sortingkey, SORT_DESC, $quotes);

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
