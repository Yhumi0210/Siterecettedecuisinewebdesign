<?php
// Connexion à la base de données (remplacez les valeurs par vos propres informations)
$serveur = "bl1068096-001.eu.clouddb.ovh.net";
$utilisateur = "Yhumi";
$motdepasse = "2Lolo2511";
$basededonnees = "secretsdecuisine";
$port = 35339; 
// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees, $port);
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

// Récupérer les données du formulaire
$name = $_POST['name'];
$password = $_POST['password'];

// Hacher le mot de passe
$motdepasse_hache = password_hash($password, PASSWORD_DEFAULT);

// Insérer les données dans la base de données
$sql = "INSERT INTO utilisateurs (nom, motdepasse) VALUES ('$name', '$password')";

if ($conn->query($sql) === TRUE) {
    // Redirection vers la page compte.html
    header('Location: ../compte.html');
    exit();
} else {
    echo "Erreur lors de la création du compte : " . $conn->error;
}

$conn->close();
?>