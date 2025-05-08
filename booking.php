<?php
include('connection.php');

// var_dump($_SESSION['user']);

if(empty($_SESSION['user'])){ ?>
    <script type="text/javascript">
    alert('Please login first!');
    window.location.href="user/user.php";
</script>
<?php
}

else{
    $order_booking_id = 'ORD'.rand(00000,99999);
    $hotel_id = $_POST['hotel_id'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $total_days = 0;
   $total_amount = 0;
   $customer_id=$_SESSION['user']['id'];
   $name=$_SESSION['user']['name'];
    
   $qry=mysqli_query($conn,"INSERT INTO`order`(`hotel_id`, `order_booking_id`,`check_in_date`,`check_out_date`,`total_days`,`total_amount`,`customer_id`,`name`)VALUES('$hotel_id','$order_booking_id','$check_in_date',' $check_out_date',' $total_days','$total_amount','$customer_id','$name')")or die(mysqli_error($conn));
   if($qry){ ?>
    <script type="text/javascript">
    alert('Order Confirmed !');
    window.location.href="home.php";
</script>
 <?php  }else{ ?>
    <script type="text/javascript">
    alert('Error !');
    window.location.href="home.php";
</script>
<?php }
}

?>