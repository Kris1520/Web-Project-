<?php
include '../inc/db.php';
$id = $_GET['id'];
$del = mysqli_query($conn, "DELETE from questions where id ='$id'");
header('location:read.php?id='.$_GET['r']);
?>