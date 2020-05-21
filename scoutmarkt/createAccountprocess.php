<?php

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$accounttype = $_POST['accounttype'];
// $account_type = $_POST['account_type'];
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "scoutmarkt_db;

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO UserType(UserEmail, UserPassword, UserType) VALUES('$email', '$pass', '$accounttype')";
$result = $conn->query($sql);

if ( $result->num_row > 0 ){
   echo " successfully ";
}

close($conn);
?>
