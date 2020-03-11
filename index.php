<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-
  scalable=yes">
  <title>Nebojsa Mihaljevic | Portfolio</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">
  <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon" />
</head>

<body>
  <aside>
    <nav>
      <div class="nav-hover">
        <a href="#home" class="fill-div"><i class="large material-icons">home</i>
          <p>Accueil</p>
        </a>
      </div>

      <div class="nav-hover">
        <a href="#about" class="fill-div"><i class="large material-icons">person</i>
          <p>À propos</p>
        </a>
      </div>

      <div class="nav-hover">
        <a href="#portfolio" class="fill-div"><i class="large material-icons">image</i>
          <p>Portfolio</p>
        </a>
      </div>

      <div class="nav-hover">
        <a href="#contact" class="fill-div"><i class="large material-icons">mail</i>
          <p>Contact</p>
        </a>
      </div>
    </nav>
  </aside>

  <main>
    <section class="home" id="home">
      <h1>Bonjour, je suis <span id="regular">Nebojsa</span> Mihaljevic</h1>
      <h3>web développeur</h3>
      <div class="quick_contact">
        <a href="mailto:monte.nemi@gmail.com"><img id="img_margin" src="assets/img/icons_white/email-32.png"></a>
        <a href="https://fr.linkedin.com/in/electronic-engineer-translator/fr"><img id="img_margin" src="assets/img/icons_white/linkedin-5-32.png"></a>
        <a href="https://github.com/micneli"><img src="assets/img/icons_white/github-10-32.png"></a>
      </div>
    </section>

    

    <section class="about" id="about">
      <h2>À propos de moi</h2>
      <p>Je suis en formation de développeur web/web mobile à l'Access Code School Mulhouse.</p>
      <p>Pendant cette formation, j'ai réalisé de nombreux projets en HTML, CSS (Bootstrap) et JavaScript. En PHP, j'ai travaillé avec une architecture MVC, en POO et utilisé du SQL.</p>
      <p>En 2000, j'ai obtenu un bac+4 en électronique, à la Faculté en ingénierie électronique du Monténégro. J'ai travaillé dans le secteur des télécommunications et dans le secteur du numérique comme analyste de données en utilisant le SQL sur Oracle Database avec Oracle Reports Builder et Oracle Forms Builder.</p>
      <p>En 2002, j'ai commencé à travailler comme traducteur en anglais et depuis 2008 je suis specialisé en traductions techniques dans les domaines IT, électronique, électrotechnique, mécanique et télécommunication.</p>
      <p id="distance">Comme webmaster j'ai créé plusieurs sites web sur Joomla CMS. C'est là où ma passion pour web a commencé, et elle continue jusqu'a present. Passionné de nouvelles technologies, je m’auto-forme continuellement et je suis en veille constante. Cela me permet de faire le progress constant dans le métier.</p>
        <ul class="portfolioList">
          <li><a href="https://www.proz.com/feedback-card/1419781">Traduction: quelques-unes de mes références</a></li>
          <li><a href="http://www.southslavictranslations.com">Mon site web pour traduction</a></li>
        </ul>
    </section>

    <section class="about" id="portfolio">
      <h2>Portfolio</h2>
      <p>Ces projets ont été réalisés avant ou pendant ma formation à l'Access Code School. Pour les projets en HTML et CSS, j'ai utilisé Flex Box et Bootstrap. Les projets en JavaScript ont été faits en vanilla JS. J'ai affiché quelques projets en PHP, sans ou avec MVC POO, en utilisant MySQL.</p>

      <div id="tabs-container">
        <ul class="tabs-menu">
          <li class="current"><a href="#tab-1">HTML/CSS/PHP&nbsp;CMS</a></li>
          <li><a href="#tab-2">JAVASCRIPT</a></li>
          <li><a href="#tab-3">NODE&nbsp;JS</a></li>
          <li><a href="#tab-4">PHP</a></li>
        </ul>
        <div class="tab">
          <div id="tab-1" class="tab-content">
          <div class="portfolio_row">
              <div class="one_half">
                <h3>Projet d'integration en HTML&CSS</h3>
                <a href="https://nebojsam.promo-36.codeur.online/integrationHTMLCSS"><img id="projets" src="assets/img/mockup_blueasy.png" width="350px" alt="integration en html et css"></a>
                <p>Objectif: L'integration de maquette en utilisant HTML et CSS (flexbox)</p>
                <ul class="menu_links">
                  <li><a href="https://github.com/micneli/integrationHTMLCSS">Github</a></li>
                </ul>
              </div>
              <div class="one_half">
                <h3>Projet d'integration en Bootstrap</h3>
                <a href="https://nebojsam.promo-36.codeur.online/integrationBootstrap"><img id="projets" src="assets/img/integration_bootstrap.png" width="350px" alt="projet d'integration en bootstrap"></a>
                <p>Objectif: L'integration en utilisant HTML, CSS et le framework Bootstrap</p>
                <ul class="menu_links">
                  <li><a href="https://github.com/micneli/IntegrationBootstrap">Github</a></li>
                </ul>
              </div>
            </div>
            <hr>
            <div class="portfolio_row">
              <div class="one_half">
                <h3>Projet de mon site web pour traduction</h3>
                <a href="http://southslavictranslations.com"><img id="projets" src="assets/img/southslavictranslations.png" width="350px" alt="mon site web pour traduction"></a>
                <p>Ce projet a été effectué en utilisant le CMS Joomla</p>
                <ul class="menu_links">
                  <li><a href="http://southslavictranslations.com">Lien</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="tab-2" class="tab-content">
            <div class="portfolio_row">
              <div class="one_half">
                <h3>Projet Cakeman JS</h3>
                <a href="https://nebojsam.promo-36.codeur.online/cakeman_js/"><img id="projets" src="assets/img/cakeman_js.png" width="350px" alt="vanilla js projet de jeux"></a>
                <p>Objectif: creer un jeux de faire exploser le gateau sur les adversaires</p>
                <ul class="menu_links">
                  <li><a href="https://github.com/micneli/cakeman">Github</a></li>
                </ul>
              </div>
              <div class="one_half">
                <h3>Projet Color Game JS</h3>
                <a href="https://nebojsam.promo-36.codeur.online/colorgame/colorGame.html"><img id="projets" src="assets/img/colorgame.png" width="350px" alt="color game javascript projet"></a>
                <p>Objectif: creer un jeux de diviner des couleurs</p>
                <ul class="menu_links">
                  <li><a href="#tab-2">Github</a></li>
                </ul>
              </div>
            </div>
            <hr>
            <div class="portfolio_row">
              <div class="one_half">
                <h3>Projet Scorekeeper JS</h3>
                <a href="https://nebojsam.promo-36.codeur.online/scorekeeper/"><img id="projets" src="assets/img/scorekeeper.png" width="350px" alt="scorekeeper javascript projet"></a>
                <p>Objectif: creer un jeux de tenue des scores. Ce projet a été effectué en utilisant vanilla JS.</p>
                <ul class="menu_links">
                  <li><a href="#tab-2">Github</a></li>
                </ul>
              </div>
              <div class="one_half">
                <h3>Projet d'inauguration de ACS</h3>
                <a href="https://nebojsam.promo-36.codeur.online/acs_inauguration"><img id="projets" src="assets/img/inauguration.png" width="350px" alt="inauguration projet"></a>
                <p>Objectif: creer la page pour l'inauguration d'ecole en utilisant Bootstrap and JavaScript</p>
                <ul class="menu_links">
                  <li><a href="https://github.com/micneli/acs_inauguration_project">Github</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div id="tab-3" class="tab-content">
            <div class="portfolio_row">
              <div class="one_half">
                <h3>Projet Simple Blog en NODE JS</h3>
                <img id="projets" src="assets/img/blog_nodejs.png" width="350px" alt="simple blog en node js">
                <p>Ce projet a été effectué en utilisant Restful Routings en NODE JS. Il se trouves dans le Github, sur le repository privé.</p>
                <!-- <ul class="menu_links">
                  <li><a href="#">Github</a></li>
                </ul> -->
              </div>
            </div>
          </div>
          <div id="tab-4" class="tab-content">
            <div class="portfolio_row">
              <div class="one_half">
                <h3>Projet Movie Database</h3>
                <a href="https://nebojsam.promo-36.codeur.online/PHP_OOP_movieDB"><img id="projets" src="assets/img/php_mvc_poo.png" width="350px" alt="movie database en php mvc poo"></a>
                <p>Objectif: creer le base de films, acteurs et réalisateurs en utilisant PHP object orienté avec de l'architecture MVC</p>
                <ul class="menu_links">
                  <li><a href="https://github.com/micneli/movieDatabase">Github</a></li>
                </ul>
              </div>
              <div class="one_half">
                <h3>Projet File Transfer</h3>
                <a href="https://nebojsam.promo-36.codeur.online/mvc_sanspoo"><img id="projets" src="assets/img/portfolio_php_mvc_sans_poo.png" width="350px" alt="file transfer en php mvc sans poo"></a>
                <p>Ce projet a été effectué en utilisant PHP avec de l'architecture MVC sans la programmation object orienté</p>
                <ul class="menu_links">
                  <li><a href="https://github.com/micneli/PHP_MVC_sans_POO">Github</a></li>
                </ul>
              </div>
            </div>
            <hr>
            <div class="portfolio_row">
              <div class="one_half">
                <h3>Tables de Multiplications</h3>
                <a href="https://nebojsam.promo-36.codeur.online/PHP_table_multiplication"><img id="projets" src="assets/img/php_multiplications.png" width="350px" alt="php tables de multiplications"></a>
                <p>Objectif: creation de tables de multiplications et verification de connaisance de multiplications en utilisant PHP et Bootstrap</p>
                <ul class="menu_links">
                  <li><a href="https://github.com/micneli/php_table_multiplication">Github</a></li>
                </ul>
              </div>
              <div class="one_half">
                <h3>Multiplications en AJAX et PHP</h3>
                <a href="https://nebojsam.promo-36.codeur.online/PHP_AJAX_tables_multiplications/index.php"><img id="projets" src="assets/img/php_ajax.png" width="350px" alt="php ajax tables de multiplications"></a>
                <p>Objectif: creer de tables de multiplications en utilisant PHP avec AJAX. J'ai utilisé aussi le framework Bootstrap</p>
                <ul class="menu_links">
                  <li><a href="https://github.com/micneli/php_ajax_tables_multiplications">Github</a></li>
                </ul>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </section>

    <section class="about" id="contact">
      <h2>Contact</h2>
      <form method="POST" action="index.php" name="contactform" id="contactForm" class="form">
        <div id="display_error"></div>
        <div>
          <p>Nom<span class="req">*</span></p>
          <input type="text" name="name" id="name" class="text-label">
        </div>
        <div class="field">
          <p>Email<span class="req">*</span></p>
          <input type="email" name="email" id="email" class="text-label">
        </div>
        <div class="field">
          <p>Sujet<span class="req">*</span></p>
          <input type="text" name="subject" id="subject" class="text-label">
        </div>
        <div class="field">
          <p>Message<span class="req">*</span></p>
          <textarea name="message" id="message" class="textarea-label"></textarea>
        </div>
       
        <div class="field">
          <input name="sendForm" type="submit" id="send" class="btnBasic">
        </div>

      </form>
    </section>
            
    <footer>
      Créé et intégré par Nebojsa Mihaljevic, 2020
    </footer>
  </main>
  
  <script type="text/javascript">
    let form = document.getElementById("contactForm");
    let displayError = document.getElementById("display_error");
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let subject = document.getElementById("subject");
    let message = document.getElementById("message");

    form.addEventListener('submit', function(e) {
      e.preventDefault();
      let formData = new FormData(form);
      let xhr = new XMLHttpRequest();

      xhr.open ('POST', 'formProcess.php', true);
      xhr.onload = function() {        
        if(xhr.readyState === xhr.DONE) {
          if (xhr.status === 200) {
            //console.log(xhr);
            let response = JSON.parse(xhr.responseText);
            //console.log(response.clean);
            displayError.innerHTML = "<p>" + response.message + "</p>";
            if(response.clean) {
              name.value = '';
              email.value = '';
              subject.value = '';
              message.value = '';
            }           
          }
        } else {
        displayError.innerHTML = xhr.responseText;
          }
      }
      xhr.send(formData);
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-localScroll/2.0.0/jquery.localScroll.min.js"></script>
  <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>