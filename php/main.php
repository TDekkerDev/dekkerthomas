<div id="main">
<?php include "include/header.php"; ?>
<?php include "include/navbar.php"; ?>
  <script>
    AOS.init();
  </script>

  <div id="header_text" class="container_header shadow-diffuse" >
    <div class="container_header_text">
      <article>
      <br>
      <br>
      Hallo! Ik ben Thomas Dekker.<br>
      Ik ben op 9 februari 2005 geboren in Obdam.<br>
      Een van mijn grootste hobby's is zwemmen en Computer.<br>
      Naast het zwemmen en ben ik ook actief als vrijwilliger.<br>
      Maar van mijn grootste hobby computer wil ik ook graag mijn beroep maken.<br>
    

      </article>
    </div>
      <img class="Photoname" src="/media/img/thomas.jpg"   alt="Thomas dekker" id = "thomas"><br><br>
  </div>

  <div id="header_skill" data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-sine" class="container_skills shadow-diffuse" >
    <article>
            <h2>skills</h2><br>
            <h3 class = "skillstext">php:</h3><div class = "skillsbar"><div id = "skillsphp"></div></div>
            <h3 class = "skillstext">javascript:</h3><div class = "skillsbar"><div id = "skillsjs"></div></div>
            <h3 class = "skillstext">sql:</h3><div class = "skillsbar"><div id = "skillssql"></div></div>
            <h3 class = "skillstext">c#:</h3><div class = "skillsbar"><div id = "skillsc"></div></div>
            <h3 class = "skillstext">css:</h3><div class = "skillsbar"><div id = "skillscss"></div></div>
    </article>
  </div>

  <div id="header_portfolio" data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-sine" class="container_portfolio shadow-diffuse" >
    <img id = "portfolio" src="/media/img/portfolio.PNG" alt="portfolio">
    <a href="/media/pdf/portfolio.pdf" download="portfolio">
      <button  id = "portfolio_downlode" type="button"><i class="fa fa-download"></i>  Download</button>
    </a>
  </div>

  <div id="header_logo" data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-sine" class="container_logo shadow-diffuse" >
    <img src="/media/img/logo-explanation.jpg" alt="logo-explanation">
  </div>

  <div id="header_contact" data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-sine" class="container_contact shadow-diffuse" >
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <lottie-player onclick="github()" src="https://assets3.lottiefiles.com/packages/lf20_cwqf5i6h.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" hover   ></lottie-player>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <lottie-player onclick="linkedin()" src="https://assets2.lottiefiles.com/packages/lf20_lxlh9ct5.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" hover   ></lottie-player>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <lottie-player onclick="email()" src="https://assets6.lottiefiles.com/packages/lf20_9yi1cm7i.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" hover   ></lottie-player>
  </div>



<?php include "include/footer.php"; ?>