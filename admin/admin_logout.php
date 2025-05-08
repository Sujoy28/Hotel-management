<?php
include("../connection.php");
//var_dump($_SESSION['admin']);
unset($_SESSION['admin']);
?>
<script>
window.location.href="admin.php";
</script>