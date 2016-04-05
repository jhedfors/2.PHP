<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      * {
        margin: 0px;
        line-height: 0px;
        padding: 0px;
      }
      .row{
        margin: 0px;
      }
      div.checkerboard{
        padding: 20px;
      }
      .red{
        height: 40px;
        width: 40px;
        background-color: red;
        display: inline-block;
      }
      .black{
        height: 40px;
        width: 40px;
        background-color: black;
        display: inline-block;
      }
    </style>
  </head>
  <body>
    <div class="checkerboard">
      <?php

      function changeBlockColor($current){

        if($current=='red'){
          return 'black';
        }
        else {
          return 'red';
        }

      }

      $blockcolor='red';
      for ($i=0; $i < 8; $i++) {
        echo "<div class='row'>";
        for ($j=0; $j < 8 ; $j++) {
            echo "<div class=" . $blockcolor ."></div>";
            $blockcolor = changeBlockColor($blockcolor);
        }
        echo "</div>";
        $blockcolor = changeBlockColor($blockcolor);
      }
      ?>


    </div>
  </body>
</html>
