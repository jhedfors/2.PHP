<?php
session_start();
// session_destroy();

require('connection.php');
//determine where the user is coming from
if (isset($_POST['login'])) {
  login_user($_POST);
}
elseif (isset($_POST['register'])) {
  register_user($_POST);
}
elseif (isset($_POST['post_message'])) {
  var_dump($_POST);
  die();

  // register_user($_POST);
}
else{
  session_destroy();
  header("Location:login.php");
}
//  ---- END-----determine where the user is coming from


function login_user($post){
  $_SESSION['errors'] =array();
  if (!filter_var($post['email'],FILTER_VALIDATE_EMAIL)) {
    $_SESSION['errors']['email'] = "Need valid email";
  }
  if (empty($post['password'])) {
    $_SESSION['errors']['password'] = "Need password";
  }
  else {
    $post_esc_email = escape_this_string($post['email']);//escapes the email
    $post_esc_password = escape_this_string($post['password']);//escapes the password
    $post_enc_password = md5($post_esc_password); //encrypts the escaped password
    $query = "select * from users where email = '{$post_esc_email}'";
    $db_user = fetch_record($query);
    $db_password = $db_user['password'];
    if($db_user==null || $db_password != $post_enc_password ){
      $_SESSION['errors']['email'] = "Invalid email or ";
      $_SESSION['errors']['password'] = "password";
    }
  }
  if(count($_SESSION['errors'])>0){
    header('Location:login.php');
  }
  else{
    getPostAndComments($db_user['id']);
    // die();
    Header('Location:index.php');
  }
}

function register_user($post){
  //---begin validation checks
  $_SESSION['errors'] =array();
  if (empty($post['first_name'])) {
    $_SESSION['errors']['first_name'] = "Need first name";
  }
  if (empty($post['last_name'])) {
    $_SESSION['errors']['last_name'] = "Need last name";
  }
  if (empty($post['password'])) {
    $_SESSION['errors']['password'] = "Need password";
  }
  if (empty($post['confirm_password'])) {
    $_SESSION['errors']['confirm_password'] = "Need password confirmation";
  }
  if ($post['password'] != $post['confirm_password']) {
    $_SESSION['errors']['confirm_password'] = "Passwords must match";
  }
  if (!filter_var($post['email'],FILTER_VALIDATE_EMAIL)) {
    $_SESSION['errors']['email'] = "Need valid email";
  }

  elseif(true){
    $query = "select email from users where email = '{$post['email']}'";
    $existing = (fetch_record($query))['email'];
    if ($existing == $post['email']) {
      $_SESSION['errors']['email'] = "User already exists";
    }

  }
  if(count($_SESSION['errors'])>0){
    header('Location:login.php');
  }
  else{
    $post_esc_email = escape_this_string($post['email']);//escapes the email
    $post_esc_password = escape_this_string($post['password']);//escapes the password
    $post_enc_password = md5($post_esc_password); //encrypts the escaped password
    $query = "INSERT INTO users (first_name, last_name, email, password, created_on, modified_on)
    VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post_esc_email}', '{$post_enc_password}', NOW(), NOW())";
    run_mysql_query($query);
    header('Location:index.php');
  }
}

function getPostAndComments($id){
  $query = "select message from messages where users_id = '{$id}'";
  $db_messages = fetch_record($query);
  //
  // var_dump($db_messages);
  // die();


}
  //------end of validation checks

 ?>
