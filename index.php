<?php
session_start();

include 'connection.php';

if(isset($_POST['username']) && $_POST['username'] !== "") {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    //$username = $db::real_escape_string($username);
    //$password = $db::real_escape_string($password);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = $db->query($sql);

    if ($result->rowCount() === 1) {
        echo"Je bent ingelogd!";
        header("Location: gallery.php");
		        exit();
    }
    else {
        echo "Er ging iets fout. <br>Zijn je inloggegevens correct?";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/main.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<form method="post">
    <!--<td>Gebruikersnaam:</td>-->
    <input type="text" name="username" size="20" maxlength="20"><br>
    <!--<td>Wachtwoord:</td>-->
    <input type="password" name="password" size="20" maxlength="20"><br>
    <!--<td></td>-->
    <input type="submit" name="loginButton" value="Inloggen">
</form>
</body>
</html>
