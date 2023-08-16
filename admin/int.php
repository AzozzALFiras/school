<?php

include("Config.php");

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: 0x_Login.php");
    exit;
}


?>