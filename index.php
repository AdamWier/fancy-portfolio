<?php 
require("./config/db.php");

$msg = "";

if (filter_has_var(INPUT_POST, "submit")) {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlentities($_POST["message"]);

  if (!empty($name) && !empty($email) && !empty($message)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL === false)) {
      $msg = "Merci de revérifier votre email";
    } else {
      $toEmail = "wier.adam@gmail.com";
      $subject = "Contact Form";
      $body = "<h2>Contact form submitted</h2>
      <h4>Name</h4><p>$name</p>
      <h4>Email</h4><p>$email</p>
      <h4>Message</h4><p>$message</p>";

      $header = "MIME-Version: 1.0" . "\r\n";
      $header .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
      $header .= "From: " . $name . "<" . $email . ">" . "\r\n";

      if (mail($toEmail, $subject, $body, $header)) {
        $msg = "Votre email a été enovyé sans problème!";
        
        $sqlName = mysqli_real_escape_string($conn, $_POST["name"]);
        $sqlEmail = mysqli_real_escape_string($conn, $_POST["email"]);
        $sqlMessage = mysqli_real_escape_string($conn, $_POST["message"]);

        $query = "INSERT INTO submissions(name, email, message) VALUES('$sqlName', '$sqlEmail', '$sqlMessage')";

        if (mysqli_query($conn, $query)) {
          header("Location: " . ROOT_URL . "");
        } else {
          echo "ERROR: " . mysqli_error($conn);
        }
      }
    }
  } else {
    $msg = "Merci de remplir tout le formulaire";
  }


}
?>

<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Allerta+Stencil|Amatic+SC|Old+Standard+TT|Dosis"
    rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">

  <!-- Custom style -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/safe-art.css">
  <link rel="stylesheet" href="css/look1.css">
  <link rel="stylesheet" href="css/look2.css">
  <link rel="stylesheet" href="css/look3.css">
  <link rel="stylesheet" href="css/look4.css">

  <title>Adam Wier, Développeur Web</title>
  <meta name="description" content="Adam Wier, Développeur Web, à votre service">
  <meta name="keywords" content="Adam,Wier,Developer,Web,Designer,HTML,CSS,JavaScript,React,Python,jQuery,Bootstrap,Resume,Portfolio,PHP,MySql,MonogDB,Node">
</head>

