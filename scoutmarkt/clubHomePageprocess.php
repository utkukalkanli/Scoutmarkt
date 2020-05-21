<?php
// connection

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "scoutmarkt_datab";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$accounttype = $_POST['accounttype'];
// $account_type = $_POST['account_type'];


$sql = "INSERT INTO UserType (UserEmail, UserPassword, UserType) VALUES('$email', '$pass', '$accounttype')";
if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
close($conn);
?>
