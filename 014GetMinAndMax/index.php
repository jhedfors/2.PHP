<?php
  $numbers =[135, 2.4, 2.67, 1.23, 332, 2, 1.02];
  $output = get_max_and_min($numbers);

  //$output should be equal to array('max' => 332, 'min' => 1.02);
  function get_max_and_min($arr) {
    $max = $arr[0];
    $min = $arr[0];

    for ($i=0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
          $max = $arr[$i];
        }
        else if ($arr[$i] < $min) {
          $min = $arr[$i];
        }
    }
    // I did a foreach loop first...and it worked.
    // foreach ($arr as $key => $value) {
    //   if ($value > $max) {
    //     $max = $value;
    //   }
    //   else if ($value < $min) {
    //     $min = $value;
    //   }
    // }
    $output = ["max" => "$max", "min" => "$min"];
    var_dump($output);
  }
?>
