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
<p> Create Account </p>

<c>
  <form action="createAccountprocess.php" method="POST">
    <label for="fname"></label>
    <input type="text" id="name" name="name" placeholder="Name" required="required">

</c><br><br>
<c>
  <form action="createAccountprocess.php" method="POST" >
    <label for="fname"></label>
    <input type="email" id="email" name="email" placeholder="E-mail" required="required">

</c><br><br>
<c>
  <form action="createAccountprocess.php"  method="POST">
    <label for="fname"></label>
    <input type="password" id="pass" name="pass" placeholder="Password" required="required" onkeyup='check();' />

</c><br><br>
<c>
  <form action="createAccountprocess.php"  method="POST">
    <label for="fname"></label>
    <input type="password" id="confirm_pass" name="confirm_pass" required="required" placeholder="Confirm Password" onkeyup='check();' />

</c><br><br>

 <c> Select the type of your account </c><br><br>

 <input list="account-types" id="accounttype" name="accounttype" action="createAccountprocess.php" method="POST"/>

  <datalist id="account-types">
    <option value="Club">
    <option value="Scout">
    <option value="Team">
    <option value="Scouting Agency">
    <option value="Fan">
  </datalist><br><br>

  <label>
  <span id='message'></span>
</label>
<br><br>
<c>
<input type="checkbox" onclick="myFunction()">Show Password
</c>

<br><br><br>
  <button class="button">Create</button>
</body>

<script>
var check = function() {
  if (document.getElementById('pass').value ==
    document.getElementById('confirm_pass').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Passwords must be match';
  }
}
</script>
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
</html>
