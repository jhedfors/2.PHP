<?php
 session_start();
 ?>

 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Great Number Game</title>
    <script src="jquery.min.js"></script>
  </head>
  <script type="text/javascript">

  $(document).ready(function(){
    $(".correct").hide();
    $(".toohigh").hide();
    $(".toolow").hide();
    $(".form").show();
  });
</script>

<?php

if (!isset($_SESSION['random'])) {
  $_SESSION['random'] = rand(1,100);
}

if (isset($_POST['guess'])) {

 if($_POST['guess']==$_SESSION['random']){
 ?>
<script type="text/javascript">
$(document).ready(function(){
  $(".correct").show();
  $(".form").hide();
  $('button').click(function(){
    alert('');
  });
});
</script>
<?php
 session_destroy();
}
else if($_POST['guess']<$_SESSION['random']){
 ?>
<script type="text/javascript">
$(document).ready(function(){
  $(".toolow").show();
});
</script>
<?php
  $_POST['guess'] = "";
  }
else if($_POST['guess']>$_SESSION['random']){
?>
<script type="text/javascript">
$(document).ready(function(){
  $(".toohigh").show();
});
</script>
<?php
 $_POST['guess'] = "";
}
}
?>
  <style media="screen">
    h1, p, form, button{
      text-align: center;
      margin: 10px;:
    }

    div.response {
      height: 200px;
      width: 200px;
      margin: auto;
      text-align: center;
      padding: 20px;
      margin-bottom: 10px;
    }

    div.toohigh {
      background: red;
      color: white;
    }

    div.toolow {
      background: red;
      color: white;
    }

    div.correct {
      background: green;
      color: white;
    }
  </style>
  <body>

    <h1>Welcome to the Great Number Game!</h1>
    <p>
      I am thinking of a number between 1 and 100<br>
      Take a guess!
    </p>
    <div class="toolow response">
      <h3>Too Low</h3>
    </div>
    <div class="toohigh response">
      <h3>Too High</h3>
    </div>
    <div class="correct response">
      <h3>was the number!</h3>
      <form class="playagain" action="index.php" method="post">
        <input type="submit" value="Play Again" >
      </form>
    </div>

    <form class="form" action="index.php" method="post">
      <input type="text" name="guess" value="" autofocus ><br>
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
