<?php
// Remplacez les valeurs ci-dessous par vos propres informations de base de données
// $serveur = "localhost";
// $utilisateur = "root";
// $motdepasse = "";
// $basededonnees = "cuisine";


$serveur = "bl1068096-001.eu.clouddb.ovh.net";
$utilisateur = "Yhumi";
$motdepasse = "2Lolo2511";
$basededonnees = "secretsdecuisine";
$port = 35339; 
// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees, $port);


// Vérification des erreurs de connexion
if ($connexion->connect_error) {
    die("Erreur de connexion à la base de données: " . $connexion->connect_error);
}

// Récupération des données du formulaire de connexion
$username = $_POST['username'];
$password = $_POST['password'];

// Requête préparée pour vérifier les informations d'identification dans la base de données
$select = 'SELECT *';
$from = 'FROM users';
$where = 'WHERE pseudo = ? AND password = ?';
$requestString = $select . ' ' . $from . ' ' . $where;

$stmt = mysqli_prepare($connexion, $requestString);
mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
mysqli_stmt_execute($stmt);
$resultat = mysqli_stmt_get_result($stmt);

if ($resultat->num_rows == 1) {
    // L'utilisateur existe, vérification du mot de passe
    $utilisateur = $resultat->fetch_assoc();
        
    if ($password == $utilisateur['password']) {
        // Mot de passe correct, connexion réussie
        // Démarrez une session
        session_start();

        // Stockez les informations de l'utilisateur dans la session
        $_SESSION['username'] = $utilisateur['username'];
        $_SESSION['pseudo'] = $utilisateur['pseudo']; // Remplacez par les colonnes appropriées de votre table utilisateurs

        // Redirection vers la page de l'utilisateur
        header("Location: ../compte.html");
        exit;
    } else {
        // Mot de passe incorrect
        echo "Nom d'utilisateur ou mot de passe incorrect!";
    }
} else {
    // Utilisateur non trouvé
    echo "Nom d'utilisateur ou mot de passe incorrect!";
}

// Fermeture de la connexion à la base de données
$stmt->close();
$connexion->close();
?>