<?php

	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once("admin/scripts/config.php");
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$street = $_POST['street'];
		$direct = "thankyou.php";

			if($street === "") {
				$sendMail = submitMessage($name, $email, $message, $direct);
				//echo "Street is empty";
			}

	}
?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">
    <title>Connor Clark | Contact</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="https://use.typekit.net/gpa5ynz.css">
  </head>

  <body id="contactBody">
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
    <h1 class="hidden">Contact Page</h1>
    <img src="images/logo_dark.svg" class="logo"/>
  </header>

  <!--<div id="workHeader" class="homeAnimation1">
    <h1 id="workHeaderText">WORK</h1>
  </div>-->

<section class="contactParagraph row">
  <h1 class="hidden">Contact</h1>
  <section class="small-12 medium-12 large-8 columns">
    <h1 class="hidden">Description</h1>
    <section class="contactText">
      <h1 class="hidden">Social Media</h1>
    <p id="contactParagraph">
      Have a cool project in mind? I'm available for freelance work - so fill out the contact form with a few details and I’ll get back to you as soon as I can!
    </p>

    <p class="socialMedia">
      Follow me on Instagram for pictures of my dog, or connect with me on LinkedIn!
    </p>

    <div id="socialIconCont">
    	<a href="https://www.instagram.com/connor.clark/" target="_blank"><img src="images/instagram.svg" class="socialIcons"></a>
    	<a href="https://www.linkedin.com/in/connor-clark-5a80ab148/" target="_blank"><img src="images/linkedIn.svg" class="socialIcons"></a>
    </div>
    </section>
  </section>


  <div class="small-12 medium-12 large-4 columns">
	  <div class="formCenter">
	  <form action="contact.php" method="post" class="contactForm"> 
	    <!--Make sure to give each input a name attribute(name="")-->
	       <label>Name:</label>
	       		<input id="nameInput" name="name" type="text" size="21" length="30"/>
	       <label>Email:</label>
	       		<input id="emailInput" name="email" type="text" size="21" maxlength="30" />
	       		<!--Catch Bots-->
	       <label for="street" class="streetHide">Street: </label><input name="street" type="text" size="21" maxlength="30" class="streetHide"/>
	       <label for="message">Message:</label>
	       		<textarea id="messageInput" name="message"></textarea>
	       <input id="sendButton" name="submit" type="submit" value="Send" />
	    </form>
	    </div>
    </div>

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>

    <script src="js/app.js"></script>
  </body>
</html>