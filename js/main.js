$(window).ready(function () {
    setTimeout(function () {
        $("#loading").addClass("fadeout");
    }, 4000);
    setTimeout(function () {
        $("#loading").addClass("loaded");
    }, 5000);

    //Function to handle resizing image maps
    mapManagement = () => {
        var cabinetImg = document.getElementById('cabinet');
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
            '<area shape="rect" coords="0,' + y1 + ',' + currentWidth + ',' + y2 + '" alt="about me" id="drawer2">' +
            '<area shape="rect" coords="0,' + y2 + ',' + currentWidth + ',' + y3 + '" alt="about me" id="drawer3">' +
            '<area shape="rect" coords="0,' + y3 + ',' + currentWidth + ',' + y4 + '" alt="about me" id="drawer4">' +
            '<area shape="rect" coords="0,' + y4 + ',' + currentWidth + ',' + y5 + '" alt="about me" id="drawer5">' +
            '<area shape="rect" coords="0,' + y5 + ',' + currentWidth + ',' + y6 + '" alt="about me" id="drawer6">' +
            '<area shape="rect" coords="0,' + y6 + ',' + currentWidth + ',' + y7 + '" alt="about me" id="drawer7">'
    }

    //Inital function called when page rendered
    mapManagement();


    //Must be called again on resize to fix html for new window size
    $(window).on("resize", mapManagement)

    mapHover = function () {
        var textDisplay = document.getElementById("text-display")
        //Map hover events
        $("#drawer1").hover(function () {
            textDisplay.innerHTML = '<div class="display"><h4>Page vitrine</h4>' +
                '<img src="./images/simple-ricks.png" alt="Page de produit" class="preview-pic"><br/>' +
                '<h5>Projet en <i class="fab fa-html5"></i> et <i class="fab fa-css3-alt"></i></h5>' +
                '<a href="https://codepen.io/donthatedontkill/full/VBVZyo" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1" aria-label="Voir page de produit"><i class="fas fa-eye"></i></button></a>' +
                '<h4 class="list-heading">Objectifs&nbsp:</h4>' +
                '<ul class="list">' +
                '<li>Flexbox</li>' +
                '<li>Accessibilité</li>' +
                '<li>Les requêtes médias</li>' +
                '</ul>' +
                '<h5><a href="https://codepen.io/donthatedontkill/" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir profile de Codepen"><i class="fab fa-codepen"></i></button></a><br/>' +
                'Plus de projets à voir sur mon profil Codepen</h5></div>'
        })
        $("#drawer2").hover(function () {
            textDisplay.innerHTML = '<div class="display"><h4>Chronomètre Pomodoro</h4>' +
                '<img src="./images/pomodoro.png" alt="Chronomètre Pomodoro" class="preview-pic"><br/>' +
                '<h5>Project en <i class="fab fa-react"></i></h5>' +
                '<a href="https://codepen.io/donthatedontkill/full/dgVdYe/" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button double-button button1" aria-label="Voir chronomètre pomodoro sur CodePen"><i class="fas fa-eye"></i></button></a>' +
                '<a href="https://chrome.google.com/webstore/detail/super-pomodoro-timer/jcfdgbccjkljjalphemlfnaahmnfilaa" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button double-button button1" aria-label="Voir chronomètre pomodoro sur Chrome Store"><i class="fab fa-chrome"></i></button></a>' +
                '<h4 class="list-heading">Objectifs&nbsp:</h4>' +
                '<ul class="list">' +
                '<li>React</li>' +
                '<li>CSS Grid</li>' +
                "<li>Deployement d'extension Chrome</li>" +
                '</ul>' +
                '<h5><a href="https://codepen.io/donthatedontkill/" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir profile de Codepen"><i class="fab fa-codepen"></i></button></a><br/>' +
                'Plus de projets à voir sur mon profil Codepen</h5></div>'
        })
        $("#drawer3").hover(function () {
            textDisplay.innerHTML = '<div class="display"><h4>TwitchTV API</h4>' +
                '<img src="./images/twitch.png" alt="Twitch API" class="preview-pic"><br/>' +
                '<h5>Projet en <i class="fab fa-html5"></i> et <i class="fab fa-css3-alt"></i> et <i class="fab fa-js-square"></i></h5>' +
                '<a href="https://codepen.io/donthatedontkill/full/vjrePv/" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir page de Twitch API"><i class="fas fa-eye"></i></button></a>' +
                '<h4 class="list-heading">Objectifs&nbsp:</h4>' +
                '<ul class="list">' +
                '<li>Javascript</li>' +
                '<li>APIs/JSON</li>' +
                '<li>Animation</li>' +
                '</ul>' +
                '<h5><a href="https://codepen.io/donthatedontkill/" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir profile de Codepen"><i class="fab fa-codepen"></i></button></a><br/>' +
                'Plus de projets à voir sur mon profil Codepen</h5></div>'
        })
        $("#drawer4").hover(function () {
            textDisplay.innerHTML = '<div class="display"><h4>Pic Scavenger</h4>' +
                '<img src="./images/picscavenger.jpg" alt="Pic Scavenger" class="preview-pic"><br/>' +
                '<h5>Project en <i class="fab fa-react"></i></h5>' +
                '<a href="https://github.com/teamjake2018/jake" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir le code de Pic Scavenger"><i class="fab fa-github"></i></button></a>' +
                '<a href="https://serene-noyce-9165d0.netlify.com/" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1 mx-1"  aria-label="Voir la page de Pic Scavenger"><i class="fas fa-eye"></i></button></a>' +
                '<a href="https://www.youtube.com/watch?v=fl0Ezf7iX10" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir la présentation de Pic Scavenger"><i class="fab fa-youtube"></i></button></a>' +
                '<h4 class="list-heading">Objectifs&nbsp:</h4>' +
                '<ul class="list">' +
                "<li>Reconaissance d'image</li>" +
                '<li>Travail en équipe</li>' +
                '<li>React</li>' +
                '</ul>' +
                '<h5><a href="https://codepen.io/donthatedontkill/" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir profile de Codepen"><i class="fab fa-codepen"></i></button></a><br/>' +
                'Plus de projets à voir sur mon profil Codepen</h5></div>'
            //Add Hackathon project
        })
        $("#drawer5").hover(function () {
            textDisplay.innerHTML = '<div class="display"><h4>Astéroïdes</h4>' +
                '<img src="./images/asteroids.png" alt="Asteroids" class="preview-pic"><br/>' +
                '<h5>Projet en Python <i class="fab fa-python"></i></h5>' +
                '<a href="http://www.codeskulptor.org/#user45_Kp9I2FikSN_9.py" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir Astéroïdes"><i class="fas fa-eye"></i></button></a>' +
                "<h5>N'oubliez pas de cliquer " + '<i class="fas fa-play"></i><br/>' +
                'Google Chrome Exigé</h5></div>'
        })
        $("#drawer6").hover(function () {
            textDisplay.innerHTML = '<div class="display"><h4>Pong</h4>' +
                '<img src="./images/pong.png" alt="Pong" class="preview-pic"><br/>' +
                '<h5>Projet en Python <i class="fab fa-python"></i></h5>' +
                '<a href="http://www.codeskulptor.org/#user44_IZkCmVtC8l_3.py" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir Pong"><i class="fas fa-eye"></i></button></a>' +
                "<h5>N'oubliez pas de cliquer " + '<i class="fas fa-play"></i><br/>' +
                'Google Chrome Exigé</h5></div>'
        })
        $("#drawer7").hover(function () {
            textDisplay.innerHTML = '<div class="display"><h4>Blackjack</h4>' +
                '<img src="./images/blackjack.png" alt="Blackjack" class="preview-pic"><br/>' +
                '<h5>Projet en Python <i class="fab fa-python"></i></h5>' +
                '<a href="http://www.codeskulptor.org/#user44_Eep4ag07be_7.py" target="_blank" rel="noopener">' +
                '<button type="button" class="btn normal-button button1"  aria-label="Voir Blackjack"><i class="fas fa-eye"></i></button></a>' +
                "<h5>N'oubliez pas de cliquer " + '<i class="fas fa-play"></i><br/>' +
                'Google Chrome Exigé</h5></div>'
        })
    };

    mapHover();

    $(window).on("resize", mapHover);

    overlay = (coords) => {
        var x1 = parseInt(coords[0]);
        var y1 = parseInt(coords[1]);
        var x2 = parseInt(coords[2]);
        var y2 = parseInt(coords[3]);
        var height = (y2 - y1) * .8;
        var width = (x2 - x1) * .8;
        var top = y1 + ((y2 - y1) * .1);
        var left = x1 + ((x2 - x1) * .1);
        $("#overlay").css({
            "top": top,
            "left": left,
            "height": height + "px",
            "width": width + "px"
        })
    }

    $("area").hover(function () {
        let coords = ($(this).attr("coords").split(","));
        overlay(coords)
    })

    $(window).on("resize", function () {
        $("area").hover(function () {
            let coords = ($(this).attr("coords").split(","));
            overlay(coords)
        })
    });
});