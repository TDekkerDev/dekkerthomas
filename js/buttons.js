var vid = document.getElementById("myVideo"); 
function resume(){
    document.getElementById("boks").classList.add('flicker-in-1');
    setTimeout(function(){
        document.getElementById("no").style.display = "none";
        document.getElementById("resume").style.display = "none";
        document.getElementById("typewriterid").style.display = "none";
        setTimeout(function(){
            document.getElementById("myVideo").style.display = "inline-block";
            vid.play(); 
        }, 300); 
    }, 3000); 
    
}

function no(){
    document.getElementById("frame").style.display = "inline-block";
}

