<?php header("Content-type: text/css");
session_start();


?>

div.score{
  color: <?= $scoreColor ?>;
}


*, p{
  padding: 0px;
  margin: 0px;
}



.wrapper{
  margin: 30px;
}
h3.title{
  display: inline-block;
}
div.row1{
  padding-bottom: 10px;
}
div.score{
  display: inline-block;
  height: 20px;
  width: 100px;
  border: 1px solid black;
}


div.locations{
  border: 1px solid black;
  width: 100px;
  height: 100px;
  padding: 10px;
  margin: 5px;
  display: inline-block;
  text-align: center;
}

p.description{
  display: block;
  height: 50px;
}

div.results{
  border: 1px solid black;
  height: 100px;
  width: 520px;
  margin: 5px;
  overflow: scroll;
}
.won{
  color: green;
}

.lost{
  color: red;
}
