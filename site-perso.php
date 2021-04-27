<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- META -->
<meta description="Fabien Ponzio apprenti développeur web à la plateforme Marseille">
<meta property="og:image" content="image/PhotoCV.jpg">
<meta property="og:title" content="Fabien Ponzio Portfolio">
<meta property="og:description" content="Apprenti Web Developper à La Plateforme_ Marseille.">
<meta property="og:url" content="https://fabien-ponzio.students-laplateforme.io/">

<!-- FAVICON -->
<link rel="icon"  href='image/logobb.ico'/>
<!-- FONT AWESOME CDN -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- SCRIPT JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!-- LINK STYLESHEET -->
<link rel="stylesheet" href="portfolio.css">
<link rel="stylesheet" href="typing.css">
<!-- LINK GFONT -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
<!-- LINK GFONT  -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
<title>Portfolio - Fabien Ponzio</title>
</head>

<body>

<header>
  <!-- BURGER HEADER  -->
    <nav role="navigation">

      <div id="menuToggle">
        <input type="checkbox"/>

        <span></span>
        <span></span>
        <span></span>

        <ul id="menu">
          <a href="#about"><li>A propos de moi</li></a>
          <a href="#test"><li>Projets</li></a>
          <a href="#contact"><li>Contacts</li></a>
        </ul>
      </div>

    </nav>
  <!-- FIN BURGER HEADER -->
</header>

<main>
  <h1>Fabien Ponzio</h1>
  <div>
    <div id="projects">
      <p class="line-1 anim-typewriter">Développeur Web</p>
    </div>

    <div id="about">
      <p>A propos de moi:</p>
      <p>Expérimenté dans le domaine de la vente et du marketing je suis une personne curieuse et créative, apte à travailler et interagir en groupe afin de répondre au mieux à chacune requête que l’on m’adresse.      </p>
      <p>J’ai décidé de valoriser mon profil en suivant une formation pour être web developper full stack à La Plateforme, un lieu d’enseignement unique ou chaque étudiants, apprennent le code et autres spécialités informatique.
Avec cette formation combiné à mon niveau d’anglais et mon aisance relationnelle j’ai pour objectif d’être une personne de confiance, à l’écoute, capable de répondre à vos attentes.
</p>
    </div>

    <div id="test">
      <p>Mes Projets</p>
    <article class="box-slide">
        <section class="slide-show">
  
            <a href="https://github.com/fabien-ponzio/voyage.git" class="a-slide"> <img src="image/voyage.PNG" class="img-slide" alt="voyage.git"> <span class="content">Site vitrine de voyage réalisé en HTML/CSS</span> </a>
            <a href="https://github.com/fabien-ponzio/module-connexion.git" class="a-slide"> <img src="image/connexion.PNG" class="img-slide" alt="connexion.git"> <span class="content">Module de connexion réalisé en HTML/CSS, Backend en PHP</span> </a>
            <a href="https://github.com/fabien-ponzio/blog.git" class="a-slide"> <img src="image/blog.PNG" class="img-slide" alt="blog.git"> <span class="content">Blog réalisé en HTML/CSS, Backend en PHP</span> </a>
            <a href="https://github.com/fabien-ponzio/boutique.git" class="a-slide"> <img src="image/boutique.PNG" class="img-slide" alt="boutique.git"> <span class="content">Boutique en ligne réalisée en HTML/CSS, Backend en PHP/POO</span> </a>

        </section>
    </article>
    </div>
    
    <div id="contact">
      <p>Contact</p>
      <div class="container"> 
      <img class="CV" src="image/PhotoCV.jpg" alt="Curriculum Vitae">
      <div class="social">
        <a href="https://www.linkedin.com/in/fabien-ponzio-030718150/">LinkedIn</a>
        <a href="PONZIO_CV.pdf" download>CV</a>
        <a href="https://github.com/fabien-ponzio">GitHub</a>
      </div>
      </div>
    </div>
    <section>

    </section>
</main>

<footer>
  <p>copyright Fabien Ponzio 2021</p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chroma-js/2.1.1/chroma.min.js" integrity="sha512-RWI59o+PDXjPl3bakOf3k2ZbDtfvn/OU/ZKe6QmkE0V/ve7vYKEJe0RdkDueS+VkghBazP+1o4LKGON+pHUa5g==" crossorigin="anonymous"></script>
<script type="text/javascript" src="portfolio.js"></script>

</body>

</html>