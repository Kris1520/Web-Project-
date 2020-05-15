<?php include 'inc/header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="WEPTT Elections" name="description">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">

 

  <title>Elections</title>  

<link href="css/important.css" rel="stylesheet">

<style>
h3 {text-align: center;}
</style>

</head>

<body>

<?php

if (!isset($_SESSION['username'])) {
  header('location:account.php?r=elections.php');
}
//it block will check for every poll and update it if it is ended or not
$result = mysqli_query($conn, "SELECT * from polls");
while ($row = mysqli_fetch_assoc($result)){
  $pollid = $row['id'];
if (strtotime($row['deadline']) < time()) {
    // past date
    $time = 'past';
    mysqli_query($conn, "UPDATE polls SET status='0' WHERE id='$pollid'");
}

}
?>

<h3>
  Active Elections
</h3>
<?php
error_reporting(0);
$result = mysqli_query($conn, "SELECT * from polls WHERE status='1'");
while ($row = mysqli_fetch_assoc($result)) {
  echo '<div class="row" style="border:0.5px solid gray ;margin:15px;cursor:hand;padding:15px;border-radius:10px;">
    <div class="card-body">
    <b>'.$row["title"].'</b>
    <text style="display:inline;float:right;font-size:15px;"><a href="vote.php?id='.$row["id"].'">Vote>></text></a>
    </div>
  </div>
</div>';
}
?>
<h3>
  Ended Elections
</h3>
<?php
$result = mysqli_query($conn, "SELECT * from polls WHERE status='0'");
while ($row = mysqli_fetch_assoc($result)) {
  echo '<div class="row" style="border:0.5px solid gray ;margin:15px;cursor:hand;padding:15px;border-radius:10px;">
    <div class="card-body">
    <b>'.$row["title"].'</b>
    <text style="display:inline;float:right;font-size:15px;"><a href="vote.php?id='.$row["id"].'">View Results>></text></a>
    </div>
  </div>
</div>';
}
?>


</body>


<?php include 'inc/footer.php';?>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
  });
</script>

<script type="text/javascript" src="./main.41beeca9.js"></script></body>

</html>