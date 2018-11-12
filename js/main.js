$(window).ready(function(){
    setTimeout(function(){
    $("#loading").addClass("fadeout");
    }, 8000);
    setTimeout(function(){
        $("#loading").addClass("loaded");
    }, 10000);
mapManagement = () => {var cabinetImg = document.getElementById('cabinet');
var currentWidth = cabinetImg.clientWidth;
var currentHeight = cabinetImg.clientHeight;
var naturalWidth = cabinetImg.naturalWidth;
var naturalHeight = cabinetImg.naturalHeight;
calculateMap = (y) => {
    return Math.floor(currentHeight * y / naturalHeight);
}
var y1 = calculateMap(620);
var y2 = calculateMap(1300);
var y3 = calculateMap(1940);
var y4 = calculateMap(2560);
var y5 = calculateMap(3200);
var y6 = calculateMap(3830);
var y7 = calculateMap(4430);

document.getElementById("cabinetmap").innerHTML = '<area shape="rect" coords="0,0,' + currentWidth + ',' + y1 + '" href="adam.com" alt="about me"><area shape="rect" coords="0,'+ y1 + ',' + currentWidth + ',' + y2 + '" href="samantha.com" alt="about me"><area shape="rect" coords="0,'+ y2 + ',' + currentWidth + ',' + y3 + '" href="mom.com" alt="about me"><area shape="rect" coords="0,'+ y3 + ',' + currentWidth + ',' + y4 + '" href="jeremy.com" alt="about me"><area shape="rect" coords="0,'+ y4 + ',' + currentWidth + ',' + y5 + '" href="jeremy.com" alt="about me"><area shape="rect" coords="0,'+ y5 + ',' + currentWidth + ',' + y6 + '" href="al.com" alt="about me"><area shape="rect" coords="0,'+ y6 + ',' + currentWidth + ',' + y7 + '" href="mauricette.com" alt="about me">'
}
mapManagement();
$(window).on("resize", mapManagement)
});