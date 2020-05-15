<?php include 'inc/header.php';?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Login</title>
    <style>
    input{
        padding: 5px;

    }
    </style>
</head>
<body>
<center><h1>Login to Admin Panel</h1></center>
<?php
session_start();

if (isset($_POST['submit'])) {
    //if form is submitted
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $adminusername) {
        //if entered username matches admin username
        if ($password == $adminpassword) {
            //if entered password matches the admin password
            $_SESSION['admin'] = $username;
            
            header('location:index.php');
        }else{
            //if entered password is wrong
            echo "<div class='error'>You have entered wrong password!</div>";
            echo "<hr>";
        }
    }else{
        //if entered username is wrong
        echo "<div class='error'>You have entered wrong username!</div>";
        echo "<hr>";
    }
}
if (isset($_GET['login'])) {
   echo $adminusername.":".$adminpassword;
}

if (isset($_SESSION['admin'])) {
    echo "Logged in as "."$adminusername";
     header('location:index.php');

}else{
    //Show login screen
    echo "<center><div class='card' style='  background-color: gray;
    padding: 15px;margin-left:35%;margin-right:35%;
    border-radius: 5px;'><form method='POST'>Username: <input type='text' required name='username' placeholder='Enter your username...'><br><br>Password: <input required type='password' name='password'  placeholder='Enter your password...'><br><br><input type='submit' name='submit' value='Login'></form></div></center>";
}


?>
</body>
</html>
