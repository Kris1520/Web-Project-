<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="TimeCircles/TimeCircles.js"></script>
<link rel="stylesheet" type="text/css" href="TimeCircles/TimeCircles.css">

<?php
    $connection = mysqli_connect("localhost", "root", "root", "poll");
    $sql = "SELECT * FROM polls WHERE id='1'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<div data-date="<?php echo $row['deadline']; ?>" id="count-down" ></div>

<script type="text/javascript">
    $(function () {  
     $("#count-down").TimeCircles();
	//	$("#count-down").TimeCircles().end().fadeOut(); 
		
		
$(".example.stopwatch").TimeCircles();
$(".start").click(function(){ $(".example.stopwatch").TimeCircles().start(); });
$(".stop").click(function(){ $(".example.stopwatch").TimeCircles().stop(); });
$(".restart").click(function(){ $(".example.stopwatch").TimeCircles().restart(); });
    });



    $(".example" ).TimeCircles({count_past_zero: false}).addListener(countdownComplete);
    
function countdownComplete(unit, value, total){
    if(total<=0){
        //$(this).fadeOut('slow').replaceWith("<h2>Time's Up!</h2>");
        <?php $res='end';?>
    }else{
        <?php $res = 'no end';?>
    }
}
</script>
<p><?php echo $res;?><p>

<div class="example stopwatch" data-timer="450"></div>
<button class="btn btn-success start">Start</button>
<button class="btn btn-danger stop">Stop</button>
<button class="btn btn-info restart">Restart</button>