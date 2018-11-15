$(window).ready(function(){
    setTimeout(function(){
    $("#loading").addClass("fadeout");
    }, 8000);
    setTimeout(function(){
        $("#loading").addClass("loaded");
    }, 10000);

//Function to handle resizing image maps
mapManagement = () => {var cabinetImg = document.getElementById('cabinet');
var currentWidth = cabinetImg.clientWidth;
var currentHeight = cabinetImg.clientHeight;
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

document.getElementById("cabinetmap").innerHTML = '<area shape="rect" coords="0,0,' + currentWidth + ',' + y1 + '" alt="about me" id="drawer1">' +
'<area shape="rect" coords="0,'+ y1 + ',' + currentWidth + ',' + y2 + '" alt="about me" id="drawer2">' +
'<area shape="rect" coords="0,'+ y2 + ',' + currentWidth + ',' + y3 + '" alt="about me" id="drawer3">' +
'<area shape="rect" coords="0,'+ y3 + ',' + currentWidth + ',' + y4 + '" alt="about me" id="drawer4">' + 
'<area shape="rect" coords="0,'+ y4 + ',' + currentWidth + ',' + y5 + '" alt="about me" id="drawer5">' +
'<area shape="rect" coords="0,'+ y5 + ',' + currentWidth + ',' + y6 + '" alt="about me" id="drawer6">'+
'<area shape="rect" coords="0,'+ y6 + ',' + currentWidth + ',' + y7 + '" alt="about me" id="drawer7">'
}

//Inital function called when page rendered
mapManagement();


//Must be called again on resize to fix html for new window size
$(window).on("resize", mapManagement)

mapHover = function(){
var textDisplay = document.getElementById("text-display")
//Map hover events
$("#drawer1").hover(function(){
    textDisplay.innerHTML = '<h5>Page vitrine</h5>' +
    '<img src="./images/simple-ricks.png" alt="Page de produit" class="preview-pic"><br/>' +
    '<a href="https://codepen.io/donthatedontkill/full/VBVZyo" target="_blank" rel="noopener">' +
    '<button type="button" class="btn normal-button" aria-label="Voir page de produit"><i class="fas fa-eye"></i></button></a>' +
    '<h5>Objectifs&nbsp:</h5>' +
        '<ul>' +
            '<li>Flexbox</li>' +
            '<li>Accessibilité</li>' +
            '<li>Les requêtes médias</li>' +
        '</ul>' +
        '<strong><a href="https://codepen.io/donthatedontkill/" target="_blank" rel="noopener">' +
        '<button type="button" class="btn normal-button"  aria-label="Voir profile de Codepen"><i class="fab fa-codepen"></i></button></a><br/>' +
        'Plus de projets à voir sur mon profil Codepen</strong>'
})
$("#drawer2").hover(function(){
    textDisplay.innerHTML = '<h5>Chronomètre Pomodoro</h5>' +
    '<img src="./images/pomodoro.png" alt="Chronomètre Pomodoro" class="preview-pic"><br/>' +
    '<a href="https://codepen.io/donthatedontkill/full/dgVdYe/" target="_blank" rel="noopener">' +
    '<button type="button" class="btn normal-button half-size" aria-label="Voir chronomètre pomodoro sur CodePen"><i class="fas fa-eye"></i></button></a>' +
    '<a href="https://chrome.google.com/webstore/detail/super-pomodoro-timer/jcfdgbccjkljjalphemlfnaahmnfilaa" target="_blank" rel="noopener">' +
    '<button type="button" class="btn normal-button half-size" aria-label="Voir chronomètre pomodoro sur Chrome Store"><i class="fab fa-chrome"></i></button></a>' +
    '<h5>Objectifs&nbsp:</h5>' +
        '<ul>' +
            '<li>React</li>' +
            '<li>CSS Grid</li>' +
            "<li>Deployement d'extension Chrome</li>" +
        '</ul>' +
    '<strong><a href="https://codepen.io/donthatedontkill/" target="_blank" rel="noopener">' +
    '<button type="button" class="btn normal-button"  aria-label="Voir profile de Codepen"><i class="fab fa-codepen"></i></button></a><br/>' +
    'Plus de projets à voir sur mon profil Codepen</strong>'
})
$("#drawer3").hover(function(){
    textDisplay.innerHTML = '<h5>TwitchTV API</h5>' +
    '<img src="./images/twitch.png" alt="Twitch API" class="preview-pic"><br/>' +
    '<a href="https://codepen.io/donthatedontkill/full/vjrePv/" target="_blank" rel="noopener">' +
    '<button type="button" class="btn normal-button"  aria-label="Voir page de Twitch API"><i class="fas fa-eye"></i></button></a>' +
    '<h5>Objectifs&nbsp:</h5>' +
        '<ul>' +
            '<li>Javascript</li>' +
            '<li>APIs/JSON</li>' +
            '<li>Animation</li>' +
        '</ul>' +
    '<strong><a href="https://codepen.io/donthatedontkill/" target="_blank" rel="noopener">' +
    '<button type="button" class="btn normal-button"  aria-label="Voir profile de Codepen"><i class="fab fa-codepen"></i></button></a><br/>' +
    'Plus de projets à voir sur mon profil Codepen</strong>'
})
$("#drawer4").hover(function(){
    textDisplay.innerHTML = '4' //Add Hackathon project
})
$("#drawer5").hover(function(){
    textDisplay.innerHTML = '<h5>Astéroïdes</h5>' +
    '<img src="./images/asteroids.png" alt="Asteroids" class="preview-pic"><br/>' +
    '<a href="http://www.codeskulptor.org/#user45_Kp9I2FikSN_9.py" target="_blank" rel="noopener">'
    '<button type="button" class="btn normal-button"  aria-label="Voir Astéroïdes"><i class="fas fa-eye"></i></button></a>' +
    "<h5>N'oubliez pas de cliquer " + '<i class="fas fa-play"></i><br/>' +
    'Google Chrome Exigé</h5>'
})
$("#drawer6").hover(function(){
    textDisplay.innerHTML = '<h5>Pong</h5>' +
    '<img src="./images/pong.png" alt="Pong" class="preview-pic"><br/>' +
    '<a href="http://www.codeskulptor.org/#user44_IZkCmVtC8l_3.py" target="_blank" rel="noopener">' +
    '<button type="button" class="btn normal-button"  aria-label="Voir Pong"><i class="fas fa-eye"></i></button></a>' +
    "<h5>N'oubliez pas de cliquer " + '<i class="fas fa-play"></i><br/>' +
    'Google Chrome Exigé</h5>'
})
$("#drawer7").hover(function(){
    textDisplay.innerHTML = '<h5>Blackjack</h5>' +
    '<img src="./images/blackjack.png" alt="Blackjack" class="preview-pic"><br/>'
    '<a href="http://www.codeskulptor.org/#user44_Eep4ag07be_7.py" target="_blank" rel="noopener">'
    '<button type="button" class="btn normal-button"  aria-label="Voir Blackjack"><i class="fas fa-eye"></i></button></a>' +
    "<h5>N'oubliez pas de cliquer " + '<i class="fas fa-play"></i><br/>' +
    'Google Chrome Exigé</h5>'
})
};

mapHover();

$(window).on("resize", mapHover);




});