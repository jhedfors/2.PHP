<?php
session_start();
require("new-connection.php");
if ($_POST['email_id']!= null) {
  run_mysql_query("delete from email_addresses where id='{$_POST['email_id']}'
");
  header('Location:success.php');
}


 ?>
