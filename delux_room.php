<?php
include('connection.php');
$id=$_GET['id'];
$qry=mysqli_query($conn,"SELECT * FROM `product`WHERE `id`='$id'")or die(mysqli_error($conn));
$data=$qry->fetch_assoc();
// var_dump($data)
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Classic Beach Resort</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">Classic Beach Resort</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
     
      </ul>
      <nav class="navbar navbar-inverse">
            <div class="container-fluid">
             
                <ul class="nav navbar-nav navbar-right" style="padding: 10px;padding-left:800px;">
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


</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
   
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
    <div class="container">
      

     
       <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="admin/<?php echo $data['hotel_photo'] ?>"  class="d-block " style="width:100%;height:700px" >
    </div>
    <div class="carousel-item">
    <img src="admin/<?php echo $data['hotel_photo1'] ?>" class="d-block" style="width:100%;height:700px" >
    </div>
    <div class="carousel-item">
    <img src="admin/<?php echo $data['hotel_photo2'] ?>" class="d-block" style="width:100%;height:700px">
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

<div class="clearfix"></div>
        <hr>
        <div class="row" style="color: #ed9e21">
            <div class="col-md-12 well" >
              <h3><strong style="color: #ffbb2b"><?php echo $data['hotel_name'] ?></strong></h3>
              <?php 
              for($i=0; $i<$data['star']; $i++ ){
                  echo "★";
              }
              ?>
              <br>
              <p><h6><?php echo $data['description']?></h6></p><br>
              <p><h6><i class="fa fa-envelope-open-o" aria-hidden="true"></i> <?php echo $data['hotel_username']?></h6></p>
              <p><h6><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $data['contact_details']?></h6></p>
              <p><h6><i class="fa fa-users" aria-hidden="true"></i> <?php echo $data['allowed_people']?></h6></p>
              <p><h6><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $data['address']?></h6></p>
              <p><h6><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $data['price']?></h6></p>
            

  <form action="booking.php" method="post">
                   <div class="form-group">
                     
                      <input type="hidden" value="<?php echo $id ?>"class="form-control" name="hotel_id" required>
                    </div> 

                    <div class="form-group">
                     
                     <input type="hidden" value="<?php echo $name ?>"class="form-control" name="name" required>
                   </div> 

                    <div class="form-group">
                      <label>Check-in date</label>
                      <input type="date" class="form-control" name="check_in_date" required>
                    </div>

                    <div class="form-group">
                      <label>check-out date</label>
                      <input type="date" class="form-control" name="check_out_date" required>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Book now" class="btn btn-success">
                    </div>
      </form>

</div>

        </div>
        
        </div>
        

    </div>
    
  



  
</body>

</html>
