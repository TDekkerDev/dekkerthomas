function header_text(){
        $('html, body').animate({
            scrollTop: $("#header_text").offset().top-350
        }, 100);
    }

    function header_skill(){
        $('html, body').animate({
            scrollTop: $("#header_skill").offset().top-350
        }, 100);
    }

    function header_portfolio(){
        $('html, body').animate({
            scrollTop: $("#header_portfolio").offset().top-50
        }, 100);
    }
    function header_logo(){
        $('html, body').animate({
            scrollTop: $("#header_logo").offset().top-340
        }, 100);
    }

    function header_Contact(){
        $('html, body').animate({
            scrollTop: $("#header_contact").offset().top-300
        }, 100);
    }

    function header_project(){
        window.location.href = "/php/projects.php";
    }

