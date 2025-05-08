<?php 
include "../connection.php";

 if(!empty($_FILES)){
    $dir='Room_photo';
    $filename=$_FILES['hotel_photo']['name'];
    $tempname=$_FILES['hotel_photo']['tmp_name'];
    $size=$_FILES['hotel_photo']['size'];
    $Filename=basename($_FILES['hotel_photo']['name']);
    if($size>4000){
        $hotel_photo =$dir.'/'.$filename;
        move_uploaded_file($tempname,"$dir/$Filename");
    }
    else{
        echo "<script>alert('File size more than 4mb')</script>";
        echo "<script>window.location.href='add_room.php'</script>";
    }
 }
 if(!empty($_FILES)){
    $dir='Room_photo';
    $filename=$_FILES['hotel_photo1']['name'];
    $tempname=$_FILES['hotel_photo1']['tmp_name'];
    $size=$_FILES['hotel_photo1']['size'];
    $Filename=basename($_FILES['hotel_photo1']['name']);
    if($size>4000){
        $hotel_photo1 =$dir.'/'.$filename;
        move_uploaded_file($tempname,"$dir/$Filename");
    }
    else{
        echo "<script>alert('File size more than 4mb')</script>";
        echo "<script>window.location.href='add_room.php'</script>";
    }
 }
 if(!empty($_FILES)){
    $dir='Room_photo';
    $filename=$_FILES['hotel_photo2']['name'];
    $tempname=$_FILES['hotel_photo2']['tmp_name'];
    $size=$_FILES['hotel_photo2']['size'];
    $Filename=basename($_FILES['hotel_photo2']['name']);
    if($size>4000){
        $hotel_photo2 =$dir.'/'.$filename;
        move_uploaded_file($tempname,"$dir/$Filename");
    }
    else{
        echo "<script>alert('File size more than 4mb')</script>";
        echo "<script>window.location.href='add_room.php'</script>";
    }
 }


$room_type = $_POST['room_type'];
$hotel_name = $_POST['hotel_name'];
$hotel_username = $_POST['hotel_username'];
$contact_details = $_POST['contact_details'];
$address = $_POST['address'];
$price = $_POST['price'];
$allowed_people = $_POST['allowed_people'];
$description = $_POST['description'];
$star = $_POST['star'];
$id = 0;
$room_id = rand(00000,99999);


$qry = mysqli_query($conn,"INSERT INTO `product`(`id`,`room_id`,`room_type`,`hotel_name`,`hotel_username`,`contact_details`,`address`,`price`,`allowed_people`,`hotel_photo`,`hotel_photo1`,`hotel_photo2`,`description`,`star`)VALUES('$id','$room_id','$room_type ','$hotel_name','$hotel_username','$contact_details','$address','$price','$allowed_people','$hotel_photo','$hotel_photo1','$hotel_photo2','$description','$star')")or die(mysqli_error($conn));

if ($qry) {
    echo "<script>alert('Data Inserted Succesfully!')</script>";
    echo "<script>window.location.href='add_room.php'</script>";
}else{
    echo "<script>alert('Error!')</script>";
    echo "<script>window.location.href='add_room.php'</script>";
}
?>