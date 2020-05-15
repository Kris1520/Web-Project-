<?php
include '../inc/settings.php';
include '../inc/db.php';
date_default_timezone_set('UTC');
session_start();
if (!isset($_SESSION['admin'])) {
 //header('Refresh: 0; url=../index.php');
 header('location:../index.php');
 exit;
}
echo'<header>
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
          <li><a href="index.php" title="" class="active">Settings</a></li>
          <li><a href="users.php" title="" class="active">Users</a></li>
          <li><a href="polls.php" title=""> Polls</a></li>
		  <li><a href="../index.php" title="">Back To Site</a></li>
		  <li><a href="../logout.php" title="">Log Out '.$_SESSION['name'].'</a></li>
          
          
        </ul>
      </div>
    </div>
  </nav>
</header>
  <meta charset="utf-8">';
  ?>
  