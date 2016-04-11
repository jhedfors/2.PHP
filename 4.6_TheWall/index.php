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
        $posts = $_SESSION['user_messages'];
        //this foreach loop creates an array (i have named $sortingkey that contains the values of the keys I want sorted in the $quotes array
        foreach ($posts as $key => $row) {
          $sortingkey[$key]  = $row['created_on'];
        }
        // this built-in function sorts $quotes by decending order (SORT_DESC) by they values stored in $sortingkey
        array_multisort($sortingkey, SORT_DESC, $posts);

        foreach ($posts as $post) {
        // echo "{$post['id']} {$post['message']}";
        ?>
        <div class="messages">
          <p>
            <?= $post['first_name']?>  <?=$post['last_name']?> - <?= $post['created_on'] ?>
          </p>
          <p>
            <?= $post['message']  ?>
          </p>
        </div>
        <?php
        }
        ?>

      </div>

    </div>

  </body>
</html>
