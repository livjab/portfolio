var noon = 12;
var evening = 18;
var wakeUp = 7;
var party = 22;
var lunch = 12;
var nap = 15;

var updateClock = function()
{

var messageText;
var time = new Date().getHours();
var timeEventJS = document.getElementById("timeEvent");
var lolcatImageJS = document.getElementById('lolcatImage');
var image = "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat5.jpg";

if  (time < noon)
{messageText = "Good morning!";
}

else if (time == lunch)
 {image = "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat2.jpg";
  messageText = "Time for Tacos!";
 }

else if (time == nap)
  {image = "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat3.jpg";
  messageText = "ZZZZZZ";
 }

else if (time > evening)
{messageText = "Good evening!";
}

else if (time == wakeUp)
 {
   image = "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat1.jpg";
   messageText = "Alarm BEEP BEEP";
 }

else if (time == party)
  {image = "https://s3.amazonaws.com/media.skillcrush.com/skillcrush/wp-content/uploads/2016/09/cat4.jpg";
   messageText = "Too much catnip!";
  }

else
{messageText = "Good afternoon!";
}
console.log(messageText);
console.log(time);
timeEventJS.innerText = messageText;
lolcatImageJS.src = image;

var showCurrentTime = function()
{
    // display the string on the webpage
    var clock = document.getElementById('clock');

    var currentTime = new Date();

    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var meridian = "AM";

    // Set hours
    if (hours >= noon)
    {
        meridian = "PM";
    }
    if (hours > noon)
    {
        hours = hours - 12;
    }

    // Set Minutes
    if (minutes < 10)
    {
        minutes = "0" + minutes;
    }

    // Set Seconds
    if (seconds < 10)
    {
        seconds = "0" + seconds;
    }

    // put together the string that displays the time
    var clockTime = hours + ':' + minutes + ':' + seconds + " " + meridian + "!";

    clock.innerText = clockTime;
};
showCurrentTime();
}

updateClock();
var oneSecond = 1000;
setInterval( updateClock, oneSecond);

var partyTimeButtonJS = document.getElementById("partyTimeButton");

var partyEvent = function()
{
    if (party < 0)
    {
        party = new Date().getHours();
        partyTimeButtonJS.innerText = "Party Over";
        partyTimeButtonJS.style.background = "#0A8DAB";
    }
    else
    {
        party = -1;
        partyTimeButtonJS.innerText = "PARTY TIME!";
        partyTimeButtonJS.style.background = "#222";
    }
};

partyTimeButtonJS.addEventListener("click", partyEvent);


var wakeUpTimeSelector =  document.getElementById("wakeUpTimeSelector");
var wakeUpEvent = function()
{
    wakeUp = wakeUpTimeSelector.value;
};
wakeUpTimeSelector.addEventListener('change', wakeUpEvent);

var lunchTimeSelector =  document.getElementById("lunchTimeSelector");
var lunchEvent = function()
{
    lunch = lunchTimeSelector.value;
};
lunchTimeSelector.addEventListener('change', lunchEvent);

var napTimeSelector =  document.getElementById("napTimeSelector");
var napEvent = function()
{
    nap = napTimeSelector.value;
};
napTimeSelector.addEventListener('change', napEvent);
