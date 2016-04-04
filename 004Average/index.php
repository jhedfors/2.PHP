<?php
  echo 'Create a program that prints the average of the values in the array called "numbers". Array "numbers" should have the following values: 1, 2, 5, 10, 255, 3. <br>';

  $sum = 0;
  $numbers = [1, 2, 5, 10, 255, 3];

  for ($i=0; $i < count($numbers); $i++) {
    $sum+=$numbers[$i];
  }

  echo $sum/count($numbers);

 ?>
