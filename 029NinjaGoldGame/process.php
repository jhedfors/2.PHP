<?php
session_start();
if($_POST['startover'] =='startover'){
  session_destroy();
}

if (!isset($_SESSION['gold'])) {
  $_SESSION['gold'] = 0;
}

$scoreColor = 'red';
if($_SESSION['gold']>0){
  $scoreColor = 'green';
}
else{
  $scoreColor = 'red';
}
if (!isset($_SESSION['activities'])) {
  $_SESSION['activities'] = '';
}



if($_POST['building'] =='farm'){

  $coin = rand(10,20);
  $_SESSION['gold'] += $coin;
  $_SESSION['activities'].="<p class='won'>You entered a farm and earned $coin golds. (todays date)</p>";
}

else if($_POST['building'] =='cave'){
  $coin = rand(5,10);
  $_SESSION['gold'] += $coin;
  $_SESSION['activities'].="<p class='won'>You entered a cave and earned $coin golds. (todays date)</p>";
}

else if($_POST['building'] =='house'){
  $coin = rand(2,5);
  $_SESSION['gold'] += $coin;
  $_SESSION['activities'].="<p class='won'>You entered a house and earned $coin golds. (todays date)</p>";
}

else if($_POST['building'] =='casino'){
  if (rand(1,100) >= 70) {
    $coin = rand(0,50);
    $_SESSION['gold'] += $coin;
    $_SESSION['activities'].="<p class='won'>You entered a casino and earned $coin golds. (todays date)</p>";
  }
  else{
    $coin = rand(0,50);
    $_SESSION['gold'] -= $coin;
    $_SESSION['activities'].="<p class='lost'>You entered a casino and lost $coin golds. (todays date)</p>";
  }

}


header('Location: index.php');

 ?>
