<?php
session_start();
require("new-connection.php");
$_SESSION['email'] = $_POST['email'];
$errors = array();
$query = "insert into email_addresses (email_address,date_created, date_modified)
values('{$_POST['email']}',now(),now())";

if($_POST['email'] != null) {
  if(! filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $errors['email'] ="This email is not valid";
  }
  elseif(!run_mysql_query($query)){
    $errors['database'] = 'database update failed';
  }
}
else {
  $errors['email'] = 'Cannot be empty';
}



if(!empty($errors)) {
  $_SESSION['errors'] =  $errors;
  header('Location: index.php');
}
else{
  header("Location:success.php");

}
 ?>
