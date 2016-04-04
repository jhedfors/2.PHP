<?php
  echo 'Create a program that prints the sum of all the values in the array "numbers". Your "numbers" array should contain the following values: 1, 2, 5, 10, 255, 3.<br>';

  $numbers = array(1, 2, 5, 10, 255, 3);
  printSum($numbers);
  function printSum($arr)
    {
      $sum =0;
      foreach ($arr as $key => $value) {
        $sum+=$value;
    }
    echo $sum;
  }

 ?>
