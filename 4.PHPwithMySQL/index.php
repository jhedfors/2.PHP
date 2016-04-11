<?php

$password = 'password';
$encrypted_password = md5($password); //the function md5 is native to PHP
echo $encrypted_password; //this will show you the encrypted value
//  5f4dcc3b5aa765d61d8327deb882cf99 -> nice!

 ?>
