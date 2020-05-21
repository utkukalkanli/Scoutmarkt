<?php
   session_start();
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
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
  margin-left: 150px;
  border-radius: 10px;
}

.submitButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;

  text-decoration: none;

  font-size: 15px;
  position:relative;
  margin-left: 50px;
  top:0;
  right:0;
  border-radius: 10px;
}

.sendRequestButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;

  text-decoration: none;

  font-size: 16px;
  position:relative;
  margin-left: 350px;
  top:0;
  right:0;
  border-radius: 10px;
}

.seeScoutsButton {
  background-color: #FFF0F5; /* Lavender Blush*/
  border: #555555; /* Black */
  color: black;
  padding: 5px 15px;
  text-decoration: none;

  font-size: 12px;
  position:relative;
  margin-left: 10px;
  top:0;
  right:0;
  border-radius: 10px;
}

.styledimg {
background-repeat: no-repeat;
width: 100px;
height: 100px;
align: middle;
}

.listmiddle{
   display: block;
   margin-left: auto;
   margin-right: auto;
     width: 50%;
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
  width: 30%;
  float: left;
  height: 100%;
  background-color: #ffffff;
    z-index: 1010101010;
   border: black;
}



#col-2 {
  position: relative;
  width: 60%;
  float: right;
  height: 100%;
  background-color: #ffffff;
  z-index: 1010101010;

}

.vertical {
            border-left: 2px solid black;
            height: 100%;
            position:absolute;
            left: 35%;
        }

.horizantal {
            border-top: 2px solid black;
            height: 100%;
            position:absolute;
            top: 10%;
        }

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

.closeButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;

  text-decoration: none;

  font-size: 15px;
  position:relative;
  margin-left: 30px;
  top:0;
  right:0;
   border-radius: 10px;
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
<title1>New Request</title1>
<button class="logoutbutton">LogOut</button>
<button class="profilebutton">Profile</button>
</div>

<hr class="new1">


<?php

$selectName = $_SESSION['requestNameSelected'];
$selectedOrganization =  $_SESSION['organizationSelection'];
$selectedScoutNumber =  $_SESSION['selectedScoutNumber'];
$selectedPosition =  $_SESSION['organizationPosition'];
$selectedName =  $_SESSION['selectedAgencyName'] ;

$infiniteQuery = "INSERT INTO Request VALUES(DEFAULT,'$selectName','$selectedOrganization','$selectedScoutNumber','$selectedPosition','Requested')
INSERT INTO club_request(RequestID, ClubName)
SELECT RequestID, ClubName
FROM Request, Club
WHERE RequestName = '$selectName' AND ClubName = '$theClubName'";

$thequeryofscoutnewrequest = $conn->query($infiniteQuery);

$lastRequestQuery = "INSERT INTO agency_response (AgencyName,RequestID,ClubName)
SELECT AgencyName, RequestID, ClubName
FROM ScoutingAgency, Request, Club
WHERE AgencyName = '$selectedAgencyName' AND
RequestID = (SELECT RequestID
FROM Request
WHERE RequestName = '$selectName') AND
ClubName = (SELECT ClubName
FROM Club
WHERE ClubName = '$theClubName')";

$otherotherother = $conn->query($lastRequestQuery);
?>


<div>

   <title1> New request is created. </title1>
   <button class = "closeButton" onclick="window.location.href='clubHomePage.php'"> OK. </button>

</div>

</div>
</body>

<script>

</script>


</html>
