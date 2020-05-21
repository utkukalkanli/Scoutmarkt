<!DOCTYPE html>

<html>
<head>
<style>

.insideButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  font-size: 12px;
  position:relative;
  margin-left: auto;
  margin-right: auto;
}

</style>
</head>
<body>
<?php
   session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
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
?>

<h1> Report created successfully </h1>

<?php
 $scoutmail = $_SESSION['mailadr'];
 $queryName = "SELECT * FROM Scout WHERE ScoutEmail = '$scoutmail'";
 $resultName = $conn->query($queryName);
 $theTaskId = $_SESSION['seeTaskID'];

 while($rowName = $resultName->fetch_assoc()) {
     //echo "id: " . $row["UserEmail"]. " - Name: " . $row["UserPassword"]. "<br>";
     $theScoutName = $rowName['ScoutName'];
     $theScoutID = $rowName['ScoutID'];
     $theAvailability = $rowName['Availability'];
     $theTask = $rowName['Task'];
 }

$someQuery= " INSERT INTO Report(ReportID, ScoutID,ReportName, ReportTime) VALUES(DEFAULT, '$theScoutID', '$theTask', '2020-05-22')" ;
$conn->query($someQuery);
$change2Query = "UPDATE Request r SET r.RequestStatus = 'Creating' WHERE r.RequestID = '$theTaskId'";
$conn->query($change2Query);
?>

<button class = "insideButton" onclick = "window.location.href='scoutHomePage.php'"> OK </button>
</body>
</html>
