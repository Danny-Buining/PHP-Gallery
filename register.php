<?php
    if(!empty($_POST['regBtn'])) {
        $regUsername = $_POST['regUsername'];
        $regPassword = $_POST['regPassword'];
        $regEmail = $_POST['regEmail'];

        //$sql = "INSERT INTO users (username, password, email) VALUES(?, ?)";
        $sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES (?, ?, ?);";        
        $infoInsert = $db->prepare($sql);
        $regCheck = true;

        //dit werkt nog niet zoals het moet    die("Test");
        if(empty($regUsername)) {
            echo "Vul alle velden in!";
            $regCheck = false;
        } 
        elseif(empty($regPassword)) {
            echo "Vul alle velden in!" ;
            $regCheck = false;
        }
        elseif(empty($regEmail)) {
            echo "Vul alle velden in!" ;
            $regCheck = false;
        }
        elseif ($regCheck == false){    
            echo "Er is iets fout gegaan";
        }
        elseif ($regCheck != false) {
            $result = $infoInsert->execute([$regUsername, $regPassword, $regEmail]);
        }
        
    } 
?>
