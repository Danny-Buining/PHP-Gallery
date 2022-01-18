<?php //require_once 'connection.php'; //Zet de code hier neer van connection.php 

session_start();

include 'connection.php';

if(isset($_POST['username']) && $_POST['username'] !== "") {
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $username = $db::real_escape_string($username);
    $password = $db::real_escape_string($password);

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = $conn->query($sql);

    if($result->num_rows === 1) {
        echo"Je bent ingelogd!";
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
    <table class="login-Table">
        <tr>
            <td>Gebruikersnaam:</td>
            <td><input type="text" name="username" size="20" maxlength="20"></td>
        </tr>
        <tr>
            <td>Wachtwoorden:</td>
            <td><input type="text" name="password" size="20" maxlength="20"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="loginButton" value="Inloggen"></td>
        </tr>
    </table>
</form>
</body>
</html>
