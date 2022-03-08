<?php
    if(!empty($_POST['regBtn'])) {
        $regUsername = $_POST['regUsername'];
        $regPassword = $_POST['regPassword'];
        $regEmail = $_POST['regEmail'];

        //$sql = "INSERT INTO users (username, password, email) VALUES(?, ?)";
        $sql = "INSERT INTO `users` (`username`, `password`, `email`) VALUES (?, ?, ?);";        
        $infoInsert = $db->prepare($sql);
        $result = $infoInsert->execute([$regUsername, $regPassword, $regEmail]);
        $regCheck ;
        
        //dit werkt nog niet zoals het moet
        if(empty($regUsername)) {
            echo "Vul een gebruikersnaam in!";
            $regCheck = false;
        } 

        if(empty($regPassword)) {
            echo "Vul een wachtwoord in!" ;
            $regCheck = false;
        }
        
        if(empty($regEmail)) {
            echo "Vul een email in" ;
            $regCheck = false;
        }

        if ($regCheck == false){
            echo "Er is iets fout gegaan";
        }
        else {
            $result;
        }
    } 
?>
