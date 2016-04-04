<?php
  echo 'Create a function called "print_lists" that takes any array and prints each value in the array in an &lt;li&gt;, which is part of a &lt;ul&gt;. For example, running print_lists($A) where $A = array(2,3,"hello"); should output a html response that looks like...<br>';

function print_lists($arr){
  echo "<ul>";
  for ($i=0; $i < count($arr); $i++) {
    echo "<li>$arr[$i]</li>";
  }
  echo "</ul>";
}

$A = array(2,3,'hello');

print_lists($A);



?>
