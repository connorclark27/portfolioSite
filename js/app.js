/* Open and Close Navigation*/
function openNav() {
    var expand = document.getElementById("sideNavigation");
    expand.classList.toggle("openNavigation");

    var blur = document.getElementById("homeContent");
    blur.classList.toggle("homeContentBlur");
}

/*Hamburger Menu to Close Button*/
$(document).ready(function(){
	$('#nav-icon3').click(function(){
		$(this).toggleClass('open');
	});
});

/*Fade in on scroll
function WorkScroll_1(ev){
    if(window.pageYOffset>400)document.getElementById("sideNavigation").style.width = "100%";
}
window.onscroll=WorkScroll_1*/

/*Open Lightbox*/
function demoReel() {
    document.getElementById('demoReelHide').style.visibility = 'visible';
    document.getElementById('demoReelHide').style.opacity = '1';

    document.getElementById('demoReelBackground').style.visibility = 'visible';
    document.getElementById('demoReelBackground').style.opacity = '1';

    var blur = document.getElementById("homeContent");
    blur.classList.toggle("homeContentBlur");
}

/*Close Lightbox*/
function closeDemoReel() {
    document.getElementById('demoReelHide').style.visibility = 'hidden';
    document.getElementById('demoReelHide').style.opacity = '0';

    document.getElementById('demoReelBackground').style.visibility = 'hidden';
    document.getElementById('demoReelBackground').style.opacity = '0';

    var blur = document.getElementById("homeContent");
    blur.classList.toggle("homeContentBlur");
}

/*Hover animation for Work Page
function workAnimationIn() {
    document.getElementById("thumbNail").style.backgroundImage = "url('images/tester.png')";
}

function workAnimationOut() {
    document.getElementById("thumbNail").style.backgroundImage = "none";
}*/


/*Reset WTV gif everytime the page is loaded*/
img.src = "wtvLogo.gif"+"?a="+Math.random();
