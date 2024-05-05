<?php
$emailSent = false; // Variable pour suivre si l'e-mail a été envoyé

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse e-mail de destination
    $to = 'buillaura0210@gmail.com';

    // Sujet de l'e-mail
    $subject = 'Nouveau message de contact';

    // Contenu de l'e-mail
    $emailContent = "Nom: $name\n";
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Message:\n$message";

    // En-têtes de l'e-mail
    $headers = "From: $name <$email>";

    // Envoi de l'e-mail
    if (mail($to, $subject, $emailContent, $headers)) {
        $emailSent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Secrets de cuisine, Découvrez des recettes de cuisine de dîner américain et trouvez des accessoires de cuisine vintage et rétro pour recréer l'atmosphère authentique des années passées. Recettes de hamburger américain, hot-dog, milkshake ">
    <meta name="keywords"
        content="recettes, Recettes de cuisine américaine, Dîner américain, Cuisine vintage, Cuisine rétro, Accessoires de cuisine vintage, Ustensiles de cuisine rétro, Recettes de hamburgers américains, Recettes de hot-dogs américains, Recettes de desserts américains, Cuisine traditionnelle américaine, Recettes de poulet frit, Recettes de barbecue américain, Recettes de macaroni au fromage, Recettes de pancakes américains, Recettes de biscuits et de tartes, Recettes de plats tex-mex, Recettes de sandwichs américains, Recettes de milkshakes, Recettes de desserts à base de chocolat, Recettes de cocktails classiques américains, Cuisine du Sud des États-Unis, Recettes de salades américaines, Recettes de cornichons et de condiments maison, Recettes de cuisine de la côte est américaine, Recettes de cuisine de la côte ouest américaine, Recettes de plats de Thanksgiving, Recettes de plats de Noël américains, Accessoires de cuisine rétro, Vaisselle vintage américaine, cuisine américain, cuisine américaine recette, cuisine culinaire, cuisine et recettes, cuisine recette, des recettes de cuisine, dîner américain, dîner recette, la cuisine américaine, les recettes de cuisine, recette américaine, recette cuisine, recette de cuisine, recette dîner, recettes culinaire, recettes favorites, une recette de cuisine">
    <link rel="shortcut icon" type="image/png" href="img/Logo fond rose fond vide sans texte 60px.webp">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="font/LuckiestGuy-Regular.ttf" as="font" type="font/tff" crossorigin="anonymous">
    <link rel="preload" href="font/RoyalWedding-Regular.ttf" as="font" type="font/tff" crossorigin="anonymous">
    <link rel="preload" href="font/RetroJump.ttf" as="font" type="font/tff" crossorigin="anonymous">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RMRYTDGQVV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-RMRYTDGQVV');
    </script>

    <title>Secrets de cuisine, Recettes de cuisine de dîner américain et accessoires de cuisine vintage</title>
</head>

<body>
    <div class="pattern">
    <header class="main-nav">
            <a href="https://yhumisunstra.com">
                <img class="logo" src="img/logotrianglenav.webp" alt="logo Secrets de cuisine">
            </a>
            <nav class="nav-end">
                <ul class="nav navbar">
                    <li class="rond rotating-element"><a class="" href="https://yhumisunstra.com">Accueil</a></li>
                    <li class="rond rotating-element"><a class="" href="https://yhumisunstra.com/recettes.html">Recettes</a></li>
                    <li class="rond rotating-element"><a class="" href="https://yhumisunstra.com/boutique.html">Boutique</a></li>
                    <li class="rond rotating-element"><a class="" href="https://yhumisunstra.com/blog.html">Blog</a></li>
                    <li class="rond rotating-element"><a class="" href="https://yhumisunstra.com/contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <section class="search">
            <div class="rectangle-search">
                <a class="login-container" href="https://yhumisunstra.com/connexion.html">
                    <svg class="login-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class=" w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="login-text change-color">Mon compte</span>
                </a>
                <a class="login-container dropdown" href="https://yhumisunstra.com/panier.html">
                    <svg id="cart-icon" class="login-icon image" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />

                    </svg>
                    <div class="login-text change-color dropdown-content" id="dropdown-menu cart-count"><span
                            id="cart-count">0</span> articles
                        <div class="see-panier">
                            Voir mon panier
                        </div>
                       
                    </div>
                </a>
            </div>
        </section>
        <section class="search">
            <div class="rectangle-menu">
                <div class="rectangle-rose-contact">
                    <h2>Email envoyé !</h2>
                </div>
                <div>
                    <a class="rectangle-rosefonce" href="https://yhumisunstra.com">Retour à la page d'accueil</a>
                </div>
            </div>
        </section>
        <footer>
            <section class="rectangle-footer">
                <ul class="foot-nav">
                    <li class="foot-text rotating-element"><a href="https://yhumisunstra.com/mentionslegales.html">Mentions légales</a>
                    </li>
                    <li class="foot-text rotating-element"><a href="https://yhumisunstra.com/reseaux.html">Réseaux sociaux</a></li>
                </ul>
                <p class="droits">Site créé par Laura Buil, Tous droits réservés 2023</p>
            </section>
        </footer>
    </div>
</body>

</html>