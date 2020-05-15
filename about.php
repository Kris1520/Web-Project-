<?php include 'inc/header.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="WEPTT About Page" name="description">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">

 

  <title>About Us</title>  

<link href="css/important.css" rel="stylesheet"></head>

<body>

<div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="./assets/images/img-01.jpg">
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <h1><?php echo $about_title;?></h1>
                     </div>   
                        <p class="section-container-spacer">
                          <?php echo $about_block_1;?>
                        </p>

                  
                <div class="col-xs-12 col-md-8 col-md-offset-2">
              
                        <p><?php echo $about_block_2;?></p>
                            <small class="signature pull-right"><?php echo $about_sign;?></small>
                </div>
            </div>




        </div>

    </div>



</div>



</body>

<?php include 'inc/footer.php';?>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
  });
</script>

<script type="text/javascript" src="./main.41beeca9.js"></script></body>

</html>