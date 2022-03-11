<?php
  // include './includes/gd_imagestyle.php';
  session_start();
  include 'check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/main.css" rel="stylesheet">
    <title>Upload file</title>
</head>
<body>
<nav id="navGallery">
    <!-- <div id=""><a href="./index.php" id="">Login</a></div>
    <div id=""><a href="./index.php" id="">Register</a></div> -->
    <div id=""><a href="./gallery.php" id="">Gallery</a></div>
    <div id=""><a href="./logout.php" id="">Log Out</a></div>
</nav>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <table id="TableUpload">
        <tr>
            <td>Upload Image -></td>
            <td><input type="file" name="yourFile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Uploaden!"></td>
        </tr>
    </table>
</form>
    
<?php
if(isset($_POST["submit"])) {
  
  $target_dir = "img/org/";
  $target_file = $target_dir . basename($_FILES["yourFile"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["yourFile"]["tmp_name"]);
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
  if ($_FILES["yourFile"]["size"] > 1000000) {
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
    if (move_uploaded_file($_FILES["yourFile"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["yourFile"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}
?>
</body>
</html>