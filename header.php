<?php
function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
$TopDir = basename(dirname($_SERVER['PHP_SELF'])) == "industry-news" ? "../" : "";
$Description = (isset($Description)) ? $Description : "Michael-Thomas Executive Search is a national executive search firm with a national candidate network and deep industry knowledge to help you, the client, achieve your business goals and success.";
$Keywords = (isset($Keywords)) ? $Keywords : "Michael-Thomas, Michael Thomas Executive Search, Michael Collentine, executive search firm, job placement, recruiter, job recruiter, executive job search, executive recruiting partner, executive jobs, specialized recruiting, mid level positions, senior level positions";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Michael &bull; Thomas Executive Search<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="<?php echo $Description; ?>">
    <meta name="keywords" content="<?php echo $Keywords; ?>">
    <meta name="author" content="Foresite Group">

    <meta name="viewport" content="width=device-width">

    <?php
    if (basename(dirname($_SERVER['PHP_SELF'])) == "industry-news") {
      echo '<link rel="stylesheet" type="text/css" media="all" href="' . $TopDir . 'industry-news/wp-content/themes/twentyfifteen/genericons/genericons.css" />';
      echo '<link rel="stylesheet" type="text/css" media="all" href="' . $TopDir . 'industry-news/wp-content/themes/michaelthomas/style.css" />';
    }
    ?>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='//fonts.googleapis.com/css?family=Bitter|Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php echo filemtime($TopDir . "inc/main.css"); ?>">

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/bootstrap-collapse.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      });
    </script>

    <!--[if lt IE 9]><script src="<?php echo $TopDir; ?>inc/modernizr-2.6.2-respond-1.1.0.min.js"></script><![endif]-->
    <!--[if lt IE 7 ]>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/dd_belatedpng.js"></script>
    <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
    <![endif]-->

    <!-- BEGIN Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-60897403-1', 'auto');
      ga('send', 'pageview');
    </script>
    <!-- END Google Analytics -->

    <!-- Global site tag (gtag.js) - Google Analytics - This will stop working July 1, 2023 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MSYNZ7D7M5"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-MSYNZ7D7M5');
    </script>
  </head>
  <body>

    <header>
      <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Michael-Thomas Execultive Search" id="logo"></a>

      <a id="menu-toggle" data-toggle="collapse" data-target="#menu" class="fa fa-bars"></a>

      <nav id="menu" class="collapse">
        <ul class="clearfix">
          <li><a href="<?php echo $TopDir; ?>.">HOME</a></li>
          <li><a href="<?php echo $TopDir; ?>search-process.php">SEARCH PROCESS</a></li>
          <li>
            <a href="<?php echo $TopDir; ?>our-firm.php">OUR FIRM</a>
            <ul>
              <li><a href="<?php echo $TopDir; ?>leadership.php">LEADERSHIP</a></li>
              <li><a href="<?php echo $TopDir; ?>who-we-are.php">WHO WE ARE</a></li>
              <li><a href="<?php echo $TopDir; ?>our-clients.php">OUR CLIENTS</a></li>
              <li><a href="<?php echo $TopDir; ?>testimonials.php">TESTIMONIALS</a></li>
              <li><a href="<?php echo $TopDir; ?>industry-news/">INDUSTRY NEWS</a></li>
            </ul>
          </li>
          <li><a href="<?php echo $TopDir; ?>business-consulting.php">BUSINESS CONSULTING</a></li>
          <li><a href="<?php echo $TopDir; ?>employers.php">EMPLOYERS</a></li>
          <li>
            <a href="<?php echo $TopDir; ?>contact-us.php">CONTACT US</a>
            <ul>
              <li><a href="<?php echo $TopDir; ?>job-seeker-services.php">JOB SEEKER SERVICES</a></li>
              <li><a href="<?php echo $TopDir; ?>location.php">LOCATION</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <div id="banner<?php if ($PageTitle == "") echo "-home"; ?>"<?php if (isset($Banner)) echo " style=\"background-image: url(" . $TopDir . "images/" . $Banner . ");\""; ?>>
      <div id="banner-text">
        <?php echo $BannerText; ?>
      </div> <!-- END banner-text -->
    </div> <!-- END banner -->

    <div id="banner-border">
      <img src="<?php echo $TopDir; ?>images/logo-circle.png" alt="" id="logo-circle">
    </div> <!-- END banner-border -->

    <div id="page-title"<?php if (isset($Article) && $Article == "our-approach") echo " class=\"our-approach\""; ?>>
      <?php if ($PageTitle == "") { ?>
      <h1>MICHAEL<span class="name-bullet">&bull;</span>THOMAS</h1>
      Executive Search
      <?php } else { ?>
      <h1><?php echo $PageTitle ?></h1>
      <?php if (isset($SubTitle)) echo $SubTitle; ?>
      <?php } ?>
    </div> <!-- END page-title -->

    <article<?php if ($PageTitle == "") echo " id=\"home\""; ?><?php if (isset($Article)) echo " id=\"" . $Article . "\""; ?><?php if (isset($ColNum)) echo " class=\"" . $ColNum . "\""; ?>>
