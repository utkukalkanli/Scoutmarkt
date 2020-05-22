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

.closeButton {
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

.declinedButton {
  background-color: #FF6347; /* Red */
  border: #555555; /* Black */
  color: black;
  padding: 7px 7px;

  text-decoration: none;

  font-size: 12px;
  position:relative;
  margin-left: 15px;
  top:0;
  right:0;
  border-radius: 10px;
}

.acceptButton{
   background-color: #90EE90; /* Green */
   border: #555555; /* Black */
   color: black;
   padding: 7px 7px;

   text-decoration: none;

   font-size: 12px;
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
  width: 90%;
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

    echo "<title1> Transfer Offers </title1>";

?>
<button class="logoutbutton" onclick="window.location.href='login.php'">LogOut</button>
</div>

<hr class="new1">

<div id="col-1">
 <h1> </h1>
  <?php echo "<br> <br> <d> League: {$theLeague}</d>" ?>
  <?php echo "<br> <br> <d> Rank: {$theRank}</d>" ?>
  <?php echo "<br> <br> <d> Country: {$theCountry}</d>" ?>
  <?php echo "<br> <br> <d> Organization: {$theOrganization}</d>" ?>
  <br> <br>

  <button class="closeButton" onclick="window.location.href='clubHomePage.php'"> Close </button>
</div>

<div class = "vertical"></div>


<div id="col-2">
   <?php

   $transferTable = "SELECT * FROM
   responds r JOIN
   TransferOffer tf
   ON r.TransferID = tf.TransferID
   JOIN FootballPlayer fp
   ON fp.PlayerID = tf.PlayerID
   WHERE tf.RespondingClubName = '$theClubName' AND r.ClubAnswer = 'Waiting' ";
   $resultTransfer = $conn->query($transferTable);
    ?>
   <table>
     <tr>
       <th>Caller Club</th>
       <th>Player Name</th>
       <th>Transfer Type</th>
       <th>Fee </th>
       <th>Status</th>
       <th>Action</th>
     </tr>

     <?php while($rows = mysqli_fetch_assoc($resultTransfer) ) {
         ?>
        <tr>
         <td> <?php echo $rows['CallingClubName']?> </td>
         <td> <?php echo $rows['PlayerID']?> </td>
         <td> <?php echo $rows['TransferType']?>  </td>
         <td> <?php echo $rows['Fee']?>  </td>
         <td> <?php if ($rows['TransferStatus'] == 'Completed'){
                     echo 'Active';}
                    else {
                       echo $rows['TransferStatus'];
                    }
                    ?>
                   </td>
         <td>  <?php
          if ($rows['TransferStatus'] == 'Active'){ ?>
             <button class="acceptButton" onclick="window.location.href='clubTransferAccept.php'"> Accept </button>
             <button class="declinedButton" onclick="window.location.href='clubTransferDecline.php'"> Decline </button>
          <?php } ?>
          <?php
          if ($rows['TransferStatus'] == 'Completed'){ ?>
             <button class="acceptButton" onclick="window.location.href='clubTransferAccept.php'"> Accept </button>
             <button class="declinedButton" onclick="window.location.href='clubTransferDecline.php'"> Decline </button>
          <?php } ?>
         </td>
        </tr>
        <tr>
           <?php
           $theRespondID = $rows['RespondsID'];
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

<script>
function acceptFunction() {
  <?php
  $acceptQuery = "UPDATE responds r
 JOIN Club c ON r.ClubName = c.ClubName
 AND c.ClubName = '$theClubName' AND r.RespondsID = '$theRespondID'
 SET ClubAnswer = 'Accepted'";
  $resultAccept = $conn->query($acceptQuery);
  ?>
}

function declinedFunction() {
   <?php
   $declinedQuery = "UPDATE responds r
  JOIN Club c ON r.ClubName = c.ClubName
  AND c.ClubName = '$theClubName' AND r.RespondsID = '$theRespondID'
  SET ClubAnswer = 'Declined'";
   $resultDecline = $conn->query($declineQuery);
   ?>
}
</script>


</html>
