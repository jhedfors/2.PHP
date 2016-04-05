<?php

coinToss();

  function coinToss(){
    $count = 0;
    $heads = 0;
    $tails = 0;

    echo "<h2 style = \"text-decoration: underline;font-style:italic\">Starting the program</h2>";

    for ($i=1; $i <=5000  ; $i++) {
      $coin = rand(0,1);
      if($coin==0){
        $heads++;
        $count++;
        echo "<p>Attempt #$count: Throwing a coin... it's a head! Got $heads heads(s) so far and $tails tails(s) so far</p>";
        }
        else{
        $tails++;
        $count++;
        echo "<p>Attempt #$count: Throwing a coin... it's a head! Got $heads heads(s) so far and $tails tails(s) so far</p>";
      }
    }
    echo "<h2 style = \"text-decoration: underline;font-style:italic\">Ending the program - thank you!</h2>";

}



?>
