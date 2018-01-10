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


/*
-----------------------------------------
AJAX
-----------------------------------------
*/

(function () {
  // start with retrieving the elements from the page, and then adding event handling. then write the logic. refer to the seasons example / homework
   var portfolioImages = document.querySelectorAll('.data-ref');

   //const httpRequest = new XMLHttpRequest();

   function getCarData() {

        const url = './includes/functions.php?carModel=' +this.id;

        //the fetch API uses new JavaScript Promise API
        fetch(url) //do an AJAX call with fetch
          .then((resp) => resp.json()) //convert to json
          .then(({ modelName, pricing, modelDetails, model }) => {
            let carModel = document.querySelector('.modelName').textContent = modelName;
            let price = document.querySelector('.priceInfo').innerHTML = pricing;
            let desc = document.querySelector('.modelDetails').textContent = modelDetails;

             //change opacity
             carImages.forEach(function(car, index) {
                 car.classList.add('nonActive');
             });

             document.querySelector(`#${model}`).classList.remove('nonActive');
          })
          .catch(function(error) {
            //catch any error and report it to the console
            console.log(error);
          });
        }

   function processResult(data) {
     const { modelName, pricing, modelDetails } = data;
     /*let model = document.querySelector('.modelName').textContent = modelName;
     let price = document.querySelector('.priceInfo').innerHTML = pricing;
     let desc = document.querySelector('.modelDetails').textContent = modelDetails;

     let objectIndex = carData [this.id];

      //change opacity
      carImages.forEach(function(image, index){
          image.classList.add("nonActive");
      });

      document.querySelector(`#${data.model}`).classList.remove('nonActive');
      //remove opacity when clicked
      //this.classList.remove('nonActive');*/
   }


   carImages.forEach(function(image, index){
     image.addEventListener('click', getCarData, false);
   });

   //Preload low opacity
   getCarData.call(document.querySelector('#F55'));



})();
