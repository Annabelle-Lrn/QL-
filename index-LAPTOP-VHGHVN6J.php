<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QL Elect - Electricien à Saint Gervais d'auvergne</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./assets/styles/index.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    
  </head>
  <body>
    <header>
      <h1>QL Elec</h1>
    </header>
    <main>
      <div class="info-dev">
        <p>Secteur d'intervention :<br> rayon de 20km autour de St Gervais d'Auvergne</p>
        <p class="right">Devis gratuit</p>
      </div>
      <div class="grid-container">
          <section class="presta-grid">   
            <div class="prestation-container">
              <h2>Prestations</h2>
              <ul>
                <div class="puce">
                  <i class="fa-regular fa-lightbulb"></i>
                  <li>Installation éléctrique</li>
                </div>
                <div class="puce">
                  <i class="fa-regular fa-lightbulb"></i>
                  <li>Rénovation éléctrique</li>
                </div>  
                <div class="puce">
                  <i class="fa-regular fa-lightbulb"></i>
                  <li>Dépannage</li>
                </div>
                <div class="puce">
                  <i class="fa-regular fa-lightbulb"></i>
                  <li>Mise aux normes</li>
                </div>
              </ul>
            </div>
          </section>
          <section class="carrousel-grid">
          <div id="diapo" class="carrousel">
             <img class="item"src="./assets/img/tableauavant1.webp" alt="tableau éléctrique avant travaux">
            <img id="item" src="./assets/img/tableauapres1.webp" alt="tableau éléctrique aprés travaux">
            <img class="item" src="./assets/img/creationtableau1.webp" alt="création tableau">
          </div>
         </section>        
          <section class="contact-grid">
            <div class="contact-form">
              <form action="POST" action="mail.php">
              <h2>Contactez-moi</h2>
              <div class="corpsformulaire">
                <div class="boite">
               <label for="nom">Votre nom</label>
                   <i class="fa-solid fa-user" style="color: #103d74;"></i>
                   <input type="text" name="nom" id="nom" required>
              </div>
              <div class="boite">
               <label for="telephone">Votre numéro de téléphone</label>
               <i class="fa-solid fa-phone" style="color:#103d74;"></i>
              <input type="text" name="telephone" id="telephone" required>
              </div>
              <div class="boite">
             <label for="mail">Votre email</label>
              <i class="fa-solid fa-envelope" style="color: #103d74;"></i>
              <input type="email" name="email" id="mail" required>
              </div>
              <div class="boite">
                      <label for="demande">Votre demande</label>
                      <select id="demande">
                        <option value="">Choisissez un motif</option>
                        <option value="Miseaunormes">Mise aux normes</option>
                        <option value="reno">Rénovation</option>
                        <option value="nouvelleinstallation">Nouvelle installation</option>
                        <option value="acquisition">Demande de devis pour un futur achat</option>
                      </select>
                </div>
                    <div class="boite">
                      <label for="message" name="message">Message</label>
                      <textarea id="message"placeholder="Saisissez votre message ici..."></textarea>
                    </div>
                  </div>                    
              <input class="btn" type="submit">
            </form>
            <?php
            if (isset($_POST['message'])) {
                $retour = mail('qlelec@outlook.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
                if($retour)
                    echo '<p>Votre message a bien été envoyé.</p>';
            }
            ?>

          </div>  
          </section>
        </div>
    </main>
    <footer>
      <p class="ste edosz">EURL QL ELEC</p>
      <p class="edosz">Contact</p><p> 06.29.95.99.77 | </p><p class="edosz">Mail</p>: QLelec@outlook.com</p>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
