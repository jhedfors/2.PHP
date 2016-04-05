<?php
//

for ($i=0; $i < 100; $i++) {
  $score = rand(50,100);
  yourGrade($score);

}
function yourGrade($score){
  if ($score < 70) {
    echo "<h1>Your Score: $score/100</h1>";
    echo "<h2>Your grade is D.";
  }
  else if ($score < 80) {
    echo "<h1>Your Score: $score/100</h1>";
    echo "<h2>Your grade is C.";
  }
  else if ($score < 90) {
    echo "<h1>Your Score: $score/100</h1>";
    echo "<h2>Your grade is B.";
  }
  else if ($score <= 100) {
    echo "<h1>Your Score: $score/100</h1>";
    echo "<h2>Your grade is A.";
  }

}


?>
