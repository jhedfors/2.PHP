<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Result</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <div class="main">
      <h2>Submitted Information</h2>
      <div class="alignleft">
        Name:
      </div>
      <div class="info">
        <?= $_POST['name'] ?>
      </div>
      <div class="alignleft">
        Dojo Location:
      </div>
      <div class="info">
          <?= $_POST['location'] ?>
      </div>
      <div class="alignleft">
        Favorite Language:
      </div>
      <div class="info">
        <?= $_POST['language'] ?>
      </div>
      <div class="info">
        Comment:
      </div>
        <?= $_POST['comments'] ?>
        <form class="form" action="index.php" method="post">
          <input type="submit" value="Go Back">
        </form>
    </div>



  </body>
</html>
