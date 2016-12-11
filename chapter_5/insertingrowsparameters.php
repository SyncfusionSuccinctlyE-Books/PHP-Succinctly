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
$contact_name = "Another John Doe";
$email_addr = "anotherjohndoe@myemaildomain.com";
$phonenumber = "(654)290-4567";
$subject = "Adding rows with parameters";
$message = "This row was added using parameters";

$sql = "INSERT INTO contacts (name,email,phonenumber,subject,message) VALUES (?,?,?,?,?)";

$statement = $mysqli->stmt_init();

if ($statement->prepare($sql))
{
    $statement->bind_param("sssss",$contact_name,$email_addr,$phonenumber,$subject,$message);
	$statement->execute();
	$statement->close();
}

$mysqli->close();

?>
