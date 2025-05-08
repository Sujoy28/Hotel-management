<?php include('../connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Classic Beach Resort</a>
    </div>
    <ul class="nav navbar-nav" style="float:right">
      <li class="active"><a href="user.php">User</a></li>
      <li><a href="user_logout.php">Logout</a></li>
     
    </ul>
  </div>
</nav>


</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>New User</title>
    <style>
  	body{
			background-image: url('../images/home_bg.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
      color:white;
		}
    </style>
</head>
<body>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="POST">
              <div class="form-group">
                  <label for="name" style="color:yellow; ">Name:</label>
                  <input type="text" class="form-control" name="name"  style=" background-color:grey;">
              </div>

              <div class="form-group">
                <label for="email" style="color:yellow; ">Email:</label>
                <input type="email" class="form-control" name="username"  style=" background-color:grey;">
              </div>
              <div class="form-group">
                <label for="phone" style="color:yellow; ">Phone:</label>
                <input type="phone" class="form-control" name="phone"  style=" background-color:grey;">
              </div>
              <div class="form-group">
                <label for="address" style="color:yellow; ">Address:</label>
                <input type="address" class="form-control" name="address"  style=" background-color:grey;">
              </div>
              <div class="form-group">
                <label for="password" style="color:yellow; ">Password:</label>
                <input type="password" class="form-control" name="password" style=" background-color:grey;">
              </div>

              <button type="submit" class="btn btn-default" name="submit" style="color:blue; background-color:red;">Submit</button>
            </form>
        </div>    
        <div class="col-sm-3"></div>    
    </div>
    
 


<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = md5($_POST['password']);

    $qry = "INSERT INTO `user`(`id`,`username`,`password`,`name`,`phone`,`address`)VALUES(0,'$username','$password','$name','$phone','$address')";
    $insert = mysqli_query($conn,$qry)or die(mysqli_error($conn));

    if($insert){
        echo "Data Inserted Successfully !";
    }else{
        echo "Error !";
    }
}
?>

</body>
</html>
