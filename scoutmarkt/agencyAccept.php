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
   $agencymail = $_SESSION['mailadr'];

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

.styledimg {
background-image: url(https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/522eb88f-6823-4672-a8de-49fc589745db/d67vche-6608fd42-98a0-4448-a20b-ce9b0a596268.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvNTIyZWI4OGYtNjgyMy00NjcyLWE4ZGUtNDlmYzU4OTc0NWRiXC9kNjd2Y2hlLTY2MDhmZDQyLTk4YTAtNDQ0OC1hMjBiLWNlOWIwYTU5NjI2OC5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.9SWVHT1Fh-HZXZBIxyuJvGhTkeipbN5rJFQeeOIEwVY);
background-repeat: no-repeat;
width: 100px;
height: 100px;
align: middle;
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
   $queryName = "SELECT * FROM ScoutingAgency WHERE AgencyEmail = '$agencymail'";
   $resultName = $conn->query($queryName);
   while($rowName = $resultName->fetch_assoc()) {
      //echo "id: " . $row["UserEmail"]. " - Name: " . $row["UserPassword"]. "<br>";
      $theAgencyName = $rowName['AgencyName'];
      $noOfScouts = $rowName['NumberOfScouts'];
   }
    echo "<title1> Welcome Agency {$theAgencyName} </title1>";

    ?>
<button class="logoutbutton">LogOut</button>
</div>

<hr class="new1"></hr>
<div id="col-1">
 <h1> </h1>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSC1VyBdUc9-Z0DV3OZDT3DOKhaWf_HnlTIbqJCPFfXgMSZvrTQ&usqp=CAU" alt="Paris" class="center">
  <?php echo "<br> <br> <d> Number of Scouts: {$noOfScouts}</d>"; ?>
  <br> <br>
    <button class="closeButton" onclick="window.location.href='agencyHomePage.php'"> Close </button>
</div>

<div class = "vertical"></div>

<div id="col-2">

   <?php
   $acceptQuery = "UPDATE Request, agency_response
SET RequestStatus = 'Accepted', Answer = 'Accepted'
WHERE Request.RequestID = @requestid_input AND agency_response.RequestID = @requestid_input;
";
   $resultAccept = $conn->query($acceptQuery);
   ?>

</div>
</body>
</html>
