<?php 
    session_start();
    include 'connection.php';
    include 'login.php';
    include 'register.php';
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
<form method="post" class="FormLogin">

<p>Inloggen</p>

<table>
    <tr> 
        <td>Username: </td>
        <td><input type="text" name="username" size="20" maxlength="20" class="formInputLogin"> </td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="password" size="20" maxlength="20" class="formInputLogin"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="loginButton" value="Inloggen" class="formButtonLogin"></td>
    </tr>
</table>
</form>


<form method="POST" class="formReg"> <!-- dit werkt nog niet -->
    
<p>Register</p>

<table>
    <tr>
        <td>Username:</td>
        <td><input type="text" name="regUsername" size="20" maxlength="20" class="regInput"> </td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><input type="password" name="regPassword" size="20" maxlength="20" class="regInput"></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input type="text" name="regEmail" size="200" maxlength="200" class="regInput"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="regBtn" value="Register" class="regBtn"></td>
    </tr>
</table>
</form>
</body>
</html
