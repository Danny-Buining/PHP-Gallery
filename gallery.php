<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./css/main.css" rel="stylesheet">
    <title>Gallery</title>
</head>
<body>

<div id="logoutButtonOpmaak">
    <a href="./logout.php" id="logoutButton">Log Out</a>
</div>

<?php
$images = ["1", "2", "3", "4", "5", "6", "7", "8"];

foreach ($images as $image) {
    echo "  <div id='containerGallery'>
                <img class='galleryImg' src='./img/$image.jpg'>
            </div>";    
}
?>
</body>
</html>