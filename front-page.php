<?php
/**
 * Template Name: front-page
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portshowlio 2016</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT AWESOME
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/normalize.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.9.24/paper-full.min.js"></script>
  <script type="text/paperscript" src="<?php bloginfo('template_url'); ?>/js/sccawaves.js" canvas="myCanvas"></script>

  <?php wp_head(); ?>

</head>

<body>
  <div class="full-page">
    <div class="wave-wrap">
      <div class="top-wave2"></div>
      <div class="top-wave1"></div>
      <div class="top-wave3"></div>
      <div class="top-wave4"></div>
      <div class="top-wave5"></div>
    </div>
    <canvas resize="true" id="myCanvas"></canvas>
    <div class="wave-wrap">
      <div class="bottom-wave5"></div>
      <div class="bottom-wave4"></div>
      <div class="bottom-wave3"></div>
      <div class="logo">
        <img src="<?php bloginfo('template_url'); ?>/images/Logos_final-05.svg">
        <img class="stamp" src="<?php bloginfo('template_url'); ?>/images/logo-stamp.svg">
      </div>
      <div class="bottom-wave2"></div>
      <div class="bottom-wave1"></div>
    </div>
    <div class="scca">
      <a href="http://seattlecentralcreativeacademy.com"><h1>SCCA</h1></a>
    </div>
    <div class="social">
      <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
    </div>
    <!-- <div class="text">
      <img src="images/logo-stamp.svg">
    </div> -->
  </div>



<?php wp_footer(); ?>


<!-- Scripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
<!-- <script src="js/sccawaves.js"></script> -->


</body>
</html>

