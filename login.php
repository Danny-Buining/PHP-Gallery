<?php
session_start();

//include 'connection.php';

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