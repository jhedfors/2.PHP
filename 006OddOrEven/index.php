<?php
  echo "Create a program that counts from 1 to 2000. As it loops through each number, have your program generate the number and a message telling whether it's odd or even.<br>";

  for ($i=1; $i <=2000 ; $i++) {
    if ($i % 2 == 0) {
      echo "$i is EVEN <br>";
    }
    else {
      echo "$i   is ODD <br>";
    }
  }


?>
