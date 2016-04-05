<?php
  $x = array(4, 6, 1, 3, 5, 7, 25);
  $y = array(4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
  function draw_stars($arr) {
    for ($i=0; $i < count($arr); $i++) {
      if (is_numeric($arr[$i])) {
        for ($j=0; $j < $arr[$i]  ; $j++) {
          echo '*';
        }
        echo "<br>";
      }
      else{
        for ($j=0; $j < strlen($arr[$i]) ; $j++) {
          echo strtolower(substr($arr[$i],0,1));
        }
        echo "<br>";

      }


    }

  }

  // draw_stars($x);
  echo "<br>";
  draw_stars($y)

?>
