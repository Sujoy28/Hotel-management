<?php
include('../connection.php');?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User Login</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  	body{
			background-image: url('../images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
    </style>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Classic Beach Resort</a>
    </div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="../home.php">Home</a></li>
      
     
    </ul>
  </div>
</nav>



<form action="user_action_page.php" method="post" style="border:5px black;">
  <div class="imgcontainer">
    <img src="user.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname" style="color:yellow; "><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required style=" background-color:grey;color:blue;">

    <label for="psw" style="color:yellow; "><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required style=" background-color:grey;color:blue;">
        
    <button type="submit" style=" background-color:orange;">Login</button>
    <label style="color:yellow; ">
      <input type="checkbox" checked="checked" name="remember" > Remember me
    </label>
  </div>

  <div class="container" style="background-color:ash">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw" style="color:yellow; ">Forgot <a href="#">password?</a></span><br>
    <span class="psw" style="color:yellow; ">New <a href="register.php">User</a></span>
  </div>
  
</form>

</body>
</html>