<?php include "php/include/header.php"; ?>
<div id = "boks"></div>
            <div id="resumebox1" style="inline-block">
                        <div id = "typewriterid" class="typewriter">
                            <h1>Do you want to continue...</h1>
                        </div>
            <div id="boxing">
                <button onclick="no()" id="no"><span>no</span></button>
                <button onclick="resume()" id="resume"><span>yes</span></button>
            </div>
            </div>
        <iframe id="frame" src="https://en.wikipedia.org/wiki/Platypus" style="display: none;"></iframe>
        <video id="myVideo" style="display: none;">
            <source src="/media/video/intro.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>




<?php include "php/include/footer.php"; ?>