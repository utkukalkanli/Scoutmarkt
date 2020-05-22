
<!DOCTYPE html>
<?php

   session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
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

.sendReportButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;

  text-decoration: none;

  font-size: 16px;
  position:relative;
  margin-bottom: 300px;
  top:0;
  right:0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #000000;
}

li {
  float: left;
  border-right:1px solid #008CBA;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #008CBA;
}
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
<title1>Welcome Fan </title1>
<button class="logoutbutton">LogOut</button>
<button class="profilebutton">Profile</button>
<button class="btn"><i class="fa fa-home"></i></button>
</div>

<hr class="new1">
<ul>
  <li><a class="active" href="#home">Your Team</a></li>
  <li><a href="#news">Add Member</a></li>
</ul>

<div id="col-1">
 <h1> Your Dream Team </h1><br>
   <table>
  	<tr>
    	  <th> Name </th>
        <th> Defence </th>
        <th> Midfield </th>
        <th> Forward</th>

        <tr>
    <td> Request A </td>
    <td> <button class="insideButton">See</button> </td>
    <td> <button class="insideButton">Submit</button> </td>
    </tr>
   </table>
   <form>
     <input type="text" name="dream_team_name" value="Team Name">
     <br>
     <input type="text" name="formation_def" value="Def number">
     <br>
     <input type="text" name="formation_mid" value="Midfield number">
     <br>
     <input type="text" name="formation_for" value="Forward number">
     <br>
     <input type="submit" name="" value="Create Dream Team">
     <br>
   </form>
</div>

<div>
   <?php

   $fanmail = $_SESSION['mailadr'];
   # user displays dream team info it it has been created before.
   $dream_team_view_query = "SELECT dt.DreamTeamName, dt.FormationDef, dt.FormationMid, dt.FormationFor, fp.FirstName, fp.LastName, fp.Age, fp.Skills FROM
   DreamTeam dt JOIN
   create_dream_team cdt ON dt.DreamTeamName = cdt.DreamTeamName
   JOIN Fan f ON f.FanID = cdt.FanID
   JOIN consist_of cf ON cf.DreamTeamName = dt.DreamTeamName
   JOIN FootballPlayer fp ON cf.PlayerID = fp.PlayerID
   AND f.FanEmail = 'mailadr' ";

   $resultName = $conn->query($dream_team_view_query);
   ## DREAM TEAM DISPLAY
   while($rowName = $resultName->fetch_assoc()) {
    //echo "id: " . $row["UserEmail"]. " - Name: " . $row["UserPassword"]. "<br>";
    $theDreamTeamName = $rowName['DreamTeamName'];
    $theformationDef = $rowName['FormationDef'];
    $theformationMid = $rowName['FormationMid'];
    $theformationMid = $rowName['FormationFor'];
    $player_first_name = $rowName['FirstName'];
    $player_last_name = $rowName['LastName'];
    $player_age = $rowName['Age'];
    $player_skills = $rowName['Skills'];
  }
   echo "<title1> Welcome {$theDreamTeamName} </title1>";

?>

<h1> Select dream team attributes </h1>
<div>
   <?php
    $fanmail = $_SESSION['mailadr'];

    # this creates a new team
    $sqlinsert = "INSERT INTO DreamTeam VALUES('DreamTeamName', 'FormationDef', 'FormationMid','FormationFor') ";

    $resultinsert = mysqli_query($conn, $sqlinsert);

    $connect_with_team =  "INSERT INTO create_dream_team VALUES (@dream_team_name_input, (SELECT FanID
                      FROM Fan f JOIN UserType u ON f.FanEmail = u.UserEmail AND u.UserEmail = @user_email_input) )";

    $result_connect = mysqli_query($conn, $connect_with_team);

    $select_players = "INSERT INTO consist_of VALUES( (SELECT d.DreamTeamName
FROM DreamTeam d JOIN create_dream_team cdt ON d.DreamTeamName = cdt.DreamTeamName
JOIN Fan f ON f.FanID = cdt.FanID AND f.FanEmail = 'mailadr'), 'football_player_id'  );
"

    $result_select = mysqli_query($conn, $select_players);



    $delete_team = "DELETE FROM DreamTeam WHERE DreamTeamName = 'DreamTeamName' ";

    $result_delete = mysqli_query($conn, $delete_team);
;





?>
</div>







<div class = "vertical"></div>

<div id="col-2">


</div>


</body>


<script>

</script>

</html>
