<?php
    session_destroy(); // beindig de sessie
    header("Location: index.php"); //terug verwijzen naar de inlog pagina
    exit; //en je header netjes afsluiten
?>