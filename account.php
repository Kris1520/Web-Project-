<?php include 'inc/header.php';?>
<!DOCTYPE html>

<html lang="en">
   <head>
      <title>Club Account</title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      
      <script>
         addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
      </script>
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	  <link href="css/important.css" rel="stylesheet">
   </head>
   <body>
      <?php
      
   error_reporting(0);

   ?> 
      <div class="mid-class">
         <div class="art-right-w3ls">
         <?php
			      if ($_SESSION['error'] != null) {
      echo "<h2 style=color:red;>".$_SESSION['error']."</h2>";
	  $_SESSION['error'] = null;
   }
			   ?>
            <h2>Get access to your account</h2>
            <form action="login.php" method="post">
               <div class="main">
                  <div class="form-left-to-w3l">
                     <input type="text" name="username" placeholder="Username" required="">
                  </div>
                  <div class="form-left-to-w3l ">
                     <input type="password" name="password" placeholder="Password" required="">
                     <div class="clear"></div>
                  </div>
               </div>
               
               <div class="clear"></div>
               <div class="btnn">
                  <button name='submit' type="submit">Sign In</button>
               </div>
            </form>
            <div class="w3layouts_more-buttn">
               <h3>Don't Have an account..?
			  
                  <a href="#content1">Sign Up Here</a>
				  <form action="newuser.php" method="post">
                        <div class="form-left-to-w3l">
                           <input type="text" name="rname" placeholder="Full name" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="text" name="rusername" placeholder="Choose a username" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="email" name="remail" placeholder="Email" required="">
                        </div>
                        <div class="form-left-to-w3l">
                           <input type="password" name="rpassword" placeholder="Password" required="">
                        </div>
                        
                        <div class="btnn">
                           <button name='signup' type="submit">Sign Up</button>
                           <br>
                        </div>
                     </form>
				  
               </h3>
            </div>
            <!-- popup-->
            <div id="content1" class="popup-effect">
               <div class="popup">
                  <!--login form-->
                  <div class="letter-w3ls">
                
                     <div class="clear"></div>
                  </div>
                  <!--//login form-->
                  <a class="close" href="#">&times;</a>
               </div>
            </div>
            <!-- //popup -->
         </div>
        <div class="art-left-w3ls">
            <h1 class="header-w3ls">
               Create an account or Log In.
            </h1>
            <p>
            This service is meant for club members only!
            
         </p>
         </div>
      </div>
   
   </body>

</html>