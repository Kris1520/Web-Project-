<?php include 'inc/header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">

 

  <title>Poll</title>  

<link href="css/important.css" rel="stylesheet"></head>

<body>

<?php 

if (!isset($_SESSION['username'])) {
  header('location:account.php?r=elections.php');
}


$stats = '';
$stats .= "<ol>";
$id = $_GET['id'];
    $q = mysqli_query($conn, "SELECT * from questions Where pollid = '".$_GET['id']."'");
    while ($row = mysqli_fetch_assoc($q)) {
        $question = $row['question'];
        $qid = $row['id'];
        $stats .= "<li><b>$question</b>";
        
            $q2 = mysqli_query($conn, "SELECT * from votes Where pollid = '".$_GET['id']."' and choice='$question'");
    $count= mysqli_num_rows($q2);
    $stats .= ": $count Votes</li>";


    }
$stats.= "</ol>";
    $user = $_SESSION['username'];
$id = $_GET['id'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//if form is submitted
if (isset($_GET['submit'])) {
  if (isset($_GET['choice'])) {
    $id = $_GET['id'];
    $choice = $_GET['choice'];

    //check if user has already voted or not
    $result = mysqli_query($conn, "SELECT * from votes WHERE pollid='$id' and (ip='$ip' or username = '$user') LIMIT 1");    
    $count = mysqli_num_rows($result);
    if ($count == 0) {
      
    $add = mysqli_query($conn, "INSERT into votes VAlUES('','$id', '$ip', '$choice', '$user')");    
      if ($add) {
        echo "<p>Vote Added!</p>";
        header('election.php');
      }else{
        echo "Error occured!";
      }
    }else{
      echo "<p>You already voted!</p>";
    }
  }else{
    echo "<p style='font-color:red;'>Please choose something to vote.</p>";
  }
}

?>

<?php

$result = mysqli_query($conn, "SELECT * from polls WHERE id='$id' LIMIT 1");
while ($row = mysqli_fetch_assoc($result)) {
  $status = $row["status"];

  echo '<form method="GET" action="?id='.$row["id"].'"><div class="row" style="border:0.5px solid gray ;margin:15px;cursor:hand;padding:15px;border-radius:10px;">
    <div class="card-body">
    <h4>'.$row["title"].'</h4>
    <input type="hidden" name="id" value="'.$row["id"].'">

';
if ($status == '0') {
  echo "<h4>&nbsp;&nbsp;&nbsp;Result:</h4>";
    echo "<p>".$stats."</p></div></div></div>";
    }else{
$result = mysqli_query($conn, "SELECT * from questions WHERE pollid='$id'");
while ($row = mysqli_fetch_assoc($result)) {


 echo "<input type='radio' name='choice' placeholder='hi' value='".$row['question']."'>".$row['question']."<br>";

}
echo '   
<center><input type="submit" value="Vote" name="submit" class="btn btn-lg btn-primary"</center>
';
}
echo '
    </div>
  </div>
</div>
';
}

?>






<?php include 'inc/footer.php';?>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
  });
</script>

<script type="text/javascript" src="./main.41beeca9.js"></script></body>

</html>