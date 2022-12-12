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
  var explosion = document.getElementById("audio_explosion");
  var spaceship = document.getElementById("audio_spaceship");
  var tv = document.getElementById("audio_tv");
  var rick = document.getElementById("rick");
  tv.play();
  document.getElementById("off").classList.add("tv_off");
  setTimeout(function () {
    document.getElementById("spaceship").classList.add("spaceship_1");
    spaceship.volume = 0.2;
    spaceship.play();
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
      rick.play();
      rick.currentTime = 0;
      rick.volume = 0.5;
      setTimeout(function () {
        rick.volume = 0.4;
        setTimeout(function () {
          rick.volume = 0.3;
          setTimeout(function () {
            rick.volume = 0.2;
            setTimeout(function () {
              rick.volume = 0.1;
              rick.pause();
            }, 1000);
          }, 1000);
        }, 1000);
      }, 7500);
    }, 3500);
    setTimeout(function () {
      document.getElementById("mars").classList.remove("mars");
      setTimeout(function () {
        document.getElementById("mars").classList.add("mars");
      }, 1000);
    }, 5000);
    setTimeout(function () {
      document.getElementById("dog").classList.add("dog");
    }, 6000);
    setTimeout(function () {
      document.getElementById("down").classList.remove("down_1");
      document.getElementById("down").classList.add("down");
    }, 14000);
    setTimeout(function () {
      document.getElementById("thomas_p").classList.add("thomas_p");
    }, 14000);
    setTimeout(function () {
      spaceship.pause();
      explosion.play();
      explosion.volume = 0.5;
      document.getElementById("spaceship").classList.remove("spaceship_1");
      document.getElementById("spaceship").classList.add("spaceship_2");
      document.getElementById("rain_1").remove();
      document.getElementById("rain_2").remove();
      document.getElementById("thomas_p").classList.add("thomas_s");
    }, 18000);
    setTimeout(function () {
      document.getElementById("spaceship").classList.remove("spaceship_2");
      setTimeout(function () {
        document.getElementById("thomas_p").classList.add("thomas_d");
        document.getElementById("dva").remove();
        document.getElementById("red").remove();
        document.getElementById("mars").remove();
        document.getElementById("dog").remove();
        document.getElementById("rick").remove();
        document.getElementById("down").remove();
        setTimeout(function () {
          document.getElementById("thomas_p").remove();
          document
            .getElementById("drink_forms")
            .classList.remove("drink_forms_1");
          document.getElementById("drink_forms").classList.add("drink_forms_2");
        }, 1500);
      }, 1500);
    }, 19750);
  }, 2500);
}

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
