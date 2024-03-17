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