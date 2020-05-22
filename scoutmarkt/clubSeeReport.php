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
?>

<!DOCTYPE html>
<html>
<head>
<style>

/* text styles */

p{
  color: black;
  font-size: 60px;
  text-align: center;
  text-shadow: 2px 2px 2px #008CBA;
}

d {
color: black;
font-size: 30px;
margin-top: 0px;
margin-right: 10px;
padding: 30px 30px;
}


title1 {
color: black;
text-shadow: 2px 2px 2px #008CBA;
font-size: 40px;
margin-top: 10px;
padding: 15px 20px;
}

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


/* divides */

#row-1 {
  position: relative;
  width: 100%;
  float: right;
  height: 80px;
  background-color: #ffffff;
  border: 1px solid black;

}

#row-2 {
  position: relative;
  width: 100%;
  float: right;
  height: 200px;
  background-color: #ffffff;
  border: 1px solid black;
  overflow-y: scroll;
}

#row-3 {
  position: relative;
  width: 100%;
  float: right;
  height: 200px;
  background-color: #B0C4DE;
  border: 1px solid black;
  display: inline-block;
  white-space: nowrap;
  overflow: auto;
}

#row-4 {
  position: relative;
  width: 100%;
  float: right;
  height: 200px;
  background-color: #B0C4DE;
  border: 1px solid black;
  white-space: nowrap;
  overflow: auto;
 }


/* buttons */

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

.sendTransferOfferButton {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;

  text-decoration: none;

  font-size: 16px;
  position:relative;
  margin-bottom: 300px;
  top:10px;
  right:0px;
  left: 350px;
  border-radius: 10px;
}

/*boxes*/

playerTypes {
  background-color: white;
  width: 300px;
  border: 1px solid green;
  padding: 5px;
  margin: 10px;
  font-size: 20px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 200px;
  margin: auto;
  text-align: center;
  background-color: #F8F8FF;
}

.title {
  color: grey;
  font-size: 18px;
}

playerButton {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

playerButton:hover, a:hover {
  opacity: 0.7;
}



</style>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

<div id = "row-1">
<title1>Report A </title1>

<button class="logoutbutton">LogOut</button>
<button class="profilebutton">Profile</button>
<button class="btn"><i class="fa fa-home"></i></button>
</div>

<div id = "row-2">

   <?php
    $queryClubReport = "SELECT * FROM Club c
    JOIN evaluate_report er ON er.ClubName = c.ClubName
    JOIN Report r ON r.ReportID = er.ReportID
    JOIN talented_players tp ON tp.ReportID = r.ReportID
    JOIN FootballPlayer fp ON tp.PlayerID = fp.PlayerID AND c.ClubName = '$theClubName'";
    $queryClubResult = mysqli_query($conn, $queryClubReport);
   ?>
    <table>
     <tr>
       <th>Report Name</th>
       <th>Player Comment</th>
       <th>Player Rate</th>
       <th>Player ID </th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Transfer Fee</th>
       <th>Skills</th>
     </tr>

     <?php while($rows = mysqli_fetch_assoc($queryClubResult) ) {
         ?>
        <tr>
         <td> <?php echo $rows['ReportName']?> </td>
         <td> <?php echo $rows['PlayerComment']?>  </td>
         <td> <?php echo $rows['PlayerRate']?>  </td>
         <td> <?php echo $rows['PlayerID']?>  </td>
         <td> <?php echo $rows['FirstName']?>  </td>
         <td> <?php echo $rows['LastName']?>  </td>
         <td> <?php echo $rows['Skills']?>  </td>
        </tr>
        <tr>
           <?php
     }
     ?>
   </table>


</div>

<div id = "row-3">
<playerTypes> Candidate Players</playerTypes> <br><br>
<div id="col-2">
   <?php

   $qryAgency = mysqli_query($conn,"select * from ScoutingAgency"); // select query
   $dataAgency = mysqli_fetch_array($qryAgency); // fetch data

   if(isset($_POST['allSet'])) // when click on Update button
   {
       $reqPlayerID = $_POST['reqPlayerID'];
       $reqTransferFee  = $_POST['reqTransferFee'];

       $queryRequest= "INSERT INTO Responds(ClubName, TransferID, AgentName)
       SELECT c.ClubName, tf.TransferID, pa.AgentName FROM
       TransferOffer tf
       JOIN
       Club c ON tf.RespondingClubName = c.ClubName
       JOIN FootballPlayer fp ON fp.PlayerID = tf.PlayerID
       JOIN player_agent pa ON pa.PlayerID = tf.PlayerID
       JOIN Agent a ON a.AgentName = pa.AgentName";

       $resultRequest= mysqli_query($conn, $queryRequest);
   }

    ?>

   <form method="POST">
    <d> Make an offer to one of the listed players: </d><br><br>
      <input type="text" name="reqPlayerID" placeholder="Enter Player ID" Required>
     <input type="text" name="reqTransferFee"  placeholder="Enter Transfer Fee" Required>

     <input type="submit" name="allSet" value="Select">
   </form>

</div>


</div>

<div id = "row-4">
<playerTypes> Your Team </playerTypes>
<?php $yourTeamQuery = "SELECT c.ClubName, fp.FirstName, fp.LastName, fp.Skills, fp.Age, fp.TransferFee,  fp.Goal, fp.Asist, con.ContractLength FROM
Club c
JOIN contract con ON c.ClubName = con.ClubName
JOIN FootballPlayer fp ON fp.PlayerID = con.PlayerID AND c.ClubName = '$theClubName'";
$resultTable = mysqli_query($conn, $yourTeamQuery);

?>


<table>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Skills</th>
    <th>Age </th>
    <th>Transfer Fee</th>
    <th>Goal</th>
    <th>Asist</th>
  </tr>

  <?php while($rows = mysqli_fetch_assoc($resultTable) ) {
      ?>
     <tr>
      <td> <?php echo $rows['FirstName']?>  </td>
      <td> <?php echo $rows['LastName']?>  </td>
      <td> <?php echo $rows['Skills']?>  </td>
      <td> <?php echo $rows['Age']?>  </td>
      <td> <?php echo $rows['TransferFee']?>  </td>
      <td> <?php echo $rows['Goal']?>  </td>
      <td> <?php echo $rows['Asist']?>  </td>
     </tr>
     <tr>
        <?php
  }
  ?>
</table>


</div>

<div>
<button class="sendTransferOfferButton" onclick="window.location.href='clubHomePage.php'" >Send Transfer Offer To Selected Ones & Close </button>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</body>
</html>
