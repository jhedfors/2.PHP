<?php

session_start();

  $errors = array();
  if(isset($_POST['email']) && $_POST['email'] != null) {
  } else {
    $errors[] = "Email should not be empty'";
  }

  if(isset($_POST['first_name']) && $_POST['first_name'] != null) {
  } else {
    $errors[] = "First name should not be empty'";
  }

  if(isset($_POST['last_name']) && $_POST['last_name'] != null) {
  } else {
    $errors[] = "Last name should not be empty'";
  }

  if(isset($_POST['password']) && $_POST['password'] != null) {
  } else {
    $errors[] = "Password should not be empty'";
  }

  if(isset($_POST['confirmpassword']) && $_POST['confirmpassword'] != null) {
  } else {
    $errors[] = "Confirmation password should not be empty'";
  }

  if(isset($_POST['birthdate']) && $_POST['birthdate'] != null) {
  } else {
    $errors[] = "Birthday should not be empty'";
  }


  if(! empty($errors)) {
    $_SESSION['errors'] =  $errors;
    header('Location: index.php');
  }

echo 'you are logged in';


 ?>
