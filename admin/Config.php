<?php
error_reporting(0);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "School_Manager";
// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}

include "School_Class.php";

$School_Class = new School_Manager();
