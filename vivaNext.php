<?php
?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    <title>Connor Clark | vivaNext</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="https://use.typekit.net/gpa5ynz.css">
  </head>

  <body id="thanksBody">
  <div id="sideNavigation" class="sidenav">
    <a href="index.php" id="page1">HOME</a>
    <a href="work.php" id="page2">WORK</a>
    <a href="contact.php" id="page3">CONTACT</a>
  </div>

  <div id="hamburgMove">
    <span onclick="openNav()">
      <div id="nav-iconBlack3" class="hamburgerIcon">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
    </span>
  </div>

  <header>
    <h1 class="hidden">vivaNext</h1>
    <img src="images/logo_dark.svg" class="logo"/>
  </header>

  <!--<div id="workHeader" class="homeAnimation1">
    <h1 id="workHeaderText">WORK</h1>
  </div>-->

  <section class="row">
      <h1 class="hidden">Logo</h1>
      <section class="small-12 medium-12 large-12 columns">
          <h1 class="hidden">Logo</h1>
          <img id="vivaLogo" src="images/vivaLogo.svg">
      </section>
  </section>
  <section class="row">
    <h1 class="hidden">Description</h1>
    <div class="small-12 medium-12 large-12 caseStudySectionCenter columns">
      <p class="caseParagraphCenter">
        In 2016 and 2017, I was lucky enough to work with vivaNext as a Digital Media Summer Student for two consecutive years. In my time at vivaNext, I specialized in animation and video work, with occasional poster design mixed in as well.
      </p>
    </div>
  </section>



  <section class="caseStudySection row">
        <h1 class="hidden">VMC Hub Animation Video</h1>
        <div class="small-12 medium-12 large-4 videoCenter columns">
          <video id="video" controls style="width:350px; height:196.78px" poster="images/vmcPoster.jpg">
              <source id="mp4" src="videos/vmc.mp4" type="video/mp4">
              <p>Your browser does not support HTML5 Video!</p>
          </video>
        </div>
        <div class="small-12 medium-12 large-8 caseParagraphRight columns">
          <h3 class="caseStudyHeading">VMC HUB ANIMATION</h3>
          <p>For the opening of the Toronto York Subway Extension, I was tasked with creating a promotional video to raise awareness of the Vaughan Metropolitan Centre: a transit hub to allow passengers to move seamlessly from subway to bus rapid transit. I used isometric illustration to show the many layers of the area, from platform, to concourse, to bus terminal. </p>
        </div>
  </section>

  <section class="caseStudySection row">
        <h1 class="hidden">Utilities Video</h1>
        <div class="small-12 small-pull-12 medium-12 large-4 large-push-8 videoCenter columns">
          <video id="video" controls style="width:350px; height:196.78px" poster="images/utilitiesPoster.jpg">
              <source id="mp4" src="videos/utilities.mp4" type="video/mp4">
              <p>Your browser does not support HTML5 Video!</p>
          </video>
        </div>
        <div class="small-12 medium-12 large-8 large-pull-4 caseParagraphLeft columns">
          <h3 class="caseStudyHeading">UTILITIES EXPLAINER</h3>
          <p>For the opening of the Toronto York Subway Extension, I was tasked with creating a promotional video to raise awareness of the Vaughan Metropolitan Centre: a transit hub to allow passengers to move seamlessly from subway to bus rapid transit. I used isometric illustration to show the many layers of the area, from platform, to concourse, to bus terminal. </p>
        </div>
  </section>

  <section class="caseStudySectionSmall row">
        <h1 class="hidden">Motion Identity</h1>
        <div class="small-12 medium-12 large-12 columns">
        <p class="caseStudyHeadingCenter">
          MOTION IDENTITY
        </p>
        <p class="caseParagraphCenter">
          While vivaNext had strong branding in the form of their logo and chevron marking, the two symbols where never linked. Through the new motion identity I created, the idea of moving people forward is further pushed with combining the chevron with the vivaNext brand. The motion identity was then applied to the start of all YouTube and FaceBook videos. 
        </p>
        </div>
    </section>

    <section class="row">
        <h1 class="hidden">Motion Identity Animation</h1>
        <div class="small-12 medium-12 large-12 columns">
          <img src="images/motionIdentity.gif" width: 100% height: 100%>
        </div>
    </section>

    <section class="caseStudySectionLarge row">
        <h1 class="hidden">Hypermobile Ads</h1>
        <div class="small-12 medium-12 large-4 videoCenter columns">
          <img src="images/hypermobile.gif" width: 50% height: 50%>
        </div>
        <div class="small-12 medium-12 large-8 caseParagraphHyper columns">
          <h3 class="caseStudyHeading">HYPERMOBILE ADS</h3>
          <p>For the opening of the Toronto York Subway Extension, I was tasked with creating a promotional video to raise awareness of the Vaughan Metropolitan Centre: a transit hub to allow passengers to move seamlessly from subway to bus rapid transit. I used isometric illustration to show the many layers of the area, from platform, to concourse, to bus terminal. </p>
        </div>
  </section>


    <section class="caseStudySection row">
      <h1 class="hidden">Back to Work</h1>
      <div class="small-12 medium-12 large-12 columns">
        <a href="work.php"><div id="backToHome">BACK TO WORK</div></a>
      </div>
    </section>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>

    <script src="js/app.js"></script>
  </body>
</html>