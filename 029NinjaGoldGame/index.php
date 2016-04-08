<?php session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ninja Gold Game</title>
    <link rel="stylesheet" href="style.css.php">
  </head>
  <body>
    <div class="wrapper">
      <div class="row1">
        <h3 class="title">Your Gold:</h3>
        <div class="score">
          <?php
            if(!isset($_SESSION['gold'])){
              echo '0';
            }
            else{
              echo $_SESSION['gold'];
            }


           ?>
         </div>

      </div>
      <div class="row2">
        <div class="locations">
          <p>Farm</p>
          <p class="description">
            (earns 10-20 golds)
          </p>
          <form class="FindGold_Farm" action="process.php" method="post">
            <input type="hidden" name="building" value="farm" />
            <input type="submit" value="Find Gold!"/>
          </form>
        </div>
        <div class="locations">
          <p>Cave</p>
          <p class="description">
            (earns 5-10 golds)
          </p>
          <form class="FindGold_Cave" action="process.php" method="post">
            <input type="hidden" name="building" value="cave" />
            <input type="submit" value="Find Gold!"/>
          </form>
        </div>
        <div class="locations">
          <p>House</p>
          <p class="description">
            (earns 2-5 golds)
          </p>
          <form class="FindGold_House" action="process.php" method="post">
            <input type="hidden" name="building" value="house" />
            <input type="submit" value="Find Gold!"/>
          </form>
        </div>
        <div class="locations">
          <p>Casino!</p>
          <p class="description">
            (earns/takes 0-50 golds)
          </p>
          <form class="FindGold_Casino" action="process.php" method="post">
            <input type="hidden" name="building" value="casino" />
            <input type="submit" value="Find Gold!"/>
          </form>
        </div>

      </div>
      <div class="row3">
        <p>
          Activities:
        </p>
        <div class="results">
          <?php
            if (!isset($_SESSION['activities'])) {
              echo '';
            }

            else{
              echo $_SESSION['activities'];
            }
           ?>

        </div>

        <form class="startover" action="process.php" method="post">
          <input type="hidden" name="startover" value="startover" />
          <input type="submit" value="Start Over"/>
        </form>


      </div>

    </div>

  </body>
</html>
