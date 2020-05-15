<?php
session_start();
include 'settings.php';
include 'db.php';
date_default_timezone_set('UTC');
?>
<?php
if ($_SESSION['username'] == null){
//if (isset($_POST['submit'])) {
   $username = strtolower($_POST['username']);
   $pass = $_POST['password'];
   //see if this username exists
   $sql= null;
   $sql = "SELECT * from users WHERE username ='".$username."' LIMIT 1";
   $getuser = mysqli_query($conn, $sql);
   $count =  mysqli_num_rows($getuser);
   if ($count != 0) {
      //if user exists
      $row = mysqli_fetch_assoc($getuser);
      if ($pass == $row['password']) {
         $_SESSION['username'] = $row['username'];
		 $_SESSION['name'] = $row['name'];
		if ($row['admin'] == true)
		{
			$_SESSION['admin'] = true;
			$ect = " Welcome Back Boss";
		}
         header('Refresh: 1; url=/index.php');
		 echo '<META http-equiv="refresh" content="1;URL=index.php"> ';
		 $_SESSION['error'] = null;
		 //echo "<script>alert('you are loged in ".$_SESSION['username'].$_SESSION['admin']."')</script>";
      
      }else{
       $_SESSION['error'] = null;
	   $_SESSION['error'] ='Password doesnot match with your account!';
	   header('Refresh: 1; url=/account.php');
   }
   }else{
       $_SESSION['error'] = null;
	   $_SESSION['error'] ="Account with this username is not found";
	   header('Refresh: 1; url=/account.php');
   }
}
else{
	header('Refresh: 1; url=/index.php');
}


?>