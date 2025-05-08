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
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    
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
     table tr td,th{
  border: none;
} 
table{
  border : 1px solid black;
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
      

     
       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="admin/Room_photo/1.jpg" class="d-block w-100 h-250" >
    </div>
    <div class="carousel-item">
      <img src="admin/Room_photo/6.jpg" class="d-block w-100 h-250" >
    </div>
    <div class="carousel-item">
      <img src="admin/Room_photo/17.jpg" class="d-block w-100 h-250" >
    </div>
    <div class="carousel-item">
      <img src="admin/Room_photo/5.jpg" class="d-block w-100 h-250" >
    </div>
    <div class="carousel-item">
      <img src="admin/Room_photo/18.jpg" class="d-block w-100 h-250" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<hr>
<div class="row">
<?php
$qry = mysqli_query($conn,"SELECT * FROM `product`")or die(mysqli_error($conn));
while($row = $qry->fetch_assoc()){
  $id=$row['id'];
   ?>
<div class="col-md-3 col-sm-6" style=" height:auto; float:left;border:2px solid black; padding:2px; background-color:grey;color:yellow;">
<table class="table ">
 <tr>
  <td><img src="admin/<?php echo $row['hotel_photo'] ?>" width="300px" height="220px" ></td>
</tr>
<tr>
  <td><h4><?php echo $row['hotel_name'] ?></h4>
  <?php 
    for($i=0; $i<$row['star']; $i++ ){
      echo "★";
    }
  ?>
  </td>
</tr>
<tr>
<td><?php echo ' ₹ '.$row['price'] ?><br></td>
</tr>
<tr>
    <td><h6><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $row['address']?></h6></td>
</tr>
<tr>
<td><a href="delux_room.php?id=<?php echo $id ?>" >See More</a></td>
</tr>
</table>

</div>
<?php }
?>
</div>
<div class="clearfix"></div>
        <hr>
        <div class="row" style="color: #ed9e21">
            <div class="col-md-12 well" >
              <h4><strong style="color: #ffbb2b">About</strong></h4><br>
              <p>Online hotel reservations are a popular method for booking hotel rooms. Travelers can book rooms on a computer by using online security to protect their privacy and financial information and by using several online travel agents to compare prices and facilities at different hotels</p>
              <br>
              <p>Prior to the Internet, travelers could write, telephone the hotel directly, or use a travel agent to make a reservation. Nowadays, online travel agents have pictures of hotels and rooms, information on prices and deals, and even information on local resorts. Many also allow reviews of the traveler to be recorded with the online travel agent.</p>
              <br>
              <p>Online hotel reservations are also helpful for making last minute travel arrangements. Hotels may drop the price of a room if some rooms are still available. There are several websites that specialize in searches for deals on rooms.</p>
              
            </div>  
        </div>
        <div class="row" style="color: #ffbb2b">
            <div class="col-md-4 wellfix">
              <h4><strong>Contact Us</strong></h4><hr>
              Address :Mandermani<br>
              Mail :classicoffcial@gmail.com <br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Developed By</strong></h4><hr>
                <a style="text-decoration:none;padding:5px;" href="#">Sam's company</a>

            </div>
        </div>
        



    </div>
    
  



  
</body>

</html>
