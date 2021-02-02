  $(document).ready(function() {
    $('#aboutbutton').on('click', function() {
      $('#content').toggle(1000);
    });
  });

    let noon = 12;

    let showCurrentTime = function () {
      let localTime = document.getElementById('local-time');
      let message = document.getElementById('content-message');
      let currentTime = new Date();

      let hours = currentTime.getHours();
      let minutes = currentTime.getMinutes();
      let meridian;

      if (hours <= 11) {
        message.innerText = "Good Morning!";
        meridian = "AM";
      } else {
        meridian = "PM";
      }

      if (hours >= 18) {
        message.innerText = "Good Evening!";
      }

      if (hours >= noon && hours < 18) {
        message.innerText = "Good Afternoon!";
      }

      if (hours > noon) {
        hours = hours - 12;
      }

      if (minutes < 10) {
        minutes = "0" + minutes;
      }

      let clockTime = hours + ":" + minutes + " " + meridian + " " + "(CST)";
      localTime.innerText = clockTime;
    };

    showCurrentTime();

    function updateClock() {
      let time = new Date().getMinutes();
      
      let oneMinute = 60000;
      setInterval(updateClock, oneMinute);
    };

    updateClock();

let slideIndex = 1;

showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// Get the modal
let modal = document.getElementById("myModal");
let secondModal = document.getElementById('mySecondModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
let img = document.getElementById("myImg");
let img2 = document.getElementById("mySecondImg");
let img3 = document.getElementById("myThirdImg");
let modalImg = document.getElementById("img01");
let modalImg2 = document.getElementById("img02");
let modalImg3 = document.getElementById("img03");
let captionText = document.getElementById("caption");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}
img2.onclick = function(){
  mySecondModal.style.display = "block";
  modalImg2.src = this.src;
  
}
img3.onclick = function(){
  myThirdModal.style.display = "block";
  modalImg3.src = this.src;
}
// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];
let span2 = document.getElementsByClassName("close2")[0];
let span3 = document.getElementsByClassName("close3")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

span2.onclick = function() {
  mySecondModal.style.display = "none";
}

span3.onclick = function() {
  myThirdModal.style.display = "none";
} 
  