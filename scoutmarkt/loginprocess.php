<?php
session_start();
$usermail = $_POST['usermail'];
$pass = $_POST['pass'];
$_SESSION['mailadr'] = $usermail;

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "scoutmarkt_db";

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM UserType WHERE UserEmail = '$usermail' and UserPassword = '$pass'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["UserEmail"]. " - Name: " . $row["UserPassword"]. "<br>";
    $theType = $row['AccountType'];
}

if ( $theType == "Club"){
   header("location: clubHomePage.php");
}
else if ( $theType == "Scout"){
  header("location: scoutHomePage.php");
}
else if ( $theType == "Team"){
  header("location: teamHomePage.php");
}
else if ( $theType == "ScoutingAgency"){
  header("location: agencyHomePage.php");
}
else if ( $theType == "Fan"){
  header("location: fanHomePage.php");
}
else {
   echo " Type cannot be found. ";
}

close($conn);
?>
