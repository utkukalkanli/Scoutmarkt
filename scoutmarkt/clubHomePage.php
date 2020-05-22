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
<!DOCTYPE html>
<html>
<head>
<style>
p{
  color: black;
  font-size: 60px;
  text-align: center;
  text-shadow: 2px 2px 2px #008CBA;
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
  border-radius: 10px;
}

button:disabled,
button[disabled]{
  border: 1px solid #999999;
  background-color: #cccccc;
  color: #666666;
  border-radius: 10px;
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
  border-radius: 10px;
}

.seeRequestButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;


  text-decoration: none;

  font-size: 16px;
  position:relative;
  margin-left: 15px;
  top:0;
  right:0;
  border-radius: 10px;
}

.requestOptionsButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;


  text-decoration: none;

  font-size: 13px;
  position:relative;
  margin-left: 15px;
  top:0;
  right:0;
  border-radius: 10px;
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

.requestNewScoutButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-top: 4px;
  margin-left: 350px;
  border-radius: 10px;
}

.changeAgencyButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;

  text-decoration: none;

  font-size: 11px;
  position:relative;
  margin-left: 15px;
  top:0;
  right:0;
  border-radius: 10px;
}

.seeReportButton {
  background-color: #90EE90; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;

  text-decoration: none;

  font-size: 16px;
  position:relative;
  margin-left: 15px;
  top:0;
  right:0;
  border-radius: 10px;
}

.imageRe{
background-repeat: no-repeat;
width: 100px;
height: 100px;
align: middle;
margin-left: 15px;
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
  width: 20%;
  float: left;
  height: 100%;
  background-color: #ffffff;
    z-index: 1010101010;
   border: black;
}



#col-2 {
  position: relative;
  width: 70%;
  float: right;
  height: 100%;
  background-color: #ffffff;
  z-index: 1010101010;

}

.vertical {
            border-left: 2px solid black;
            height: 100%;
            position:absolute;
            left: 25%;
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
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
    $clubmail = $_SESSION['mailadr'];
    $queryName = "SELECT * FROM Club WHERE ClubEmail = '$clubmail'";
    $resultName = $conn->query($queryName);
    while($rowName = $resultName->fetch_assoc()) {
        //echo "id: " . $row["UserEmail"]. " - Name: " . $row["UserPassword"]. "<br>";
        $theClubName = $rowName['ClubName'];
        $theLeague = $rowName['League'];
        $theRank = $rowName['ClubRank'];
        $theCountry = $rowName['Country'];
        $theOrganization = $rowName['Organization'];
    }

    echo "<title1> Welcome Club {$theClubName} </title1>";



?>
<button class="logoutbutton">LogOut</button>
<button class="profilebutton">Profile</button>
</div>

<hr class="new1">

<?php

$resultTNo=mysqli_query($conn,"SELECT tof.RespondingClubName as ClubName, COUNT(tof.TransferID) AS total_offer_count FROM
TransferOffer tof
JOIN Club c ON c.ClubName = tof.RespondingClubName
WHERE tof.RespondingClubName = '$theClubName' and tof.TransferStatus = 'Active'");
$dataTNo=mysqli_fetch_assoc($resultTNo);
$thenumberis = $dataTNo['total_offer_count'];

?>
<div id="col-1">
 <h1> </h1>
  <?php echo "<br> <br> <d> League: {$theLeague}</d>" ?>
  <?php echo "<br> <br> <d> Rank: {$theRank}</d>" ?>
  <?php echo "<br> <br> <d> Country: {$theCountry}</d>" ?>
  <?php echo "<br> <br> <d> Organization: {$theOrganization}</d>" ?>
  <br> <br>


  <a href="#" class="notification" onclick="window.location.href='clubTransferOffers.php'">
  <span>Transfer Offers</span>
  <span class="badge"><?php echo $thenumberis; ?></span>
</a>

<button class = "seeReportButton" onclick="window.location.href='clubSeeReport.php'"> See Completed Reports </button>

</div>

<div class = "vertical"></div>

<div id="col-2">

  <button class="requestNewScoutButton" onclick="window.location.href='clubNewRequestPage.php'">Request New Scout</button>
  <br><br>

<?php

$queryTable = "SELECT * FROM Request NATURAL JOIN agency_response WHERE ClubName = '$theClubName'";
$resultTable = mysqli_query($conn, $queryTable);
 ?>
<table>
  <tr>
    <th>Name</th>
    <th>Status</th>
    <th>Organization</th>
    <th>Position </th>
    <th>Scout No</th>
    <th>Agency</th>
    <th>Action</th>
  </tr>

  <?php while($rows = mysqli_fetch_assoc($resultTable) ) {
      ?>
     <tr>
      <td> <?php echo $rows['RequestName']?> </td>
      <td><span class="purpleText"> <?php echo $rows['Answer']?> </span></td>
      <td> <?php echo $rows['Organization']?>  </td>
      <td> <?php echo $rows['PlayerPosition']?>  </td>
      <td> <?php echo $rows['NumberOfScouts']?>  </td>
      <td> <?php echo $rows['AgencyName']?>  </td>
      <td>
         <?php if( $rows['Answer'] == 'rejected'){ ?>
            <button class="changeAgencyButton" onclick="window.location.href='clubChangeAgency.php'">Change Agency</button>
         <?php } ?>
      <?php if( $rows['Answer'] == 'reported'){ ?>
            <button class="seeReportButton" onclick="window.location.href='clubChangeAgency.php'">See Report</button>
         <?php } ?>
      </td>
     </tr>
     <tr>
        <?php
  }
  ?>
</table>


</div>

</body>

<script>
async function requestFunction(e) {
   e.preventDefault();
   document.body.innerHTML+= '<br>'+ await(await fetch('?remove=1')).text();
 }

</script>

<?php
  function requestFunction() { echo 'Day removed'; }

  if (isset($_GET['remove'])) { return removeday(); }
?>

</html>
