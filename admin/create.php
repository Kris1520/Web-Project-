<?php include '../inc/settings.php';
include '../inc/db.php';
date_default_timezone_set('UTC');

if (isset($_POST['submit'])) {
    $deadline =  $_POST['date'];
    $title =  $_POST['name'];
    

    mysqli_query($conn, "INSERT into polls vALUES ('','$title','$deadline','1')");
    echo mysqli_error($conn);
    header("location:/admin/polls.php");
}
require_once "inc/header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Poll</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <br>
    <br>
    <br>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Poll</h2>
                    </div>
                    <p>Please fill this form and submit to add new poll to the database.</p>                    <form method="post">
                        <div class="form-group">
                            <label>Poll Question/Title</label>
                            <input type="text" name="name" class="form-control" value="">
                            <label>DeadLine</label>
                            <input type="date" id="date" name="date">
                            <p>Results will be revealed at 12 am at date you pick.</p>
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Submit" name='submit'>
                        <a href="polls.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>