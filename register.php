<?php
    if(!empty($_POST['regBtn'])) {
        $regUsername = $_POST['regUsername'];
        $regPassword = $_POST['regPassword'];
        $regEmail = $_POST['regEmail'];

        //$sql = "INSERT INTO users (username, password, email) VALUES(?, ?)";
        $sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES (?, ?, ?);";        
        $infoInsert = $db->prepare($sql);
        $result = $infoInsert->execute([$regUsername, $regPassword, $regEmail]);
        
        if($result){
            echo "Account is aangemaakt!";
        }
        else {
            echo "Er is iets mis gegaan :(";
        }
    } 
?>
