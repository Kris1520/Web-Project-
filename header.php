<?php
session_start();
include 'settings.php';
include 'db.php';
date_default_timezone_set('UTC');
?>

<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.php" title="">
          <img src="./assets/images/mashuptemplate.svg" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php" title="" class="active">Home</a></li>
          <li><a href="about.php" title="">About</a></li><?php
          if ($_SESSION['username'] != null) {
			  echo '<li><a href="elections.php" title=""> Elections</a></li>';
			  If ($_SESSION['admin'] == true)
			{
				echo '<li><a href="/admin/index.php" title="">Admin Panel</a></li>';
				}
            echo '<li><a href="logout.php" title="">Log Out '.$_SESSION['username'].'</a></li>';
			
          }else{
            echo '<li><a href="account.php" title="">Account</a></li>';          }
          ?>
          
          
        </ul>
      </div>
    </div>
  </nav>
</header>
  <meta charset="utf-8">
  