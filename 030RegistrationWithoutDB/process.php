<?php
// session_destroy();

session_start();
/*
With PHP input field that exists in the form, will exist so you don't need to have isset for each element.
If you want to check if the fields have inputs in them, check to see if the length is greater than 0.
*/

  $errors = array();


if($_POST['email'] != null) {

  if(! filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    $errors['email'] ="This email is not valid";


  } else {
    $errors['email'] = 'Cannot be empty';
  }

  if( $_POST['first_name'] != null) {
    if (!ctype_alpha(($_POST['first_name']))) {
      $errors['first_name'] = 'Must only contain alpha characters';
    }
  } else {
      $errors['first_name'] = 'Cannot be empty';
  }

  if( $_POST['last_name'] != null) {
    if (!ctype_alpha(($_POST['last_name']))) {
      $errors['last_name'] = 'Must only contain alpha characters';
    }
  } else {
    $errors['last_name'] = 'Cannot be empty';
  }

  if($_POST['password'] != null) {
    if (strlen($_POST['password']) <7) {
      $errors['password'] = 'Must be more than 6 characters';
    }
  } else {
      $errors['password'] = 'Cannot be empty';
  }

  if($_POST['confirmpassword'] != null) {
    if (strlen($_POST['password']) <7) {
      $errors['confirmpassword'] = 'Must be more than 6 characters';
    }
  } else {
      $errors['confirmpassword'] = 'Cannot be empty';
  }

  if($_POST['birthdate'] != null) {
    if (!preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/", $_POST['birthdate']))
      {
       $errors['birthdate'] = 'Must be in MM/DD/YYYY format';
      }

  } else {
    $errors['birthdate'] = 'Cannot be empty';
  }

  // If you want to check for a file - you can use $_FILE

  if(! empty($errors)) {
    $_SESSION['errors'] =  $errors;
    header('Location: index.php');
  }

echo 'Registration Complete!';

///from W3S
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

 ?>
