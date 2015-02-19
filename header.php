<?php
function email($address, $name="") {
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

  <title>Niche Sampling Inc.<?php if ($PageTitle != "") { echo " | " . $PageTitle; } ?></title>
  <meta name="description" content="Niche Sampling Inc. (NSI) distributes samples to reach the heaviest users and most influential consumers, creating the perfect marriages between brands, retailers, sample distribution venues, media and consumers.<?php if ($Description != "") { echo " " . $Description; } ?>">
  <meta name="keywords" content="brand awareness, yoga instructors, target sampling, target audience, nsi, market research, market study, niche sampling, nichesampling, market sampling, market sample, product samples, brand samples, sample distribution, shopper sampling, yoga, yogafit, yoga fit, curves, product sampling, product sampling programs<?php if ($Keywords != "") { echo ", " . $Keywords; } ?>">
  <meta name="author" content="Remedi Creative">

  <link rel="shortcut icon" href="images/favicon.ico">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="stylesheet" href="inc/niche2011.css" type="text/css" media="screen,print">
  <!--[if IE ]>
  <link rel="stylesheet" href="inc/niche2011-ie.css" type="text/css" media="screen,print">
  <![endif]-->

  <script type="text/javascript" src="inc/jquery-1.5.1.js"></script>
  <script type="text/javascript" src="inc/jquery.cycle.all.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      <?php if ($PageTitle == "") { ?>$('#main-image').after('<div id="nav">').cycle({ fx: 'fade', pager: '#nav' });<?php } ?>
      <?php if ($InsertJQ != "") { echo $InsertJQ; } ?>
    });
  </script>
  <!--[if lt IE 8 ]>
  <script type="text/javascript" src="inc/IE8.js"></script>
  <![endif]-->
  <!--[if lt IE 7 ]>
  <script type="text/javascript" src="inc/dd_belatedpng.js"></script>
  <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
  <![endif]-->

  <!-- BEGIN Google Analytics -->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28497665-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <!-- END Google Analytics -->
</head>
<body>

<div id="wrap">
  <a href="."><img src="images/logo.png" alt="Niche Sampling Inc." id="logo"></a>

  <div id="header">
    <div id="top-menu">
      <a href="http://www.linkedin.com/in/philgruber" class="linkedin"></a>
      <a href="http://www.facebook.com/people/Niche-Sampling/1096609003" class="facebook"></a>

      <!--<a href="#" style="float: right; margin-left: 28px;">NSI Brochure <img src="images/icon-pdf.jpg" alt="PDF" style="vertical-align: middle;"></a>-->
      <a href="yoga-sign-up.php" style="float: right; margin-left: 28px;">Yoga Instructor</a>
      <a href="womens-fitness-clubs.php" style="float: right; margin-left: 28px;">Women's Fitness Clubs</a>
    </div> <!-- END top-menu -->

    <div style="clear: both; height: 26px;"></div>

    <ul id="menu">
      <li id="m1"><a href="."></a></li>
      <li id="m2">
        <a href="programs.php"></a>
        <ul>
          <li style="padding-left: 7px; color: #FFFFFF; font-weight: bold;">Adult</li>
            <li style="margin-left: 10px;"><a href="womens-fitness-gift-pack-sampling.php">Women's Fitness Gift Pack Sampling</a></li>
            <li style="margin-left: 10px;"><a href="yoga-gift-pack-sampling.php">Yoga Gift Pack Sampling</a></li>
            <li style="margin-left: 10px;"><a href="yoga-sign-up.php">Yoga Instructors Gift Pack Sign Up</a></li>
            <li style="margin-left: 10px;"><a href="womens-fitness-clubs.php">Women's Fitness Clubs Sample Pack Sign Up</a></li>
            <li style="margin-left: 10px;"><a href="amphitheater-concert-sampling.php">Amphitheater Concert Sampling</a></li>
            <li style="margin-left: 10px;"><a href="live-theater-sampling.php">Live Theater Sampling</a></li>
            <li style="margin-left: 10px;"><a href="airline-passenger-sampling.php">Airline Passenger Sampling</a></li>
            <li style="margin-left: 10px;"><a href="new-mother-sampling.php">New Mother Sampling</a></li>
            <li style="margin-left: 10px;"><a href="prenatal-sampling.php">Prenatal Sampling</a></li>
          <li style="padding: 0 7px;"><hr></li>
          <li style="padding-left: 7px; color: #FFFFFF; font-weight: bold;">Student &amp; College</li>
            <li style="margin-left: 10px;"><a href="bookstore-sampling.php">Bookstore Sampling</a></li>
            <li style="margin-left: 10px;"><a href="sorority-sampling.php">Sorority Sampling</a></li>
        </ul>
      </li>
      <li id="m3">
        <a href="market-research.php"></a>
        <ul>
          <li><a href="payback-calculator.php">Payback Calculator</a></li>
        </ul>
      </li>
      <li id="m4">
        <a href="about-us.php"></a>
        <ul>
          <li><a href="management-profiles.php">Management Profiles</a></li>
          <li><a href="our-clients.php">Our Clients</a></li>
          <li><a href="brands.php">Brands</a></li>
          <li><a href="synergy.php">Synergy Sampling</a></li>
          <li><a href="distribution-partners.php">Distribution Partners</a></li>
          <li><a href="distribution-process.php">Distribution Process</a></li>
        </ul>
      </li>
      <li id="m5"><a href="contact-us.php"></a></li>
    </ul> <!-- END menu -->
  </div> <!-- END header -->

  <div style="clear: both; height: 5px; line-height: 5px; font-size: 0;"></div>

  <?php if ($PageTitle == "") { ?>
  <div id="main-image">
    <div style="background: url(images/main-image1b.jpg) no-repeat;">
      <img src="images/main-image-text1.png" alt="" style="position: absolute; top: 206px; left: -11px;">
    </div>

    <div style="background: url(images/main-image2b.jpg) no-repeat;">
      <img src="images/main-image-text2.png" alt="" style="position: absolute; top: 206px; right: -11px;">
    </div>

    <div style="background: url(images/main-image3.jpg) no-repeat;">
      <img src="images/main-image-text3.png" alt="" style="position: absolute; top: 50px; left: -11px;">
    </div>

    <div style="background: url(images/main-image4.jpg) no-repeat;">
      <img src="images/main-image-text4.png" alt="" style="position: absolute; top: 50px; right: -11px;">
    </div>
  </div> <!-- END main-image -->
  <?php } else { ?>
  <img src="images/<?php echo ($HeaderImage != "") ? $HeaderImage : "header-generic.jpg"; ?>" alt="" style="border-top: 14px solid #80E7EC;">
  <?php } ?>

  <hr style="margin-bottom: 23px;">

  <?php if ($PageTitle != "") { ?>
  <?php if ($SideMenu != "") { include "sidemenu" . $SideMenu . ".php"; } ?>

  <div id="content"<?php if ($SideMenu == "") { echo " style=\"width: 943px;\""; } ?>>
  <?php } ?>