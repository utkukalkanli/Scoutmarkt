<!DOCTYPE html>
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
<html>
<head>
<style>
p{
  color: black;
  font-size: 60px;
  text-align: center;
  text-shadow: 2px 2px 2px #008CBA;
}

/* icon button - home */
.btn {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 15px 16px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 4px;
  margin-right: 280px;
  position:absolute;
  top:0;
  right:0;
}

c{
  color: grey;
  font-size: 15px;
  text-align: center;
}

headline {
text-shadow: 2px 2px 2px #008CBA;
font-size: 60px;
text-align: center;
}

title1 {
color: black;
text-shadow: 2px 2px 2px #008CBA;
font-size: 40px;
margin-top: 10px;
padding: 15px 20px;
}

.profilebutton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;

  text-decoration: none;

  font-size: 16px;
  margin-top: 4px;
  margin-right: 150px;
  position:absolute;
  top:0;
  right:0;
}

button:disabled,
button[disabled]{
  border: 1px solid #999999;
  background-color: #cccccc;
  color: #666666;
}

.logoutbutton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;

  text-decoration: none;

  font-size: 16px;
  margin-top: 4px;
  margin-right: 10px;
  position:absolute;
  top:0;
  right:0;
}

.seeButton {
  background-color: #87CEFA; /* Light Blue */
  border: #555555; /* Black */
  color: white;
  padding: 10px 10px;

  text-decoration: none;

  font-size: 12px;
  position:relative;
  margin-bottom: 10px;
  top:0;
  right:0;
}

.submitButton {
   background-color: #191970; /* Midnight Blue */
   border: #555555; /* Black */
   color: white;
   padding: 10px 10px;

   text-decoration: none;

   font-size: 12px;
   position:relative;
   margin-bottom: 10px;
   top:0;
   right:0;
}


d {
color: black;
font-size: 20px;
margin-top: 0px;
margin-right: 10px;
padding: 30px 30px;
}

smallD {
color: black;
font-size: 15px;
margin-top: 0px;
margin-right: 10px;
padding: 30px 30px;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}


/* Split Part */
#col-1 {
  position: relative;
  width: 40%;
  float: left;
  height: 100%;
  background-color: #ffffff;
    z-index: 1010101010;
   border: black;
}

#col-2 {
  position: relative;
  width: 40%;
  float: right;
  height: 100%;
  background-color: #ffffff;
  z-index: 1010101010;

}

.vertical {
            border-left: 2px solid black;
            height: 100%;
            position:absolute;
            left: 45%;
        }

.horizantal {
            border-top: 2px solid black;
            height: 100%;
            position:absolute;
            top: 10%;
        }

/* Split Part Ends */

/*notification*/
.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 10px;
  margin-left: 20px;
  margin-bottom: 10px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}

/*table*/
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #000000;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: #b4c3d8;
}

tr:nth-child(even){
  background-color: #d9e1ec;
}

/* text colors */

.redText
{
    color: red;
}

.yellowText
{
    color: yellow;
}

.greenText
{
    color: green;
}

.purpleText
{
    color: purple;
}

/* Red border */
hr.new1 {
  border-top: 2px solid black;
}

</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body>

<div>
   <?php
    $scoutmail = $_SESSION['mailadr'];
    $queryName = "SELECT * FROM Scout WHERE ScoutEmail = '$scoutmail'";
    $resultName = $conn->query($queryName);

    while($rowName = $resultName->fetch_assoc()) {
        //echo "id: " . $row["UserEmail"]. " - Name: " . $row["UserPassword"]. "<br>";
        $theScoutName = $rowName['ScoutName'];
        $theScoutID = $rowName['ScoutID'];
        $theAvailability = $rowName['Availability'];
        $theTask = $rowName['Task'];
    }

    echo "<title1> Welcome {$theScoutName} </title1>";

?>
<button class="logoutbutton">LogOut</button>
<button class="btn"><i class="fa fa-home"></i></button>
</div>

<hr class="new1">

<div id="col-1">
   <?php
    echo "<h1> Current Task:  </h1>";
    if ( $theAvailability == true ){
      echo "<d> None. </d>";
   }
   else{
      echo "<d> {$theTask} </d>";
   }
 ?>
 <br><br>

 <?php

 $queryTable = "SELECT * FROM assigns a JOIN Request r ON a.RequestID = r.RequestID JOIN Scout s ON s.ScoutID = a.ScoutID WHERE s.ScoutEmail = '$scoutmail'";
 $resultTable = mysqli_query($conn, $queryTable);
 ?>

   <table>
  	<tr>
    	<th> Task </th>
        <th> Details </th>
        <th> Submit </th>

        <?php while($rows = mysqli_fetch_assoc($resultTable) ) {
            ?>
           <tr>
            <td> <?php echo $rows['RequestName']?> </td>
            <td>

               <?php
               if ( $rows['RequestStatus'] == 'Ongoing'){ ?>
                  <button class="seeButton" onclick="window.location.href='scoutCreateReport.php'" <?php $_SESSION['seeTaskID'] = $rows['RequestID']?> >Create Report</button>
               <?php } ?>

               <?php
               if ( $rows['RequestStatus'] == 'Creating'){ ?>
                  <button class="seeButton" onclick="window.location.href='scoutSeeDetails.php'" <?php $_SESSION['seeTaskID'] = $rows['RequestID']?> >See Report</button>
               <?php } ?>
            </td>

            <td>
               <button class="submitButton" onclick="window.location.href='submitReport.php'" id = <?php echo $rows['RequestID']?> name = <?php echo $rows['RequestName']?> >Submit</button>
            </td>
         </tr>
              <?php
        }
        ?>

   </table>

</div>

<div class = "vertical"></div>

<div id="col-2">
<?php

$sendReportQuery = "SELECT ReportID, ClubName FROM assigns NATURAL JOIN club_request NATURAL JOIN Report";
$resultReport = $conn->query($sendReportQuery);
while($rowName = $resultReport->fetch_assoc()) {
    $clubNameForReport = $rowName['ClubName'];
    $reportIDForReport = $rowName['ReportID'];
}

$insideReport =  "INSERT INTO evaluate_report(ReportID,ClubName) VALUES('$reportIDForReport','$clubNameForReport')" ;
$conn->query($insideReport);
?>

</div>


</body>


<script>

</script>

</html>
