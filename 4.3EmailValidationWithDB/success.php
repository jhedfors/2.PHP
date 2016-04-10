<?php
  session_start();
  // session_destroy();
  require("new-connection.php");
  $query = "SELECT * FROM email_addresses";
  $email_addresses = fetch_all($query);

  if(!isset($_SESSION['email'])){
    header('Location:index.php');
  }

  $goodemail = $_SESSION['email'];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email Display</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="success">
        <p>
          The email address you entered (<?= $goodemail ?>) <br>
          is a valid email address! Thank You!
        </p>
      </div>
      <form class="" action="index.php" method="post">
        <input type="submit" name="GoBack" value="Go Back">
      </form>
      <h4>Email Addresses Entered</h4>
      <table>
        <tbody>
          <?php
            foreach ($email_addresses as $person) {
              $date = strtotime($person['date_created']);
              $myFormatForView = date("d/m/y g:i A", $date);
          ?>
          <tr>
            <td><?= $person['email_address'] ?></td>
            <td><?= $myFormatForView ?></td>
            <td>
              <form class='' action='process_delete.php' method='post'>
                <input type='hidden' name='email_id' value='<?= $person['id'] ?>'>
                <input type='submit' value='Delete'>
              </form>
            </td>
          </tr>
          <?php
            }
           ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
