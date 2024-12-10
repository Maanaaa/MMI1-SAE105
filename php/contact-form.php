<head>
    <title>Message envoyé</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <!--Polices Montserrat et Poppins, par l'API Google-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="shortcut icon" href="img/logo/favicon.ico" type="image/x-icon">
    <meta name="author" content="MANYA Théo">
    <meta name="description"
        content="Site web pour l'époque Médiéval, illustré par le Château de La RocheLambert. Dans le cadre d'une SAE à l'IUT du Puy-en-Velay en 2024. ">
    <!---- Bibliotéque pour les icons fontawesome ---->
    <script src="https://kit.fontawesome.com/fcb9a029a4.js" crossorigin="anonymous"></script>
</head>
<?php
// Je récupère chaque info rentré dans le formulaire pour pouvoir manipuler les données plus facilement après
$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$date = date('Y-m-d H:i:s'); // Date et heure du message

// Pour empêcher l'accès au fichier autrement qu'avec le formulaire
// Ma logique est que vu que je vérifie déjà si tous les champs sont rentrés dans le html pour pouvoir soumettre le formulaire, 
// il est logique que si l'utilisateur tape le chemin contact-form.php pour accèder au fichier alors les champs ne seront 
// pas remplis mais ça ne lui empêche pas d'appeler le fichier, donc je re vérifie dans ce fichier si les données ne sont 
// pas rentrés dans les champs du formulaire et dans ce cas là je redirige avec HEADER sur la page principale, dans le cas contraire
// j'écris son message dans le fichier contacts.json

if (!isset($_POST['name']) || !isset(trim($_POST['surname'])) || !isset($_POST['email']) || !isset($_POST['message'])  || !isset($_POST['cgu'])) {
    header("Location: ../index.html"); // renvoyer l'user vers la page index
    exit();
} else {
    // Création d'un tableau avec les infos du formulaire rentrés par l'user
    $tab = [
        'email' => $email,
        'date' => $date,
        'name' => $name,
        'surname' => $surname,
        'message' => $message
    ];

    $savetab = serialize($tab); // trasformer en chaîne de caractère

    $fichier = fopen('contacts.json', 'a+');
    fwrite($fichier, $savetab . "\n"); // Ajout de saut de ligne pour séparer
    fclose($fichier);
}
?>

<body>
    <section class="image-left-text-right">
        <div class="flex-left"> <!---- Côté gauche de ma section ---->
            <img src="../img/photos_chateau/entree_chateau.webp" alt="Photo de l'entrée du château de La RocheLambert">
        </div>
        <div class="flex-right"> <!---- Côté droit de ma section ---->
            <h2>Bonjour <?php echo($surname)?>, </h2>
            <p>Votre message a bien été transmis, nous vous répondrons le plus rapidement possible.</p>
            <form action="../index.html"><button class="secondary">Retourner à la page d'accueil</button></form>
        </div>
    </section>
</body>

</html>