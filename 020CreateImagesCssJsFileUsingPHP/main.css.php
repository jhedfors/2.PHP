<?php
 header('Content-type: text/css');
 function randomColor(){
   $r = rand(1,255);
   $g = rand(1,255);
   $b = rand(1,255);
   return $r.','.$g.','.$b;
 }

?>

h1 {
  color: rgb(<?= randomColor() ?>);
}

p  {
  color: rgb(<?= randomColor() ?>);
}
