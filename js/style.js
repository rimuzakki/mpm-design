
/* Timer */
var COUNT_START = 10*1*5; // tenths * seconds * hours
var count = COUNT_START;
var playing = false;
/*
playpause = document.getElementById('playpause');
reset = document.getElementById('reset');

playpause.onclick = function() {
  if (playing) {
    playing = false; 
    console.log("Pause!");
    playpause.innerHTML = "▶";
  } else if (!playing) {
    playing = true; 
    console.log("Play!");
    playpause.innerHTML = "‖";
  }
  
}*/

/*reset.onclick = function() {
  if (playing) {
    playing = false; 
    playpause.innerHTML = "▶";
  }
  console.log("Reset Timer!");
  count = COUNT_START;
}*/

function countdown(){
    displayTime(); 
  if (count == 0) {
      playing = false;

 // alert("times's up!");
 //   document.forms['wptform'].submit();
  }
  else
      setTimeout(countdown, 100);
      count--;
}
countdown();

function displayTime() {
  
  var tenths = count;  
  var sec = Math.floor(tenths / 10);
  var hours = Math.floor(sec / 3600);
  sec -= hours * (3600);
  var mins = Math.floor(sec / 60);
  sec -= mins * (60);

  if (hours < 1) {
    document.getElementById('time_left').innerHTML = LeadingZero(mins)+':'+LeadingZero(sec);
  }
  else {
    document.getElementById('time_left').innerHTML = hours+':'+LeadingZero(mins)+':'+LeadingZero(sec);
  }
}

function LeadingZero(Time) {
  return (Time < 10) ? "0" + Time : + Time;
}


// validation form
// $(document).ready(function(){
//    $('#loginform').Validate();
// });