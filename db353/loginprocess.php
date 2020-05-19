<?php

$usermail = $_POST['usermail'];
$pass = $_POST['pass'];

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "cs353";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM UserType WHERE UserEmail = '$usermail' and UserPassword = '$pass'";
// $typeOf = "SELECT UserType FROM UserType WHERE UserEmail = '$usermail' and UserPassword = '$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  header("location: clubHomePage.php");
}

else {
         echo "Your Login Name or Password is invalid";
      }

?>
