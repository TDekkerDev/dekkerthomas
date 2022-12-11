<?php include "../include/header.php"; ?>
<div id="mainmok">
    <div id="off">
        <div class="screen-content">
                <div id="index" class="index" style="display: inline-block;" >
                        <div id = "boks"></div>
                        <h6 id="typedtext"><h6>
                            <div id="boxing">
                                <button onclick="resume_mug()" id="resume"><span>yes</span></button>
                                <button onclick="no_mug()" id="no"><span>no</span></button>
                            </div>
                            </div>
                    </div>
            </div>
    </div>
    <div id="down" class="down_1"><div class="shake"><div id="spaceship"></div></div></div>
    <div id="rain_1" class="rain front-row"></div>
    <div id="rain_2" class="rain back-row"></div>
    <img id="dva" src="/media/img/dva.png" style="display: hidden;">
    <img id="red" src="/media/img/red.png" style="display: hidden;">
    <img id="mars" src="/media/img/mars.png" style="display: hidden;">
    <img id="dog" src="/media/img/dog.png" style="display: hidden;">
    <img id="thomas_p" src="/media/img/thomas_planit.png" style="display: hidden;">
    <video id="rick" style="display: hidden;" src="/media/video/never.mp4"></video>
    <div id="drink_forms" class="drink_forms_1">
        <h6 id="text_drink">What's in your mug right now?</h6>
        <div class="dorm_drink">
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Water"><span>Water</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="limonade"><span>limonade</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Tea"><span>Tea</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Choco"><span>Choco</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Melk"><span>Melk</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Coffee"><span>Coffee</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Cappuccino"><span>Cappuccino</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Soda"><span>Soda</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Bier"><span>Bier</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Vodka"><span>Vodka</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="whisky"><span>Whisky</span></button>
            </form>
            <form action="/php/mok/send_mok.php" method="post">
                <button name="drink" class="drink_button" value="Other"><span>Other</span></button>
            </form>
        <div>
    </div>  
</div>






<script type="text/javascript" src="/js/buttons.js"></script>
<?php include "../include/footer.php"; ?>