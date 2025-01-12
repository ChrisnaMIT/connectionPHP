<?php
//php et redirections (header) uniquement


// tableau associatif qui associe un username à un password
$users = [
    "luc"=> "motDePasseDeLuc4",
    "michel"=> "pasteque",
    "eglantine"=> "choucroute",
    "patricia"=> "surf"
];


$username = null;  // variables
$password = null;

if(!empty($_POST["username"])){     // vérifie que le username n'est pas vide
    $username = $_POST["username"]; // et récupère la valeur qu'on à mit dans username
}

if(!empty($_POST["password"])){     // vérifie que password n'est pas vide
    $password = $_POST["password"]; // et récupère la valeur qu'on à mit dans password
}

if($username && ($users[$username]) && $users[$username] === $password){ // si on écrit un username et que le username fait parti du tableau user et le mdp et égale au username qu'on à écrit c juste
    header("location : resultat.php"); // si username et password juste c'est envoyer vers page resultat.php

}else {
    header("location : index.php"); // si c'est username et password faux renvoyer vers index.php

}




//
//les bons utilisateurs et mot de passe
// peuvent se connecter, les autres sont renvoyés à l'accueil
//
//Sur une connection réussie, on renvoie vers la page résultat qui dit bravo.
//elle a un bouton déconnexion (retour accueil)
//
//JEUX SQL :
// https://sql-island.informatik.uni-kl.de/
//https://mystery.knightlab.com/
