// Set the date we're counting down to
var countDownDate = new Date("Sep 7, 2022 12:30:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

var counter = document.querySelector("#countdown");

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  counter.innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "You arrived too late";
  }
}, 1000);

// Choosing the Winner
const win = document.querySelector("#winner");
win.addEventListener('click', function(){
   // alert("test");
   const cards = document.querySelector("#cards");
  cards.style.display= 'flex';
});