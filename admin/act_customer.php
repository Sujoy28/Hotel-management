<?php 
include "../connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$id = 0;
$cust_id = rand(00000,99999);

$qry = mysqli_query($conn,"INSERT INTO `customer`(`id`,`cust_id`,`cust_name`,`cust_email`,`cust_phone`,`cust_address`)VALUES('$id','$cust_id','$name','$email','$phone','$address')")or die(mysqli_error($conn));

if ($qry) {
    echo "<script>alert('Data Inserted Succesfully!')</script>";
    echo "<script>window.location.href='add_cutomer.php'</script>";
}else{
    echo "<script>alert('Error!')</script>";
    echo "<script>window.location.href='add_cutomer.php'</script>";
}
?>