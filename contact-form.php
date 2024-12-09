<?php
$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$date = date('Y-m-d H:i:s'); // Date et heure du message

// Messge, mise en forme pour ajouter dans le fichier



// Pour empêcher l'accès au fichier autrement qu'avec le formulaire
// Ma logique est que vu que je vérifie déjà si tous les champs sont rentrés dans le html pour pouvoir soumettre le formulaire, 
// il est logique que si l'utilisateur tape le chemin contact-form.php pour accèder au fichier alors les champs ne seront 
// pas remplis mais ça ne lui empêche pas d'appeler le fichier, donc je re vérifie dans ce fichier si les données ne sont 
// pas rentrés dans les champs du formulaire et dans ce cas là je redirige avec HEADER sur la page principale, dans le cas contraire
// j'écris son message dans le fichier contacts.json
if (!isset($_POST['name']) || empty(trim($_POST['name'])) || !isset($_POST['surname']) || empty(trim($_POST['surname'])) || !isset($_POST['email']) || empty(trim($_POST['email'])) || !isset($_POST['message']) || empty(trim($_POST['message']))) {
    header("Location: index.php");
    exit();
} else {
    $message_to_save = "Message du formulaire de contact:\n- Email: " . $email . "\n  Date: " . $date . "\n  Prénom: " . $name . "\n  Nom: " . $surname . "\n  Message: " . $message . "\n";

    $file_path = 'contacts.json';
    $file = fopen($file_path, 'a'); // a=mode append => ajouter du contenu

    fwrite($file, $message_to_save);
    fclose($file);

    echo ("Bonjour $surname, votre message a été transmis avec succès.");
}
