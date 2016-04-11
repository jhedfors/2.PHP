<?php
session_start();
require('connection.php');

if(isset($_POST['action']) && $_POST['action'] == 'register' ){
  register_user($_POST);
}

elseif(isset($_POST['action']) && $_POST['action'] == 'login' ){
  login_user($_POST);
}
else{
  session_destroy();
  header("Location:index.php");
  die();
}

function register_user($post){
  //---begin validation checks
  $_SESSION['errors'] =array();
  if (empty($post['first_name'])) {
    $_SESSION['errors'][] = "first name can't be blank";
  }
  if (empty($post['last_name'])) {
    $_SESSION['errors'][] = "last name can't be blank";
  }
  if (empty($post['password'])) {
    $_SESSION['errors'][] = "password is required";
  }
  if (empty($post['confirm_password'])) {
    $_SESSION['errors'][] = "confirm password is required";
  }
  if ($post['password'] != $post['confirm_password']) {
    $_SESSION['errors'][] = "passwords must match";
  }
  if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
    $_SESSION['errors'][] = "valid email is required";
  }
  //------end of validation checks
  if(count($_SESSION['errors'])> 0){
    header("Location:index.php");
    die();
  }
  else{
    //now you need to insert date into the DATABASE
    $query = "INSERT INTO users(first_name, last_name, email, password, created_date, modified_date)
              VALUES('{$post['first_name']}', '{$post['last_name']}','{$post['email']}','{$post['password']}',NOW(),NOW())";
    run_mysql_query($query);
    $_SESSION['success_message'] = 'user successfully created';
    header("Location:index.php");
    die();
  }

}

function login_user($post){
  $query = "SELECT * FROM users WHERE users.password = '{$post['password']}' && users.email = '{$post['email']}'";
  $user = fetch_all($query);
  if(count($user) > 0){
    $_SESSION['user_id'] = $user[0]['id'];
    $_SESSION['first_name'] = $user[0]['first_name'];
    $_SESSION['logged_in'] = true;
    header('Location:success.php');
  }
  else{
    $_SESSION['errors'][] ="can't find a user with those credentials";
    header('Location:index.php');
  }

}
 ?>
