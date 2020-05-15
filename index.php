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

 

  

<link href="css/important.css" rel="stylesheet"></head>

<body>

<title><?php echo $site_title;?></title>  


<div class="white-text-container background-image-container" style="background-image: url('./assets/images/img-home.jpg')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1><?php echo $site_title;?></h1>
                <p><?php echo $text_block_1;?></p>
                 <a href="about.php" title="" class="btn btn-lg btn-primary">About Us</a>
            </div>

        </div>
    </div>
</div>

<div class="section-container border-section-container">
    <div class="container">
            <div class="row">
                <div class="col-md-12 section-container-spacer">
                    <div class="text-center">
                        <h2><?php echo $featured_title;?></h2>
                                          </div>
                </div>

                <div class="col-md-4">
                    <div class="fa-container">
                        <i class="fa fa-comment-o fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3><?php echo $featured_title_1;?></h3>
                    </div>
                    <div>
                        <p><?php echo $featured_text_1;?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fa-container">
                        <i class="fa fa-heart-o fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3><?php echo $featured_title_2;?></h3>
                    </div>
                    <div>
                        <p><?php echo $featured_text_2;?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fa-container">
                        <i class="fa fa-bell-o fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="text-center">
                        <h3><?php echo $featured_title_3;?></h3>
                    </div>
                    <div>
                        <p><?php echo $featured_text_3;?>
                        </p>
                    </div>
                </div>

            </div>
    </div>
</div>

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2>Did you know it was election time?</h2>
                    <p>Check out our election to elect our club postions.</p>
                    <a href="elections.php" title="" class="btn btn-primary btn-lg">Elections</a>
                </div>
            </div>
        </div>
     </div>
 </div>





<?php include 'inc/footer.php';?>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
  });
</script>

<script type="text/javascript" src="./main.41beeca9.js"></script></body>

</html>