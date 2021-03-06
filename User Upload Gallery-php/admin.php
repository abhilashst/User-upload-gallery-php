<!DOCTYPE html>

<html>

<head>

<title> Pixel Media</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!-- BEGIN STYLES INCLUDES -->

<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/skeleton.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- BEGIN ALTERNATIVE STYLES INCLUDES -->

<link rel="alternate stylesheet" type="text/css" href="css/main.css" title="color0">
<link rel="alternate stylesheet" type="text/css" href="css/switch/color1.css" title="color1">
<link rel="alternate stylesheet" type="text/css" href="css/switch/color2.css" title="color2">
<link rel="alternate stylesheet" type="text/css" href="css/switch/color3.css" title="color3">
<link rel="alternate stylesheet" type="text/css" href="css/switch/color4.css" title="color4">
<link rel="alternate stylesheet" type="text/css" href="css/switch/dark.css" title="dark">
<link rel="alternate stylesheet" type="text/css" href="css/main.css" title="main">

<!-- BEGIN JS INCLUDES -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/html5.js"></script>
<script src="js/jquery.nav.html"></script>
<script src="js/jquery.gmap.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>


</head>

<body>

<?php
require_once('header1.php');
?>

<div class="breadcrums">
  <div class="container">
    
    <div class="where_i_am">
      <ul>
        <li><a href="#">Home</a><img src="img/breadcrum_arrow.png" alt=""></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <!-- where i am -->
  </div>
  <!-- container -->
</div>
<!-- breadcrums -->


<section id="content" class="container">
<div class="sixteen columns">
 <div class="contact_us">
    <h1>Hi there</h1>
	<pre>
	  
	  
	  
	  
	  
	  </pre>
    <p>
      Upload Images to Gallery here...
	  
    </p>
  </div>
 
<form  method="post" action="authenticate.php">

 
       <input type="text" placeholder="Email" name="lemail" value=""/><br><br>
	   
 
       <input type="password" placeholder="Password" name="lpassword" value=""/><br><br>
	   
	   
	   <input type="submit" class="button " value="Login" id="submit"/>
											   </form>
</div>
</section>
<!--CONTENT ENDS-->
<?php
require_once('footer.php');
?>
<!-- Switch Panel
================================================== -->


</div>

<script>
/* Mobile Devices Navigation Select Script */
(function (cash) { 
  $('select.resp_navigation').bind('change', function () { 
    if ($(this).val() !== '' && document.location.href.replace($(this).val(), '') === document.location.href) { 
      document.location.href = $(this).val();
    }
  } );
} )(jQuery);
</script>
<script src="js/custom.js"></script>
<script src="js/validate.js"></script>
<script src="js/flickr.js" type="text/javascript"></script>
</body>
</html>