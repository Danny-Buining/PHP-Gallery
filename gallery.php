<?php
session_start();
include 'check.php';
$org_dir = "img/org/";
$images = scandir($org_dir);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./css/main.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>
<nav id="navGallery">
    <!-- <div id=""><a href="./index.php" id="">Login</a></div>
    <div id=""><a href="./index.php" id="">Register</a></div> -->
    <div id=""><a href="./upload.php" id="">Upload image</a></div>
    <div id=""><a href="./logout.php" id="">Log Out</a></div>
</nav>

<?php foreach ($images as $image) { 
    $path_parts = pathinfo( $org_dir.$image);
    if(in_array($path_parts['extension'],['jpg', 'png'])){?>

    <div id='containerGallery'>
        <img class='galleryImg' src='<?= $org_dir.$image ?>'>
    </div>
<?php }
} ?>
</body>
</html>