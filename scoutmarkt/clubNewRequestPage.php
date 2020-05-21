<!DOCTYPE html>
<?php
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

<div id="col-1">

   <?php

   $scoutingAgencyTable = "SELECT * FROM ScoutingAgency";
   $resultsaTable = mysqli_query($conn, $scoutingAgencyTable);
    ?>

  <form action="/action_page.php">
  <table>
     <tr>
      <th>Name</th>
      <th>No. of Scouts</th>
      <th>Select</th>
    </tr>

    <?php
    $counter = -1;
    ?>

    <?php while($rows = mysqli_fetch_assoc($resultsaTable) ) {
        $counter = $counter + 1;
        ?>
       <tr>
        <td> <?php echo $rows['AgencyName']?> </td>
        <td> <?php echo $rows['NumberOfScouts']?>  </td>
        <td> <input type='checkbox' class="daychecks" onclick="checkOnlyOne(this.value);" id= <?php echo $counter?> > </td>
       </tr>
          <?php
    }
    ?>
</table><br><br>
<input type="submit" value="Select Agency" class="submitButton">
      </form>


</div>

<div class = "vertical"></div>

<div id="col-2">
  <h1></h1>
     <c class = "listmiddle"> Select organization: </c><br>

     <input list="organization-selection" class= "listmiddle" id="organization" name="organization" action="createAccountprocess.php" method="POST"/>

      <datalist id="organization-selection">
        <option value="Kupa">
        <option value="Other">
        <option value="Other other">
      </datalist><br><br>

    <br><br>
    <c>

<?php
$scoutTable = "SELECT * FROM ScoutingAgency";
$resultsaTable = mysqli_query($conn, $scoutingAgencyTable);
?>

<script type="text/javascript">
function createTable()
{
    var num_rows = document.getElementById('rows').value;
    var num_cols = 2;
    var theader = '<table border="1">\n';
    var tbody = '';

    for( var i=0; i<num_rows;i++)
    {
        tbody += '<tr>';
        for( var j=0; j<num_cols;j++)
        {
            if ( j == 0){
            tbody += '<td>';
            tbody += 'Scout ' + i;
            tbody += '</td>'
            }
            else {
            tbody += '<td>';
            tbody += 'Position Here';
            tbody += '</td>'
            }
        }
        tbody += '</tr>\n';
    }
    var tfooter = '</table>';
    document.getElementById('wrapper').innerHTML = theader + tbody + tfooter;
}
</script>

<body>
<form name="tablegen">
<label>No. of Scouts <input type="text" name="rows" id="rows"/></label>
<input name="generate" type="button" value="See Scouts" class="seeScoutsButton" onclick='createTable();'/>
</form><br>

<div id="wrapper"></div>


<p id="demo"></p>

     <button class="sendRequestButton ">Send Request</button>

  <br><br>


</div>

</div>

</body>

<script>
async function requestFunction(e) {
   e.preventDefault();
   document.body.innerHTML+= '<br>'+ await(await fetch('?remove=1')).text();
 }
</script>

<script type="text/javascript">

function checkOnlyOne(b){

var x = document.getElementsByClassName('daychecks');
var i;

for (i = 0; i < x.length; i++) {
  if(x[i].value != b) x[i].checked = false;
}
}

</script>


</html>
