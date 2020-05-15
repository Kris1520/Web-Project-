<?php
session_start();
include 'settings.php';
include 'db.php';
date_default_timezone_set('UTC');
  
   $name =  $_POST['rname'];
    $username =  $_POST['rusername'];
   $password =  $_POST['rpassword'];
   $email =  $_POST['remail'];
    $getuser = mysqli_query($conn, "SELECT * from users WHERE username='$username' or email='$email' LIMIT 1");
   $count =  mysqli_num_rows($getuser);
   if ($count != 0) {
	   $_SESSION['error'] = null;
	   $_SESSION['error'] ='Account with this username or Email already exists!'; 
	   header('Refresh: 1; url=/account.php');
   }else{
   $getuser = mysqli_query($conn, "INSERT into users VALUES ('','".$name."','".$username."', '".$email."', '".$password."','')");      
   $_SESSION['username'] = $username;
   $_SESSION['name'] = $name;
  header('Refresh: 1; url=/index.php');
   }
 ?>