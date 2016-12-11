<?php

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'mypassword'; 
  $database = 'contactinfo';
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);

if ($mysqli->connect_errno) {
    echo "We're sorry. The website can not connect to the database <br />";
    echo "Error: MySQL connection failed: <br />";
    echo "Errno: " . $mysqli->connect_errno . "<br />";
    echo "Error: " . $mysqli->connect_error . "<br />";
    
    exit;
}
echo "MySql connection succeeded";
$mysqli->close();

?>