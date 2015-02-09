<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Michael &bull; Thomas Executive Search<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Bitter|Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="inc/main.css">

    <script type="text/javascript" src="inc/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="inc/bootstrap-collapse.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>

    <!--[if lt IE 9]><script src="inc/modernizr-2.6.2-respond-1.1.0.min.js"></script><![endif]-->
    <!--[if lt IE 7 ]>
    <script type="text/javascript" src="inc/dd_belatedpng.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
    <![endif]-->
  </head>
  <body>

    <header>
      <a href="."><img src="images/logo.png" alt="Michael-Thomas Execultive Search" id="logo"></a>

      <a id="menu-toggle" data-toggle="collapse" data-target="#menu"></a>

      <nav id="menu" class="collapse">
        <ul class="clearfix">
          <li><a href="our-approach.php">OUR APPROACH</a></li>
          <li>
            <a href="#">OUR FIRM</a>
            <ul>
              <li><a href="about-us.php">ABOUT US</a></li>
              <li><a href="#">LEADERSHIP</a></li>
              <li><a href="#">INDUSTRIES SERVED</a></li>
              <li><a href="#">INDUSTRY NEWS</a></li>
            </ul>
          </li>
          <li>
            <a href="#">HOW WE WORK</a>
            <ul>
              <li><a href="#">SPECIALIZED RECRUITING</a></li>
            </ul>
          </li>
          <li><a href="#">THEY LIKE US</a></li>
          <li>
            <a href="#">CONTACT</a>
            <ul>
              <li><a href="#">EMPLOYER SERVICES</a></li>
              <li><a href="#">JOB SEEKERS SERVICES</a></li>
              <li><a href="#">LOCATION</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <div id="banner<?php if ($PageTitle == "") echo "-home"; ?>"<?php if ($Banner != "") echo " style=\"background-image: url(images/" . $Banner . ");\""; ?>>
      <div id="banner-text">
        <?php echo $BannerText; ?>
      </div> <!-- END banner-text -->
    </div> <!-- END banner -->

    <div id="banner-border">
      <img src="images/logo-circle.png" alt="" id="logo-circle">
    </div> <!-- END banner-border -->

    <div id="page-title">
      <?php if ($PageTitle == "") { ?>
      <h1>MICHAEL<span class="name-bullet">&bull;</span>THOMAS</h1>
      Executive Search
      <?php } else { ?>
      <h1><?php echo $PageTitle ?></h1>
      <?php if ($SubTitle != "") echo $SubTitle; ?>
      <?php } ?>
    </div> <!-- END page-title -->

    <article<?php if ($PageTitle == "") echo " id=\"home\""; ?><?php if ($Article != "") echo " id=\"" . $Article . "\""; ?>>
