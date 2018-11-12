$(window).ready(function(){
    setTimeout(function(){
    $("#loading").addClass("fadeout");
    }, 8000);
    setTimeout(function(){
        $("#loading").addClass("loaded");
    }, 10000);
});