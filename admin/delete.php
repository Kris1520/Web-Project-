<?php include '../inc/settings.php';
include '../inc/db.php';
date_default_timezone_set('UTC');
session_start();
if (!isset($_SESSION['admin'])) {
 //header('Refresh: 0; url=../index.php');
 header('location:../index.php');
 exit;
}

// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    
    
    // Prepare a delete statement
    $sql = "DELETE FROM polls WHERE id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("Refresh: 0; url=polls.php");
            exit();
        } else{
            		 $_SESSION['error'] = null;
	   $_SESSION['error'] = "Something  went wrong Please try again";
        //header("Refresh: 0; url=polls.php");
		//header("location:/polls.php");
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
		 $_SESSION['error'] = null;
	   $_SESSION['error'] = "Something  went wrong Please try again";
        //header("location:/polls.php");
        exit();
    }
}
header("Refresh: 0; url=polls.php");
?>
