<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./assets/logoF.png">
  <title>QL Elec - Electricien à Saint Gervais d'Auvergne</title>
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./assets/styles/index.css">
</head>
<body>
<div class="start_image">

</div>
<header> 
  <div class="devis_gratuit">
    <h3>Devis Gratuit</h3>
  </div>
  <div class="entete">
    <h1>QL Elec</h1>
    <h2>Electricien à Saint Gervais dAuvergne</h2>
    <h3>06.29.95.99.77 | QLelec@outlook.com</h3>
  </div>
  <div class="deplacement">
    <h3>Interventions : <br> rayon de 20Km</h3>
  </div>
</header>
<main>
  <nav id="navbar">
    <ul>
      <li> <a href="#a_propos">A propos</a>  </li>
      <li> <a href="#services">Prestations</a>  </li>
      <li> <a href="#realisations">Réalisations</a> </li>
      <li> <a href="#form_contact">Me contacter</a> </li>
    </ul>
  </nav>
  <div id="a_propos" class="propos">
    <div class="presentation">
      <p>J'interviens principalement à saint gervais d'auvergne et dans un rayon de 20 km.
        <br>En choisissant mes services, vous opter pour un électricien qui allie technique, précision et un sens aigu du service. <br>Je suis à votre écoute pour tous vos projets électriques, que ce soit pour une rénovation, une installation neuve ou un dépannage. </p>
    </div>
    <div class="objectif">
      <p>Mon objectif : Vous fournir une prestation de qualité, qui respecte vos attentes et vos délais.</p>
    </div>
  </div>
  <div id="arrowUp">
  <i class="fa-solid fa-angles-up"></i>
  </div>
  </div>
  <section class="services_carrousel">
    <div id="services">
      <div class="card-service">
        <img src="./assets/img/ampoules.png" alt="">
        <p>Installation / Rénovation <br> du systèmes d'éclairage</p>
      </div>
      <div class="card-service">
        <img src="./assets/img/tableau.png" alt="">
        <p>Installation/ Rénovation <br> de l'installation électrique<br>(prises, interupteurs, tableaux-électriques)</p>
      </div>
      <div class="card-service">
        <img src="./assets/img/prise.png" alt="">
        <p>Dépannage<br> (pannes, courts-circuits)</p>
      </div>
      <div class="card-service">
        <img src="./assets/img/multimetre.png" alt="">
        <p>Mise en conformité</p>
      </div>

    </div>

    <div class="swiper" id="realisations">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./assets/img/carrefour.webp" alt="Changement de luminaire à Carrefour St Gervais">
          <p> Changement de luminaire à Carrefour St Gervais</p>
        </div>
        <div class="swiper-slide">
          <img src="./assets/img/creationtableau1.webp" alt="Création tableau électrique">
          <p>Création tableau électrique</p>
        </div>
        <div class="swiper-slide">
          <img src="./assets/img/landogne.webp" alt="Intervention à Landogne">
          <p>Intervention à Landogne</p>
        </div>
        <div class="swiper-slide">
          <img src="./assets/img/tableau_avant_apres.webp" alt="Tableau électrique avant/après">
         <p> Mise au normes tableau</p>
        </div>
        <!-- <div class="swiper-slide"></div> -->
      </div>
      <div class="swiper-scrollbar"></div>
    </div>

  </section>

  <section id="form_contact">
    <h3>Me contacter</h3>
    <?php
    $erreurs =['nom'=>" ", 'prenom'=> " ", 'mail'=> " ", 'telephone'=>" ",'sujet'=>" ", 'message'=>" " ];
    $confirmeMailenvoi =" ";
    $visibiliteForm = " ";

    if(isset($_GET['statut']) && $_GET['statut'] == 'succes'){
      $confirmeMailenvoi =" Votre message a bien été enoyé. Je prendrai contact avec vous dans les meilleurs délais.";
      $visibiliteForm = false;
    }elseif(isset($_GET['statut']) && $_GET['statut'] == 'erreur'){
      $erreurs =[
        'nom' => $_GET['er_nom']??'',
        'prenom' => $_GET['er_prenom']??'',
        'mail' => $_GET['er_mail']??'',
        'telephone' => $_GET['er_telephone']??'',
        'sujet'=> $_GET['er_sujet']?? '',
        'message' => $_GET['er_message']??''
      ];
    }
    ?>
    <?php if($confirmeMailenvoi): ?>
      <p class="msgEnvoye"><?=$confirmeMailenvoi;?></p>
    <?php endif;  ?>

    <?php if($visibiliteForm): ?>
    <form method="POST" action="/traitement.php">
      <div class="form_id">
        <label for="nom">Nom</label>
        <input class="left" type="text" name="nom" id="nom" placeholder="Votre nom"required>
        <span class="erreur"><?= $erreurs['nom']?? '';?></span>
      </div>

      <div class="form_id right">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" placeholder="Votre prénom"required>
      </div>

      <div class="form_id">
        <label for="mail">Email</label>
        <input class="left" type="email" name="mail" id="mail" placeholder="Votre email" required>
        <span class="erreur"><?= $erreurs['mail']?? '';?></span>
      </div>
      <div class="form_id  right">
        <label for="telephone">Téléphone</label>
        <input type="number" id="telephone"name="telephone" placeholder="Votre numéro de téléphone" required>
        <span class="erreur"><?= $erreurs['telephone']?? '';?></span>
      </div>
        <label for="sujet"></label>
        <select name="sujet" id="sujet">
          <option value="">Sélectionner</option>
          <option value="Demande de devis">Demande de devis</option>
          <option value="Remise aux normes">Remise aux normes</option>
          <option value="Depannage">Dépannage</option>
        </select>
           
        <textarea name="message" id="message" placeholder="Saissez ici, votre message. Dans le cas d'un devis pour une vente ou une acquision merci de précier la date butoire et vos diposniblités"></textarea>
        <span class="erreur"><?= $erreurs['message']?? '';?></span>
      
      
      <input type="submit" name="envoyer" value="Envoyer">
      <span id="erreur"> </span>

      <div >
        <p>En soumettant ce formulaire, vous accepter que la société QL Elec mémorise et utilise vos données personnelles afin de pouvoir vous contacter. Vos coordonnées ne seront transmises à aucun tiers, ni utilisées pour de la publicité.</p>
        <input type="checkbox" id="accord">
        <label for="accord">J'autorise la société QL Elec à communiquer avec moi</label>
      </div>
    </form>
    <?php endif; ?>
  </section>
  
</main>
<footer>
  <div class="contact">
    <h4> QL Elec</h4>
    <div class="contact_container">
      <div>
        <h5>Téléphone :</h5> 
        <p>06.29.95.99.77</p>
      </div>
      <div>
        <h5>Mail :</h5>
        <p>Qlelec@outlook.com</p>
      </div>
    </div>
  </div>
  <div class="mentions">
    <ul>
      <li>Mentions Légales</li>
      <li> <a href="./cdv.html">Conditions Générales de Ventes</a></li>
      <li> Réalisation : Annabelle Larney</li>
    </ul>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/index.js"></script>
</body>
</html>