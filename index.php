<?php
	$text = "I am Text.";

	//Error Reporting for MAMP
	/*ini_set('display_errors', 1);
	error_reporting(E_ALL);*/

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    <title>Connor Clark | Home</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="https://use.typekit.net/gpa5ynz.css">
  </head>

  <body id="homeBody">
  <div id="sideNavigation" class="sidenav">
    <a href="index.php" id="page1">HOME</a>
    <a href="work.php" id="page2">WORK</a>
    <a href="contact.php" id="page3">CONTACT</a>
  </div>

  <div id="hamburgMove">
    <span onclick="openNav()">
      <div id="nav-icon3" class="hamburgerIcon">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
    </span>
  </div>

  <header>
    <img src="images/logo.svg" class="logo"/>
  </header>


  <section id="homeContent">
    <h1 id="hey" class="homeAnimation1">HELLO,</br>I'M CONNOR.</h1>
    <p class="homeAnimation2">/designer</p>
    <p class="homeAnimation3">/animator</p>
    <p class="homeAnimation4">/videographer</p>
    <p class="homeAnimation5">/front end developer</p>
    <p class="homeAnimation6">/photographer.</p>
    <a href="#"><span onclick="demoReel()"><div id="viewReel">VIEW MY REEL</div></a></span>
</section>

<section id="demoReelHide">
  <h1 class="hidden">Demo Reel</h1>
  <iframe src="https://player.vimeo.com/video/199282169?color=006bff&title=0&byline=0&portrait=0"
  width="600" height="337.5" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
</section>

<div id="demoReelBackground">
  <span onclick="closeDemoReel()"><h3 id="closeReel">Close Reel</h3></span>
</div>

    <div class="fullscreen-bg">
    <video loop muted autoplay class="fullscreen-bgVideo">
        <source src="videos/backgroundvideo.mp4" type="video/mp4">
    </video>
</div>


    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>

    <script src="js/app.js"></script>
  </body>

</html>