<?php
  session_start();
  require("connection.php");
  $errors = array();
  $query = "INSERT INTO quotes(author,quote,created_date,modified_date)
  values ('{$_POST['author']}','{$_POST['quote']}',now(),now());";

  if(isset($_POST['skipToQuotes'])){
    header('Location:main.php');
  }
  if(isset($_POST['addQuote'])){
    if ($_POST['author'] == null) {
      $errors['author'] = 'We need your name!';
    }
    if ($_POST['quote'] == null) {
      $errors['quote'] = 'We need your quote!';
    }
    else{
      run_mysql_query($query);
    }
  }

  if(!empty($errors)) {
    $_SESSION['errors'] =  $errors;

    header('Location: index.php');
  }
  else{
      header('Location:main.php');
  }
 ?>
