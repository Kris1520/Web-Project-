<?php require_once "inc/header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    
</head>
<body>
    <br><br><br>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Add Choice to a poll</h2>
                        <a href="read.php?id=<?php echo $_GET['id'];?>" class="btn btn-white pull-right">Back</a>
                    </div>
                    <?php
                    include '../inc/db.php';
                    $id = $_GET['id'];
                    if (isset($_GET['submit'])) {
                        $choice = $_GET['choice'];
                        $add = mysqli_query($conn, "INSERT into questions VALUES ('', '$id', '$choice')");
                        if ($add) {
                            header('location:read.php?id='.$id.'');
                        }
                    }
                    ?>
                </div>






            </div>        
        </div>
    </div>

<center>
    <form>
        <label>Choice (to be added in selected poll):</label><br>
        <input type='text' name='choice' required placeholder='Enter something...'>
        <input type='hidden' value='<?php echo $id;?>' name='id'>
        <br><hr>
        <input type='submit' name='submit' class='btn btn-primary'>
    </form>
</center>
</body>
</html>