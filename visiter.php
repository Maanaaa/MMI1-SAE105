<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!--Polices Montserrat et Poppins, par l'API Google-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="shortcut icon" href="img/logo/favicon.ico" type="image/x-icon">
    <meta name="author" content="MANYA Théo">
    <meta name="description"
        content="Site web pour l'époque Médiéval, illustré par le Château de La RocheLambert. Dans le cadre d'une SAE à l'IUT du Puy-en-Velay en 2024. ">
    <!---- Bibliotéque pour les icons fontawesome ---->
    <script src="https://kit.fontawesome.com/fcb9a029a4.js" crossorigin="anonymous"></script>
    <title>Visiter le Château</title>
</head>

<body>
    <!---- Barre de navigation ---->
    <nav>
        <input type="checkbox" id="hamburger"> <!--- Formulaire pour le menu hamburger (pouvoir cliquer pour déplier)-->
        <label for="hamburger" id="hamburger-label">=</label>
        <!-- Quand le label est en état checked, déplier les liens-->
        <a href="index.html"><img src="img/logo/logo_blanc.png" alt="Logo du Château de La RocheLambert"></a>
        <div>
            <ul class="nav-links">
                <li><a href="index.html">Accueil</a></li>
                <li><a href="story.html">Histoire</a></li>
                <li><a href="visiter.html">Visiter</a></li>
                <li><a href="patrimoine.html">Le Patrimoine Auvergnat</a></li>
            </ul>
        </div>
    </nav>
    <!---- Header avec grande image de fond ---->
    <header class="visit_background">
        <div>
            <h1>Visiter le Château de LaRocheLambert<br>Les pièces phares du château</h1>
        </div>
    </header>
    <!-- Section en flex, qui représente différentes pièces du château avec une description pour chaque-->
    <section id="rooms">
        <!--Première pièce-->
        <div>
            <h2>La Cave</h2>
            <img src="img/photos_chateau/pieces/cave.webp" alt="">
            <!--Description-->
            <p>
                La cave du château est un espace fascinant, chargé d'histoire. Ses murs en pierre froide abritent
                d'anciennes cuves et tonneaux, témoignant de l'époque où le château produisait son propre vin.
                L'atmosphère y est fraîche et silencieuse, offrant un aperçu de la vie quotidienne et des pratiques de
                conservation du passé.
            </p>
        </div>
        <!--Deuxième pièce-->
        <div>
            <h2>La Grande Chambre</h2>
            <img src="img/photos_chateau/pieces/chambre.webp" alt="">
            <p>
                Cette pièce majestueuse servait autrefois de chambre principale pour le seigneur du château. Avec son
                grand lit à baldaquin et ses tapisseries ornées, elle reflète le luxe et le confort auxquels aspiraient
                les nobles. Les fenêtres offrent une vue imprenable sur les terres environnantes, tandis que la cheminée
                massive assure chaleur et ambiance.
            </p>
        </div>
        <!--Troisième pièce-->
        <div>
            <h2>Habitation Annexe</h2>
            <img src="img/photos_chateau/pieces/annexe.webp" alt="">
            <p>
                Située à proximité immédiate du château principal, l'habitation annexe servait de logement pour le
                personnel ou les invités de passage. Son architecture plus simple contraste avec le château, mais elle
                conserve un charme rustique avec ses poutres apparentes et son sol en pierre, offrant un aperçu de la
                vie quotidienne des résidents moins fortunés.
            </p>
        </div>

    </section>
    <!--- Effet de parallax sur une image qui a la forme d'une montagne-->
    <div class="paralax"></div> <!--- Code trouvé sur CodePen -->
    <!-- Section pour les informations de visite du Château -->
    <section id="visit_information">
        <div class="cards">
            <div class="card">
                <h2>Horaires</h2> <!-- Titre -->
                <h3>SAMEDI & DIMANCHE</h3>
                <p>9h30 - 12h30</p>
                <p>13h30 - 17h30</p>
                <a href="#"><button class="third"><i class="fa-solid fa-calendar"></i> Réserver</button></a>
            </div>
            <div class="card">
                <h2>Tarifs</h2>
                <h3>Adultes</h3>
                <p>8€</p>
                <p>Gratuit pour les moins de 18</p>
                <a href="#"><button class="third"><i class="fa-solid fa-calendar"></i> Réserver</button></a>
            </div>
        </div>
    </section>
    <!-- Formulaire de contact -->
    <section id="contact">
        <form action="php/contact-form.php" method="POST">
            <h2>Nous contacter</h2>
            <label for="name">Nom</label>
            <input type="text" name="name" placeholder="Votre nom" required />
            <label for="name">Prénom</label>
            <input type="text" name="surname" placeholder="Votre prénom" required />
            <label for="name">Email</label>
            <input type="text" name="email" placeholder="Email" required />
            <label for="name">Message</label>
            <textarea name="message" rows="4" cols="50">Bonjour, je vous contacte car...</textarea>
            <button class="secondary">Envoyer</button>
        </form>
        <!-- Affichage du message quand le formulaire a bien été envoyé -->
        <?php if (!empty($infoMessage)): ?>
            <p class="info"><?php echo $infoMessage; ?></p>
        <?php endif; ?>
    </section>
    <footer>
        <div>
            <img src="img/logo/logo_blanc.png" alt="Logo du Château de La RocheLambert" class="logo">
            <p>Construit au XIIe siècle, le château de la RocheLambert incarne l’évolution de l’architecture
                médiévale, combinant des éléments défensifs robustes et un confort résidentiel croissant.
            </p>
        </div>
        <div>
            <img src="img/decorations/footer_chateau_blanc.webp" alt="" class="decoration">
        </div>
        <div>

            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="story.html">Histoire</a></li>
                <li><a href="visiter.html">Visiter</a></li>
                <li><a href="patrimoine.html">Patrimoine</a></li>
                <br>
                <li><a href="visiter.html#contact">Nous contacter</a></li>
            </ul>
            <ul class="socialmedia">
                <li><a href="instagram.com"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="instagram.com"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="instagram.com"><i class="fa-brands fa-tiktok"></i></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>