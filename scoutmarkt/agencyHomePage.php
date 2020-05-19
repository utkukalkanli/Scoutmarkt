
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
<title1>Welcome Agency A</title1>
<button class="logoutbutton">LogOut</button>
<button class="profilebutton">Profile</button>
</div>

<hr class="new1"></hr>
<div id="col-1">
 <h1> </h1>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSC1VyBdUc9-Z0DV3OZDT3DOKhaWf_HnlTIbqJCPFfXgMSZvrTQ&usqp=CAU" alt="Paris" class="center">
  <br> <br> <d> Number of Scouts: </d>
  <br> <br>


</div>

<div class = "vertical"></div>

<div id="col-2">
  <br><br>

<table>
  <tr>
    <th>Name</th>
    <th>Club</th>
    <th>Status</th>
    <th></th>
    <th></th>
  </tr>
  <tr>
    <td>Request A</td>
    <td><span class="yellowText">Pending</span></td>
    <td><a href="http://www.google.com">Details</a><br /></td>
    <td><button class="seeRequestButton" id="myP" disabled >See Request</button></td>

  </tr>
  <tr>
    <td>Request B</td>
    <td><span class="redText">Rejected</span></td>
    <td><a href="http://www.google.com">Details</a><br /></td>
     <td><button class="seeRequestButton" id="myP" visibility() >See Request</button></td>
  </tr>
  <tr>
    <td>Request C</td>
    <td><span class="purpleText">Processing</span></td>
    <td><a href="http://www.google.com">Details</a><br></td>
    <td><button class="seeRequestButton" id="myP"  >See Request</button></td>
  </tr>
  <tr>
    <td>Request D </td>
    <td><span class="greenText">Reported</span></td>
    <td><a href="http://www.google.com">Details</a><br /></td>
   <td> <button class="seeRequestButton" id="seeRequest"  >See Request</button><?php
    $status = mysql_num_rows($query3);
    ?>
    if ($status == "canBeSeen") {
      <style type="text/css">#seeRequest{display:block;}</style>

      <?php ?> </td>
   </tr>

<tr><td> <i class="fas fa-exclamation-triangle" style="font-size:13px;color:green;" ></i> Request E </td>
<td> Request E </td>
<td> ... </td>
<td> </td></tr>

</table>
</div>
</body>
</html>
