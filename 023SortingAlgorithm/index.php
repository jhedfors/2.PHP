<?php
  function returnRandom(){
    return rand(1,10000);
  }

  $originalarray = array();
  for ($i=0; $i < 100 ; $i++) {
    $arr[$i] = returnRandom();
  }

  // var_dump($arr);

  function sortArray($arr){
    $arrayEnd = count($arr);
    $minIndex = 0;
    $maxIndex = 0;
    for ($i=1; $i < $arrayEnd; $i++) {

      if ($arr[$i]< $arr[$minIndex]) {
        $minIndex = $i;    $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
      }
      if ($arr[$i]> $arr[$maxIndex]) {
        $maxIndex = $i;
        $temp = $arr[count($arr)];
        $arr[count($arr)] = $arr[$maxIndex];
        $arr[$maxIndex] = $temp;
        $arrayEnd--;
      }

      $minIndex = 0;
      $maxIndex = 0;
      // echo "<br>$minIndex value $arr[$minIndex]<br>";
      // echo "$maxIndex value $arr[$maxIndex]<br>";
    }
    var_dump($arr);

  }
  $newArr = sortArray($originalarray);
  // var_dump($newArr);

?>
