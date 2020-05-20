
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
  margin-left: 150px;
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
<title1>Welcome Club A</title1>
<button class="logoutbutton">LogOut</button>
<button class="profilebutton">Profile</button>
</div>

<hr class="new1">

<div id="col-1">

<h1> Request E </h1>
  <br> <br> <d> Status: </d>
  <br> <br> <d> Agency: </d>
  <table>
  	<tr>
    	<th> Name </th>
        <th> No. of Scouts </th>
    </tr>
    <tr>
    <td> Agency A</td>
    <td> 2 </td>
      </tr>
      <br><br>
</table>


  <br> <br> <d> Organization: </d>
  <br> <br> <d> No. of Scouts: </d>
  <br> <br>

 <button class="closeButton" onclick="window.location.href='clubHomePage.php'">Close</button><br><br>

</div>

<div class = "vertical"></div>

<div id="col-2">

  <h1></h1>
  <button class="requestNewScoutButton" onclick="window.location.href='clubNewRequestPage.php'">Request New Scout</button>
  <br><br>

<table>
  <tr>
    <th>Name</th>
    <th>Status</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>Request A</td>
    <td><span class="yellowText">Pending</span></td>
    <td><a href="http://www.google.com">Details</a><br /></td>
  </tr>
  <tr>
    <td>Request B</td>
    <td><span class="redText">Rejected</span></td>
    <td><a href="http://www.google.com">Details</a><br /></td>
     <td><button class="changeAgencyButton">Change Agency</button></td>
  </tr>
  <tr>
    <td>Request C</td>
    <td><span class="purpleText">Processing</span></td>
    <td><a href="http://www.google.com">Details</a><br /></td>
  </tr>
  <tr>
    <td>Request D</td>
    <td><span class="greenText">Reported</span></td>
    <td><a href="http://www.google.com">Details</a><br /></td>
    <td><button class="seeReportButton">See Report</button></td>
  </tr>
</table>


</div>

</body>

<script>
async function requestFunction(e) {
   e.preventDefault();
   document.body.innerHTML+= '<br>'+ await(await fetch('?remove=1')).text();
 }

</script>


</html>
