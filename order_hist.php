<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Classic Beach Resort</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

   <!-- <link href="bootstrap.min.css" rel="stylesheet"> -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
 
    
 <style>
     .well
     {
         background: rgba(0,0,0,0.7);
         border: none;
 
     }
     .wellfix
     {
         background: rgba(0,0,0,0.7);
         border: none;
         height: 150px;
     }
 body
 {
   background-image: url('images/home_bg.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
 }
 p
 {
   font-size: 13px;
 }
     .pro_pic
     {
         border-radius: 50%;
         height: 50px;
         width: 50px;
         margin-bottom: 15px;
         margin-right: 15px;
     }
 
 </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Classic Beach Resort</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
      <div class="topnav" style="padding: 10px;" >


<?php
if(isset($_SESSION['user'])){ ?>
  <a style="text-decoration:none;padding:5px;" href="home.php"><?php echo $_SESSION['user']['name'] ?></a>
<?php }else{ ?>
<a style="text-decoration:none;padding:5px;" href="user/user.php">User</a>
<?php }       
?>

<a style="text-decoration:none;padding:5px;" href="reservation.php">Online Reservation</a>
<a style="text-decoration:none;padding:5px;" href="about.php">About Us</a>

<?php
if(isset($_SESSION['user'])){ ?>
  <a style="text-decoration:none;padding:5px;" href="order_hist.php">Order History</a>
  <a style="text-decoration:none;padding:5px;" href="user_logout.php">Log Out</a>
<?php } ?>
</div>
      </ul>
      <nav class="navbar navbar-inverse">
            <div class="container-fluid">
             
                <ul class="nav navbar-nav navbar-right" style="padding: 10px;">
                    <li style="padding: 10px;"><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                    <li style="padding: 10px;"><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>                    
                </ul>
            </div>
        </nav>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>

  

   

    <div class="container">
<?php
$user_id = $_SESSION['user']['id'];
$qry = mysqli_query($conn,"SELECT * FROM `order` WHERE `customer_id` = '$user_id'")or die(mysqli_error($conn));
while($row = $qry->fetch_assoc()){ 
$hotel_id = $row['hotel_id'];
$hotel_qry =  mysqli_query($conn,"SELECT * FROM `product` WHERE `id` = '$hotel_id'")or die(mysqli_error($conn));
$hotel_data = $hotel_qry->fetch_assoc();
    
?>

<table class="table table-stripe mt-5" style="background-color:white;">

<tr>
        <th colspan='2'>Your Name :-</th>
        <td colspan='2'><h4><b style="color:red;"><?php echo $row['name'] ?></b></h4></td>
    </tr>
    <tr>
        <th>Order Id :-</th>
        <td><?php echo $booking_id = $row['order_booking_id'] ?></td>
        <th>Booking Date :-</th>
        <td><?php echo $row['date_time'] ?></td>
    </tr>
   
    <tr>
        <th>Hotel Name :-</th><td><?php echo $hotel_data['hotel_name'] ?>
        <th>Hotel Type :-</th><td><?php echo $hotel_data['room_type'] ?>
    </tr>

    <tr>
        <th>Check out date :-</th><td><?php echo $row['check_in_date'] ?>
        <th>Check in date :-</th><td><?php echo $row['check_out_date'] ?>
    </tr>
    <tr>
    <th>Status</th>
    <td><?php if($row['status'] == 0){
                                echo "<span style='color:lightgreen'> Booking Confirmed </span>";
                              }
                              elseif($row['status'] == 1){
                                echo "<span style='color:orange'> Check in completed </span>";
                              } 
                              elseif($row['status'] == 2){
                                echo "<span style='color:blue'> Check out completed </span>";
                              } 
                              elseif($row['status'] == 3){
                                echo "<span style='color:red'> Cancle </span>";
                              } ?></td>
                              <td>
                                <?php if($row['status'] == 0){
                                ?><a href="cancle_order.php?booking_id=<?php echo $booking_id ?>"><button class="btn btn-danger mt-2"> Cancle </button></a><?php
                              }?>
                              </td>
    </tr>
</table>
<?php }
?>   
      
     

<div class="clearfix"></div>
        <hr>
        <div class="row" style="color: #ffbb2b">
            <div class="col-md-4 wellfix">
              <h4><strong>Contact Us</strong></h4><hr>
              Address :Mandermani<br>
              Mail :classicoffcial@gmail.com <br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Developed By</strong></h4><hr>
                <a style="text-decoration:none;padding:5px;" href="#">Sujoy's company</a>

            </div>
        </div>
        



    </div>
    
  



  
</body>

</html>