<body>
  <!-- Loading screen -->
  <!-- <div id="loading">
    <div class="row">
      <div class="col-12">
        <div id="safe-box">
          <div class="safe">
            <div class="door">
              <div class="upper-hinge"></div>
              <div class="lower-hinge"></div>
              <div class="wheel"></div>
              <div class="handle"></div>
            </div>
          </div>
          <div class="left-leg"></div>
          <div class="right-leg"></div>
        </div>
      </div>
    </div>
    <div class="row" id="loading-text">
      <div class="col-12">
        En train d'aménager...
      </div>
    </div>
    <div id="preload1"></div>
    <div id="preload2"></div>
    <div id="preload3"></div>
    <div id="preload4"></div>
    <div id="preload5"></div>
    <div id="preload6"></div>
    <div id="preload7"></div>
  </div> -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

  <!-- Header/navbar-->
  <div class="container-fluid">
    <header>
      <nav class="navbar navbar-expand-sm fixed-top navigation" data-toggle="affix" id="nav2">
        <?php include("inc/navbar.php") ?>
      </nav>
    </header>

    <!-- About section -->
    <section class="look" id="look2">
      <a class="nav-link" id="about"></a>
      <div class="element" id="element2">
        <div class="row">
          <div class="col-md-6 col-12 text-center">
            <h2>Adam Wier</h2>
            <h3>Développeur Web</h3>
          </div>
          <div class="col-md-6 col-12 text-center">
            <img src="./images/me.jpg" id="me" alt="me">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-12">
            <h4>Formation autodidacte en&nbsp:</h4>
            <ul>
              <li>HTML</li>
              <li>CSS</li>
              <li>JavaScript</li>
              <li>Accessibilité</li>
              <li>Flexbox</li>
              <li>CSS Grille</li>
              <li>Bootstrap</li>
              <li>jQuery</li>
              <li>React</li>
            </ul>
            <h4>Notions de&nbsp:</h4>
            <ul>
              <li>PHP</li>
              <li>MySQL</li>
              <li>SASS</li>
              <li>Redux</li>
            </ul>
          </div>
          <div class="col-md-6 col-12">
            <h4>Autres compétences et qualités&nbsp:</h4>
            <ul>
              <li>Diplomé en traduction et interprétation d'espagnol et anglais</li>
              <li>Bon niveau de français</li>
              <li>Notions de japonais</li>
              <li>Autonome</li>
              <li>Bon communicateur</li>
              <li>Bonne organisation</li>
              <li>Capable de travailler sous pression</li>
              <li>Motivé par l'enrichissement personnel</li>
            </ul>
            <h4>Hobbies&nbsp:</h4>
            <ul>
              <li>Langues et cultures</li>
              <li>Jeux vidéo, jeux de rôle, jeux de société</li>
              <li>Sport : musculation et footing</li>
              <li>Lecture : horreur, science-fiction, bandes-dessinées</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-12 text-center">
            <a href="./cv/cv-pdf.pdf">
              <button type="button" class="btn bormal-button button2">Télécharger CV (PDF)</button>
            </a>
          </div>
          <div class="col-md-6 col-12 text-center">
            <a href="./cv/cv-word.docx">
              <button type="button" class="btn normal-button button2">Télécharger CV (DOCX)</button>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 text-center">
            <a href="https://www.linkedin.com/in/adamwier/" target="_blank" rel="noopener">
              <button type="button" class="btn normal-button button2">
                <i class="fab fa-linkedin"></i>LinkedIn
              </button>
            </a>
          </div>
          <div class="col-md-3 text-center">
            <a href="https://www.freecodecamp.org/adamwier" target="_blank" rel="noopener">
              <button type="button" class="btn normal-button button2">
                <i class="fab fa-free-code-camp"></i>FreeCodeCamp
              </button>
            </a>
          </div>
          <div class="col-md-3 text-center">
            <a href="https://www.github.com/AdamWier" target="_blank" rel="noopener">
              <button type="button" class="btn normal-button button2">
                <i class="fab fa-github-square"></i>GitHub
              </button>
            </a>
          </div>
          <div class="col-md-3 text-center">
            <a href="https://codepen.io/donthatedontkill/" target="_blank" rel="noopener">
              <button type="button" class="btn normal-button button2">
                <i class="fab fa-codepen"></i>CodePen
              </button>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Certificates section -->
    <nav class="navbar navbar-expand-sm sticky-top navigation" data-toggle="affix" id="nav3">
      <?php include("inc/navbar.php") ?>
    </nav>
    <section class="look" id="look3">
      <a class="nav-link" id="certificates"></a>
      <div class="element p-5" id="element3">
        <div class="row">
          <div class="col-12">
            <h2 class="h2-3">Certificats</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div id="certificate-carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#certificate-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#certificate-carousel" data-slide-to="1"></li>
                <li data-target="#certificate-carousel" data-slide-to="2"></li>
                <li data-target="#certificate-carousel" data-slide-to="3"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <h3>Les algorithmes et les structures des données en Javascript</h3>
                  <img class="certificate d-block img-fluid" src="./certificates/javascript.png" alt="Diplôme de JavaScript">
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <h4 class="h4-3 underline">Thèmes Abordés&nbsp:</h4>
                      <ul>
                        <li>ES6</li>
                        <li>Expressions rationnelles</li>
                        <li>Programmation orientée objet</li>
                        <li>Programmation fonctionelle</li>
                        <li>Algorithmes</li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-12 d-flex">
                      <a href="https://www.freecodecamp.org/certification/adamwier/javascript-algorithms-and-data-structures"
                        target="_blank" rel="noopener">
                        <button type="button" class="btn normal-button button3" aria-label="Voir Diplôme de JavaScript">
                          <i class="fas fa-user-graduate"></i>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <h3>Webdesign réactif</h3>
                  <img class="certificate d-block img-fluid" src="./certificates/responsive-web-design.png" alt="Diplôme de Webdesign Réactif">
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <h4 class="h4-3 underline">Thèmes Abordés&nbsp:</h4>
                      <ul>
                        <li>HTML et CSS</li>
                        <li>Conception visuelle appliquée</li>
                        <li>Accessibilité appliquée</li>
                        <li>Flexbox</li>
                        <li>CSS Grid/Grille</li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-12 d-flex">
                      <a href="https://www.freecodecamp.org/certification/adamwier/responsive-web-design" target="_blank"
                        rel="noopener">
                        <button type="button" class="btn normal-button button3" aria-label="Voir Diplôme de Webdesign Réactif">
                          <i class="fas fa-user-graduate"></i>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <h3>Introduction à la programmation interactive en Python (Partie 1)</h3>
                  <img src="./certificates/python-part-one.png" class="d-block certificate img-fluid" alt="Diplôme de Introduction à la programmation interactive en Python (Partie 1)">
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <h4 class="h4-3 underline">Thèmes Abordés&nbsp:</h4>
                      <ul>
                        <li>Fonctions</li>
                        <li>Programmation évènementielle</li>
                        <li>Modélisation de mouvement </li>
                        <li>Canevas</li>
                        <li>Saisie clavier</li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-12 d-flex">
                      <a href="https://www.coursera.org/account/accomplishments/certificate/ZNFD72L43GGL" target="_blank"
                        rel="noopener">
                        <button type="button" class="btn normal-button button3" aria-label="Voir Diplôme de Introduction à la programmation interactive en Python (Partie 1)">
                          <i class="fas fa-user-graduate"></i>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <h3>Introduction à la programmation interactive en Python (Partie 2)</h3>
                  <img src="./certificates/python-part-two.png" class="d-block certificate img-fluid" alt="Diplôme de Introduction à la programmation interactive en Python (Partie 2)">
                  <div class="row">
                    <div class="col-md-6 col-12">
                      <h4 class="h4-3 underline">Thèmes Abordés&nbsp:</h4>
                      <ul>
                        <li>Saisie souris</li>
                        <li>Dictionnaires</li>
                        <li>Sprites</li>
                        <li>Physiques des jeux vidéo</li>
                        <li>Animation</li>
                      </ul>
                    </div>
                    <div class="col-md-6 col-12 d-flex">
                      <a href="https://www.coursera.org/account/accomplishments/certificate/X3PR44R9HUB5" target="_blank"
                        rel="noopener">
                        <button type="button" class="btn normal-button button3" aria-label="Voir Diplôme de Introduction à la programmation interactive en Python (Partie 2)">
                          <i class="fas fa-user-graduate"></i>
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#certificate-carousel" role="button" data-slide="prev">
              <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#certificate-carousel" role="button" data-slide="next">
              <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Projects section -->
    <nav class="navbar navbar-expand-sm sticky-top navigation" data-toggle="affix" id="nav1">
      <?php include("inc/navbar.php") ?>
    </nav>
    <section class="look" id="look1">
      <a class="nav-link" id="projects"></a>
      <div class="element">
        <div class="row">
          <div class="col text-center m-5 h-75 w-50">
            <div id="cabinet-container">
              <img src="images/cabinet.jpg" id="cabinet" alt="click drawers for information" usemap="cabinetmap">
              <div id="overlay"></div>
              <map name="cabinetmap" id="cabinetmap">
                <!-- Original image size map; kept for reference 
            <area shape="rect" coords="0,0,3190,620" href="google.com" alt="about me">
            <area shape="rect" coords="0,621,3190,1300" href="adam.com" alt="about me">
            <area shape="rect" coords="0,1301,3190,1940" href="samantha.com" alt="about me">
            <area shape="rect" coords="0,1941,3190,2560" href="mom.com" alt="about me">
            <area shape="rect" coords="0,2561,3190,3200" href="jeremy.com" alt="about me">
            <area shape="rect" coords="0,3201,3190,3830" href="al.com" alt="about me">
            <area shape="rect" coords="0,3831,3190,4430" href="mauricette.com" alt="about me"> 
          -->
              </map>
            </div>
          </div>
          <div class="col m-5 h-75 w-50 text-center" id="text-display">
            Choissez un tiroir, n'importe lequel... <br />
            N'ayez pas peur.
          </div>
        </div>
      </div>
    </section>

    <!-- Contact section -->
    <nav class="navbar navbar-expand-sm sticky-top navigation" data-toggle="affix" id="nav4">
      <?php include("inc/navbar.php") ?>
    </nav>
    <section class="look" id="look4">
      <a class="nav-link" id="contact"></a>
      <div class="element" id="element4">
        <div class="row">
          <div class="col-md-4 col-12">
            <h2 class="h2-4">Contact</h2>
          </div>
          <div class="col-md-8 col-12">
            <div class="row text-center">
              <div class="col-lg-4">
                <a href="https://www.linkedin.com/in/adamwier/" target="_blank" rel="noopener">
                  <button type="button" class="btn normal-button button4">
                    <i class="fab fa-linkedin"></i>LinkedIn
                  </button>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="https://www.freecodecamp.org/adamwier" target="_blank" rel="noopener">
                  <button type="button" class="btn normal-button button4">
                    <i class="fab fa-free-code-camp"></i>FreeCodeCamp
                  </button>
                </a>
              </div>
              <div class="col-lg-4">
                <a href="https://www.github.com/AdamWier" target="_blank" rel="noopener">
                  <button type="button" class="btn normal-button button4">
                    <i class="fab fa-github-square"></i>GitHub
                  </button>
                </a>
              </div>
            </div>
            <div class="row form-group no-break">
              <div class="col-12 text-center">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>#contact">
                  <label for="name">Votre nom&nbsp: </label><br />
                  <input type="text" class="form-control" required name="name" id="name" placeholder="Votre nom ici"
                    value="<?php echo isset($_POST[" name"]) ? $name : ""; ?>">
                  <label for="email">Votre adresse mail&nbsp: </label>
                  <input type="email" class="form-control" required name="email" id="email" placeholder="Votre adresse mail ici"
                    value="<?php echo isset($_POST[" email"]) ? $email : ""; ?>">
                  <label for="message">Votre message&nbsp: </label>
                  <textarea name="message" id="message" class="form-control" required><?php echo isset($_POST["message"]) ? $message : ""; ?></textarea>
                  <button type="submit" class="btn big-button button4" name="submit" id="submit">Envoyer <i class="fas fa-at"></i></button>
                </form>
                <?php if ($msg != "") : ?>
              <span><?php echo $msg; ?></span>
              <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
</body>

</html>