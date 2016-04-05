<?php
  $states = array('CA', 'WA', 'VA', 'UT', 'AZ');

  function dropDownForLoop($arr){
    echo "<select>";
    for ($i=0; $i < count($arr); $i++) {
      echo "<option>$arr[$i]</option>";
      // echo "$arr[i]"
    }
    echo "</select>";
  }

  function dropDownForeachLoop($arr){
    echo "<select>";
    foreach ($arr as $key => $value) {
      echo "<option>$value</option>";
    }
    echo "</select>";
  }


  dropDownForLoop($states);
  dropDownForeachLoop($states);
  array_push($states,'NJ', 'NY', 'DE');
  dropDownForeachLoop($states);


?>
