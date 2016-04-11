<?php
session_start();
require('connection.php');

// var_dump($_POST);

if (isset($_POST['login'])) {
  userLogin();
}
if (isset($_POST['register'])) {
  userRegister();
}

function userLogin(){
  echo 'login';

}

function userRegister(){
  echo 'register';

}


 ?>
