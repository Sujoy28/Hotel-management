<?php 
include "../connection.php";

$booking_id = $_GET['booking_id'];
$check_in_date_time = date('Y-m-d h:i:sa');

$qry = mysqli_query($conn,"UPDATE `order` SET `status`='1', `check_in_date_time` = '$check_in_date_time' WHERE `order_booking_id` = '$booking_id' ")or die(mysqli_error($conn));
if($qry){ ?>
<script>alert('Thank You! \n Check in Complete.')</script>
<script>window.location.href='current_book.php'</script>
<?php }else{
    ?>
    <script>alert('Something Went Wrong !')</script>
    <script>window.location.href='current_book.php'</script>
    <?php
}
?>