<?php include 'inc/header.php';
ob_start();
echo'<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Admin Panel</title>
</head>
<body>
	<br><br><br><br>
    <h1>Admin Panel</h1>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>';

if (isset($_SESSION['admin'])) {
	
if (isset($_POST['save'])) {
	$site_title = $_POST['site_title'];
	
        $adminusername = $_POST['adminusername'];
         $adminpassword = $_POST['adminpassword'];
         $site_mail = $_POST['site_mail'];


     $text_block_1 = $_POST['text_block_1'];
         $fb_link = $_POST['fb_link'];
         $tw_link = $_POST['tw_link'];
         $yt_link = $_POST['yt_link'];

         $featured_title = $_POST['featured_title'];
         $featured_title_1 = $_POST['featured_title_1'];
         $featured_title_2 = $_POST['featured_title_2'];
         $featured_title_3 = $_POST['featured_title_3'];
         $featured_text_1 = $_POST['featured_text_1'];
         $featured_text_2 = $_POST['featured_text_2'];
         $featured_text_3 = $_POST['featured_text_3'];

         $about_title = $_POST['about_title'];
         $about_block_1 = $_POST['about_block_1'];
         $about_block_2 = $_POST['about_block_2'];
         $about_sign = $_POST['about_sign'];

         $footer_short = $_POST['footer_short'];


$fhandle=fopen("../inc/settings.php","wb");
fwrite($fhandle,"<?php \n");
fwrite($fhandle,"error_reporting(0); \n");
fwrite($fhandle,"date_default_timezone_set('UTC'); \n");
fwrite($fhandle,"$"."site_title = '".$site_title."'; \n");
fwrite($fhandle,"$"."fb_link = '".$fb_link."'; \n");
fwrite($fhandle,"$"."yt_link = '".$yt_link."'; \n");
fwrite($fhandle,"$"."tw_link = '".$tw_link."'; \n");
fwrite($fhandle,"$"."adminusername = '".$adminusername."'; \n");
fwrite($fhandle,"$"."adminpassword = '".$adminpassword."'; \n");
fwrite($fhandle,"$"."site_mail = '".$site_mail."'; \n");
fwrite($fhandle,"$"."featured_text_1 = '".$featured_text_1."'; \n");
fwrite($fhandle,"$"."text_block_1 = '".$text_block_1."'; \n");
fwrite($fhandle,"$"."featured_text_2 = '".$featured_text_2."'; \n");
fwrite($fhandle,"$"."featured_text_3 = '".$featured_text_3."'; \n");
fwrite($fhandle,"$"."featured_title_1 = '".$featured_title_1."'; \n");
fwrite($fhandle,"$"."featured_title_2 = '".$featured_title_2."'; \n");
fwrite($fhandle,"$"."featured_title_3 = '".$featured_title_3."'; \n");
fwrite($fhandle,"$"."featured_title = '".$featured_title."'; \n");
fwrite($fhandle,"$"."about_title = '".$about_title."'; \n");
fwrite($fhandle,"$"."about_block_1 = '".$about_block_1."'; \n");
fwrite($fhandle,"$"."about_block_2 = '".$about_block_2."'; \n");
fwrite($fhandle,"$"."about_sign = '".$about_sign."'; \n");
fwrite($fhandle,"$"."footer_short = '".$footer_short."'; \n");
fwrite($fhandle,"?>");

fclose($fhandle);
//all changes are saved
echo "<div class='bg-success'>All Changes are saved!</div>";
//redirect to same page after 3 seconds toremove info div above
header('refresh:3;url=index.php');

}

//form to modify settings
echo "<hr>";
echo "<form method='POST'>";
echo "Admin Username: ";
echo "<input type='text' value='".$adminusername."' name='adminusername' required><br><br>";
echo "Admin Password:";
echo "<input type='text' value='".$adminpassword."' name='adminpassword' required><br>";
echo "<i class='text-muted'>Make sure to double check password before saving.</i>";
echo "<br>Site Title: <input type='text' value='".$site_title."' name='site_title' required><br>";
echo "<br>Facebook Link: <text class='text-muted'>https://facebook.com/ </text><input type='text' value='".$fb_link."' name='fb_link' required><br>";
echo "<br>Twitter Link: <text class='text-muted'>https://twitter.com/ </text><input type='text' value='".$tw_link."' name='tw_link' required><br>";
echo "<br>YouTube Link: <text class='text-muted'>https://youtube.com/</text><input type='text' value='".$yt_link."' name='yt_link' required><br>";
echo "<br>Site Email: <input type='email' value='".$site_mail."' name='site_mail' required><br>";
echo "<br>Featured Title: <input type='text' value='".$featured_title."' name='featured_title' required><br>";
echo "<br>Featured Title 1: <input type='text' value='".$featured_title_1."' name='featured_title_1' required><br>";
echo "<br>Featured Title 2: <input type='text' value='".$featured_title_2."' name='featured_title_2' required><br>";
echo "<br>Featured Title 3: <input type='text' value='".$featured_title_3."' name='featured_title_3' required><br>";
echo "<br>Featured Text 1: <br><textarea type='text'  name='featured_text_1' required>".$featured_text_1."</textarea><br>";
echo "<br>Featured Text 2: <br><textarea type='text'  name='featured_text_2' required>".$featured_text_2."</textarea><br>";
echo "<br>Featured Text 3: <br><textarea type='text'  name='featured_text_3' required>".$featured_text_3."</textarea><br>";

echo "<br>Text Block 1: <br><textarea type='text'  name='text_block_1' required>".$text_block_1."</textarea><br>";

//about page
echo "<br>About Title: <input type='text' value='$about_title' name='about_title' required><br>";
echo "<br>About Block 1: <br><textarea type='text'  name='about_block_1' required>".$about_block_1."</textarea><br>";
echo "<br>About Block 2: <br><textarea type='text'  name='about_block_2' required>".$about_block_2."</textarea><br>";
echo "<br>About Sign: <input type='text' value='".$about_sign."' name='about_sign' required><br>";

echo "<br>Footer Short About Text: <br><textarea type='text'  name='footer_short' required>".$footer_short."</textarea><br>";



echo "<br><br><input type='submit' class='btn btn-success' name='save'><br>";
echo "</form><br>";



}else{
	header('location:auth.php');
}

ob_end_flush();
?>
</body>
</html>

