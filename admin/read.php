<?php require_once "inc/header.php";
$stats = "";
$stats2 = "<br>";
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "../inc/db.php";
    $stats .= "<ol>";
    $q = mysqli_query($conn, "SELECT * from questions Where pollid = '".$_GET['id']."'");
    while ($row = mysqli_fetch_assoc($q)) {
        $question = $row['question'];
        $qid = $row['id'];
        $stats .= "<li><b>$question</b>";
        $stats2 .= "$question <a href='deletechoice.php?id=$qid&r=".$_GET['id']."'>Delete (Can't be undone)</a><br>";
            $q2 = mysqli_query($conn, "SELECT * from votes Where pollid = '".$_GET['id']."' and choice='$question'");
    $count= mysqli_num_rows($q2);
    $stats .= ": $count Votes</li>";


    }
$stats.= "</ol>";
                             
    // Prepare a select statement
    $sql = "SELECT * FROM polls WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["title"];
                //$address = $row["address"];
                $salary = $row["status"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <br><br><br>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Poll Details</h1>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $row["title"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Manage Choices</label>
                        <?php echo $stats2; ?>
                    </div>
                    <div class="form-group">
                        <label>Voting Status(Votes on each Choice):</label>
                        <p class="form-control-static">
                            <?php echo $stats;?></p>
                    </div>
                    <div class='row'><a href="polls.php" class="btn btn-primary">Back</a>
                    <a href="addchoice.php?id=<?php echo $_GET['id']?>" class="btn btn-success">Add Choice</a>
                    <a href="../vote.php?id=<?php echo $_GET['id']?>" class="btn btn-success">View on website</a>
                </div>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>