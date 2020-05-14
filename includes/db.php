<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'auth';


$db = new mysqli($servername, $username, $password,$dbname);

if ($db->connect_error) {
  die("Please import the sql file to the database: " . $conn->connect_error);
}

?>