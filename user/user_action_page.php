<?php
include('../connection.php');

$username = $_POST['uname'];
$password = md5($_POST['psw']);

$qry = mysqli_query($conn,"SELECT * FROM `user` WHERE `username`='$username' AND `password` = '$password'")or die(mysqli_error($conn));

if($qry->num_rows == 1){
    //if login access find
    $row = $qry->fetch_assoc();
    $_SESSION['user'] = $row;
    ?>
    <script type="text/javascript">
        window.location.href="../home.php";
    </script>
    <?php
}else{
    //if wrong credential
    ?>
    <script type="text/javascript">
        alert('Bad Credential!');
        window.location.href="user.php";
    </script>
    <?php
}

?>