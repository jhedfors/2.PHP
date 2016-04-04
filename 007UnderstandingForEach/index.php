<?php

echo "<h1>1</h1>:";
echo 'My guess for output: $x = [1,3,5,7]<br>';
echo '0 - 1<br>';
echo '1 - 3<br>';
echo '2 - 5<br>';
echo '3 - 7<br>';

echo '<br>';
echo '<b>Actual result:</b><br>';

$x = array(1,3,5,7);
foreach($x as $key => $value)
{
  echo $key . " - " . $value ."<br />";
}

echo "<h1>2</h1>:";
echo 'My guess for output:<br>';
echo '1<br>';
echo '3<br>';
echo '5<br>';
echo '7<br>';

echo '<br>';
echo '<b>Actual result:</b><br>';


$x = array(1,3,5,7);
foreach($x as $value)
{
  echo $value ."<br />";
}

echo "<h1>3</h1>:";
echo 'My guess for output: $x = [ "hi" => "Dojo", "awesome" => "game" ]<br>';
echo 'hi - Dojo<br>';
echo 'awesome - game<br>';

echo '';
echo '<b>Actual result:</b><br>';

$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $key . " - " . $value ."<br />";
}

echo "<h1>4</h1>:";
echo 'My guess for output: <br>';
echo 'Dojo<br>';
echo 'game<br>';

echo '';
echo '<b>Actual result:</b><br>';

$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $value ."<br />";
}

echo "<h1>5</h1>:";
echo 'My guess for output:<br> ';
echo 'hi<br>';
echo 'game<br>';

echo '<br>';
echo '<b>Actual result:</b><br>';

$x = array("hi" => "Dojo", "awesome" => "game");
foreach($x as $key => $value)
{
  echo $key ."<br />";
}

echo "<h1>6</h1>:";
echo 'My guess for output: <br>';
echo 'Key is 0<br>';
echo 'var_dumping value<br>';
echo '0 = 1<br>';
echo '1 = 3<br>';
echo '2 = 5<br>';
echo '';
echo 'Key is 1<br>';
echo 'var_dumping value<br>';
echo '0 = 2<br>';
echo '1 = 4<br>';
echo '2 = 6<br>';
echo '<br>';
echo 'Key is 2<br>';
echo 'var_dumping value<br>';
echo '0 = 3<br>';
echo '1 = 6<br>';
echo '2 = 9<br>';
echo '<br>';

echo '<br>';
echo '<b>Actual result:</b><br>';

$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
foreach($x as $key => $value)
{
  echo "Key is {$key}<br />";
  echo "var_dumping value";
  var_dump($value);
}

echo "<h1>7</h1>:";
echo 'My guess for output: <br>';
echo 'var_dumping value<br>';
echo '0 = 1<br>';
echo '1 = 3<br>';
echo '2 = 5<br>';
echo '0 = 2<br>';
echo '1 = 4<br>';
echo '2 = 6<br>';
echo '0 = 3<br>';
echo '1 = 6<br>';
echo '2 = 9<br>';

echo '';
echo '<b>Actual result:</b><br>';

$x = array( array(1,3,5), array(2,4,6), array(3,6,9) );
foreach($x as $value)
{
  echo "var_dumping value";
  var_dump($value);
}

echo "<h1>8</h1>:";
echo 'My guess for output:<br> ';
echo 'key is 0<br>';
echo 'hi - Dojo<br>';
echo 'game - awesome<br>';
echo 'key is 1<br>';
echo 'dude - fun<br>';
echo 'play - what?<br>';
echo 'key is 2<br>';
echo 'no - way<br>';
echo 'i am - confused?<br>';

echo '<br>';
echo '<b>Actual result:</b><br>';

$x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
foreach($x as $key => $value)
{
  echo "key is {$key}<br />";
  foreach($value as $key2=>$value2)
  {
    echo $key2 ." - " . $value2."<br />";
  }
}

echo "<h1>9</h1>:";
echo 'My guess for output: <br>';
echo 'key is 0<br>';
echo "['hi'=> 'Dojo','game' => 'awesome']<br>";
echo 'key is 1<br>';
echo "['dude => fun''play => what?']<br>";
echo 'key is 2<br>';
echo "['no - way','i am - confused?']<br>";

echo '<br>';
echo '<b>Actual result:</b><br>';

$x = array( array("hi"=>"Dojo", "game"=>"awesome"), array("dude"=>"fun", "play"=>"what?"), array("no"=>"way", "i am"=>"confused?") );
foreach($x as $y)
{
  foreach($y as $key=>$value)
  {
    echo $key ." - " . $value."<br />";
  }
}


?>
