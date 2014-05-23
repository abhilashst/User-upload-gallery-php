<!DOCTYPE html>

<html>

<head>

<title>Pixel Media </title>

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
<script src="js/html5.js"></script>
<script src="js/jquery.nav.html"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/styleswitcher.js"></script>
<script src="js/jquery.isotope.min.js"></script>

</head>

<body>
<?php
require_once('header.php');
?>
<div class="breadcrums">
  <div class="container">

    <div class="where_i_am">
      <ul>
        <li><a href="#">Home</a><img src="img/breadcrum_arrow.png" alt=""></li>
        <li><a href="#">Portfolio</a><img src="img/breadcrum_arrow.png" alt=""></li>
 
      </ul>
    </div>
    <!-- where i am -->
  </div>
  <!-- container -->
</div>
<!-- breadcrums -->
<div class="container">
  <div id="portfolio_container" class="clickable variable-sizes clearfix row">
<?php
$dirname = "upload/";


$images = glob($dirname."*");
?>
<?php foreach($images as $image): ?>
 <div class="pfolio_item freebies one-third column" data-filter="brand">
      <div class="picture">
     <a href="<?php echo $image; ?>" class="prettyPhoto">'
        <div class="image-overlay-link">
        </div>
        <?php echo '<img src="'.$image.'" height="250" width="300"></a><br>' ;?>
        </a>
     
    </div>
</div>
<?php endforeach; ?>
</div>
</div>
<?php
require_once('footer.php');
?>
<!-- Switch Panel
================================================== -->

<script src="js/switch.js"></script>
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
<script src="js/flickr.js" type="text/javascript"></script>
</body>
</html>