<?php
    session_start();
    if(!isset($_SESSION["zcg"]) || $_SESSION["zcg"] != "YOUR SETTINGS") 
    { 
        exit('Forbidden'); 
    }
?>
