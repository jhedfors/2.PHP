$(document).ready(function(){

<?php
$num1 = rand(1,50);
$num2 = rand(1,50);
$result = $num1+$num2;
 ?>
var output = "<?= $num1 ?> x <?= $num2 ?> = <?= $result ?>"

  alert(output);
});
