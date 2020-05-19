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
  font-size: px;
  text-align: center;
}


.button {
  background-color: #008CBA; /* Blue */
  border: #555555; /* Black */
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

</style>
</head>
<body>

<p>Welcome</p>

<c>
  <form action="loginprocess.php" method="POST">
    <label for="fname"></label>
    <input type="text" id="usermail" name="usermail" placeholder="E-mail">

</c>

<br>
<br>
<c>
  <form action="loginprocess.php" method="POST">
    <label for="fname"></label>
    <input type="password" id="pass" name="pass" placeholder="Password">

</c>

<br>
<br>
<br>
<c>
<input type="checkbox" onclick="myFunction()">Show Password
</c>

<br>
<br>

<button class="button">Log In</button>

<br>
<br>

<c> Do not have any account? <a href="http://localhost:8080/db353/createAccount.php">Create.</a> </c>

<script>
function myFunction() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>


</body>
</html>
