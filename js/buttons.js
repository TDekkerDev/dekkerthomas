var vid = document.getElementById("myVideo");
function resume() {
  document.getElementById("boks").classList.add("flicker-in-1");
  setTimeout(function () {
    document.getElementById("no").style.display = "none";
    document.getElementById("resume").style.display = "none";
    document.getElementById("typewriterid").style.display = "none";
    setTimeout(function () {
      document.getElementById("myVideo").style.display = "inline-block";
      vid.play();
      setTimeout(function () {
        document.getElementById("myVideo").style.display = "none";
        window.location.href = "php/main.php";
      }, 5500);
    }, 300);
  }, 3000);
}

function no() {
  document.getElementById("frame").style.display = "inline-block";
}

function admin() {
  window.location.href = "php/admin/admin.php";
}

// set up text to print, each item in array is new line
var aText = new Array(
  "Wow,",
  "You found such a cool mug!",
  "Want to take a look inside?",
  "---------------------------"
);
var i = 1;
function no_mug() {
  if (i == 1) {
    aText.push("Are you sure?");
    aText.push("---------------------------");
    typewriter();
  }
  if (i == 2) {
    aText.push("Please... take a look inside.");
    aText.push("---------------------------");
    typewriter();
  }
  if (i == 3) {
    aText.push("FUCKING LOOK!!!");
    typewriter();
  }
  if (i == 4) {
    document.getElementById("no").style.display = "none";
  }
  i++;
}
var makeItRain = function () {
  //clear out everything
  $(".rain").empty();

  var increment = 0;
  var drops = "";
  var backDrops = "";

  while (increment < 100) {
    //couple random numbers to use for various randomizations
    //random number between 98 and 1
    var randoHundo = Math.floor(Math.random() * (98 - 1 + 1) + 1);
    //random number between 5 and 2
    var randoFiver = Math.floor(Math.random() * (5 - 2 + 1) + 2);
    //increment
    increment += randoFiver;
    //add in a new raindrop with various randomizations to certain CSS properties
    drops +=
      '<div class="drop" style="left: ' +
      increment +
      "%; bottom: " +
      (randoFiver + randoFiver - 1 + 100) +
      "%; animation-delay: 0." +
      randoHundo +
      "s; animation-duration: 0.5" +
      randoHundo +
      's;"><div class="stem" style="animation-delay: 0.' +
      randoHundo +
      "s; animation-duration: 0.5" +
      randoHundo +
      's;"></div><div class="splat" style="animation-delay: 0.' +
      randoHundo +
      "s; animation-duration: 0.5" +
      randoHundo +
      's;"></div></div>';
    backDrops +=
      '<div class="drop" style="right: ' +
      increment +
      "%; bottom: " +
      (randoFiver + randoFiver - 1 + 100) +
      "%; animation-delay: 0." +
      randoHundo +
      "s; animation-duration: 0.5" +
      randoHundo +
      's;"><div class="stem" style="animation-delay: 0.' +
      randoHundo +
      "s; animation-duration: 0.5" +
      randoHundo +
      's;"></div><div class="splat" style="animation-delay: 0.' +
      randoHundo +
      "s; animation-duration: 0.5" +
      randoHundo +
      's;"></div></div>';
  }

  $(".rain.front-row").append(drops);
  $(".rain.back-row").append(backDrops);
};

function resume_mug() {
  document.getElementById("off").classList.add("tv_off");
  setTimeout(function () {
    document.getElementById("spaceship").classList.add("spaceship");
    makeItRain();
    setTimeout(function () {
      document.getElementById("dva").classList.add("dva");
    }, 5000);
    setTimeout(function () {
      document.getElementById("red").classList.add("red");
    }, 3000);
    setTimeout(function () {
      document.getElementById("mars").classList.add("mars");
    }, 3500);
    setTimeout(function () {
      document.getElementById("rick").classList.add("rick");
      var rick = document.getElementById("rick");
      rick.play();
      rick.currentTime = 0;
      rick.volume = 1;
      setTimeout(function () {
        rick.volume = 0.8;
        setTimeout(function () {
          rick.volume = 0.6;
          setTimeout(function () {
            rick.volume = 0.4;
            setTimeout(function () {
              rick.volume = 0.3;
            }, 1000);
          }, 1000);
        }, 1000);
      }, 12000);
    }, 8000);
  }, 2500);
}

var iSpeed = 100; // time delay of print out
var iIndex = 0; // start printing array at this posision
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines

var iTextPos = 0; // initialise text position
var sContents = ""; // initialise contents variable
var iRow; // initialise current row

function typewriter() {
  sContents = " ";
  iRow = Math.max(0, iIndex - iScrollAt);
  var destination = document.getElementById("typedtext");

  while (iRow < iIndex) {
    sContents += aText[iRow++] + "<br />";
  }
  destination.innerHTML =
    sContents + aText[iIndex].substring(0, iTextPos) + "_";
  if (iTextPos++ == iArrLength) {
    iTextPos = 0;
    iIndex++;
    if (iIndex != aText.length) {
      iArrLength = aText[iIndex].length;
      setTimeout("typewriter()", 200);
    }
  } else {
    setTimeout("typewriter()", iSpeed);
  }
}

typewriter();
