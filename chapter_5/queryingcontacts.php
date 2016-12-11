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

$sql = "SELECT contacts.* FROM contacts ORDER BY contacts.name";
$resultset = $mysqli->query($sql);

if ($resultset->num_rows > 0)
{
	while ($datarow = $resultset->fetch_assoc())
	{
		echo "Contact Id: " . $datarow["ID"] .  " - Contact Name: " . $datarow["NAME"] . " - Contact Email: " . $datarow["EMAIL"] . "<br />";
	}
}
else
{
   echo "No contacts available";	
}
$mysqli->close();
?>
