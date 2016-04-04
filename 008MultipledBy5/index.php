<?php
  echo 'Create a function called "multiply()" that reads each value in the array (e.g. $A = array(2, 4, 10, 16)) and returns an array where each value has been multiplied by 5.<br><br>

Modify this function so that you can pass an additional argument to this function. The function should multiply each value in the array by this additional argument (call this additional argument "factor" inside the function). For example say $A = array(2,4,10,16). When you say...<br><br>

this should dump B which contains [10, 20, 50, 80 ].
';

function multiply($arr,$factor){
  $B = array();
  for ($i=0; $i < count($arr); $i++) {
    array_push($B,$arr[$i]*$factor);
  }
  var_dump($B);
}

$A = array(2,4,10,16);


multiply($A,5);



?>
