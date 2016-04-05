<?php


  $users = array('first_name' => 'Michael', 'last_name' => 'Choi');
  function keyNameAndValue($users){
    foreach ($users as $key => $value) {
      echo "The value in the key '$key' is '$value'.<br>";
    }

  }


function describeArray($users){
  $keyCount = 0;
  $KeyName = '';

  foreach ($users as $key => $value) {
    $keyCount++;
    $KeyName .= "$key, ";
  }

  echo "There are $keyCount keys in this array: $KeyName<br>" ;
  echo keyNameAndValue($users);


}

describeArray($users);


?>
