<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Survey Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="main">
      <form class="form" action="result.php" method="post">
        <div class="alignleft">Your Name: </div>
        <input type="text" name="name" value=""><br>
        <div class="alignleft">Dojo Location:</div>
        <select class="location" name="location">
          <option value= "Mountain View">Mountain View</option>
          <option value= "Seattle">Seattle</option>
          <option value= "Los Angeles">Los Angelesw</option>
        </select><br>

        <div class="alignleft">Favorite Language:</div>
        <select class="language info" name="language">
          <option value= "English">English</option>
          <option value= "Bad English">Bad English</option>
          <option value= "Pidgion English">Pidgion English</option>
        </select>
        <br>
        <p>
          Comment (optional):
        </p>
        <input type="textarea" class="comments" name="comments">
        <input type="submit" value="Submit" class="button">
      </form>

    </div>

  </body>
</html>
