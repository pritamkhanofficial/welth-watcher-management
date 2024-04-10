/* Time Function */
let timerOn = true;
function timer(remaining) {
  var m = Math.floor(remaining / 60);
  var s = remaining % 60;


  m = m < 10 ? '0' + m : m;
  s = s < 10 ? '0' + s : s;
  document.getElementById('timer').innerHTML = m + ':' + s;
  if (remaining <= 10) {
    document.getElementById('timer').style.color = "red";
    // document.getElementById('timer').className = "blinking";
  } else {
    document.getElementById('timer').style.color = "black";
    // document.getElementById('timer').className = "blinking";
  }

  if (!timerOn) {
    // Do validate when timer off
    timerOn = true;
  }
  remaining -= 1;
  if (remaining >= 0 && timerOn) {
    setTimeout(function () {
      timer(remaining);
    }, 1000);
    return true;
  }


  timerOn = false;
}


$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    // autoplayTimeout:1200,
    // autoplaySpeed: 4000,
    // autoplayTimeout: 8000,
    slideTransition: 'linear',
    autoplaySpeed: 6000,
    smartSpeed: 6000,
    // slidesToScroll: 1,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
            loop:true
        },
        600:{
            items:12,
            nav:false,
            loop:true
        },
        1000:{
            items:12,
            nav:true,
            loop:true
        }
    }
})
});