<?php
include_once "../inc/dbconfig.php";

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
  
  <title>Niche Sampling Inc. Administration<?php if ($PageTitle != "") { echo " | " . $PageTitle; } ?></title>
  <meta name="description" content="<?php if ($Description != "") { echo $Description; } ?>">
  <meta name="keywords" content="<?php if ($Keywords != "") { echo $Keywords; } ?>">
  <meta name="author" content="Remedi Creative">
  
  <link rel="shortcut icon" href="../images/favicon.ico">
  <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
  <link rel="stylesheet" href="../inc/niche2011.css" type="text/css" media="screen,print">
  <!--[if IE ]>
  <link rel="stylesheet" href="../inc/niche2011-ie.css" type="text/css" media="screen,print">
  <![endif]-->
  <link rel="stylesheet" href="inc/admin.css" type="text/css" media="screen,print">
  
  <script type="text/javascript" src="../inc/jquery-1.5.1.js"></script>
  <script type="text/javascript" src="inc/jquery.tipTip.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');
      $("a[title]").tipTip({ keepAlive: true, maxWidth: "400px", defaultPosition: "left" });
    });
  </script>
  <link rel="stylesheet" href="inc/tipTip.css" type="text/css" media="screen,print">
  <!--[if lt IE 8 ]>
  <script type="text/javascript" src="inc/IE8.js"></script>
  <![endif]-->
  <!--[if lt IE 7 ]>
  <script type="text/javascript" src="../inc/dd_belatedpng.js"></script>
  <script type="text/javascript">DD_belatedPNG.fix('img, .png');</script>
  <![endif]-->
</head>
<body>

<div id="wrap">
  <a href="."><img src="../images/logo.png" alt="Niche Sampling Inc." id="logo"></a>
  
  <div id="header">
    <?php if ($PageTitle != "Login") { ?>
    <ul id="menu">
      <!--<li><a href=".">home</a></li>-->
      <li><a href="womens-fitness-index.php">women's fitness sign-ups</a></li>
      <li><a href="yoga-index.php">yoga sign-ups</a></li>
    </ul> <!-- END menu -->
    <?php } ?>
  </div> <!-- END header -->
  
  <div style="clear: both; height: 5px; line-height: 5px; font-size: 0;"></div>
  
  <hr style="margin-bottom: 23px;">
  
  <div id="content" style="width: 943px;">
    