<?php 
include "../connection.php";

$booking_id = $_GET['booking_id'];
$check_out_date_time = date('Y-m-d h:i:sa');

$qry = mysqli_query($conn,"UPDATE `order` SET `status`='3', `check_out_date_time` = '$check_out_date_time' WHERE `order_booking_id` = '$booking_id' ")or die(mysqli_error($conn));
if($qry){ ?>
<script>alert('Your booking canclled!')</script>
<script>window.location.href='upcoming_book.php'</script>
<?php }else{
    ?>
    <script>alert('Something Went Wrong !')</script>
    <script>window.location.href='upcoming_book.php'</script>
    <?php
}
?>