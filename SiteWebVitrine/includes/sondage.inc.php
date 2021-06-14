<?php


if (isset($_POST["submit"])) {

    // Récupération des données du formulaire
    $nbPlayer = $_POST["nbPlayer"];
    $name = $_POST["name"];
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];
    $Q6 = $_POST["Q6"];
    $Q7 = $_POST["Q7"];

    $challenge1 = $_POST["challenge1"];
    $challenge2 = $_POST["challenge2"];
    $challenge3 = $_POST["challenge3"];
    $challenge4 = $_POST["challenge4"];
    $challenge5 = $_POST["challenge5"];
    $challenge6 = $_POST["challenge6"];
    $challenge7 = $_POST["challenge7"];
    $challenge8 = $_POST["challenge8"];

    $avis = $_POST["avis"];

    require_once "dbh.inc.php";
    require_once 'functions.inc.php';

    // Les fonction utilisée ci-dessous sont dans "function.inc.php"

/*
    // On vérifie que aucun champs ne soit vide
    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: https://escape-hack.herokuapp.com/signup.php?error=emptyinput");
        exit();
    }
    
    // On vérifie le bon format du pseudo
    if (invalidUid($uid) !== false) {
        header("location: https://escape-hack.herokuapp.com/signup.php?error=invaliduid");
        exit();
    }

    // On vérifie le bon format de l'email
    if (invalidEmail($email) !== false) {
        header("location: https://escape-hack.herokuapp.com/signup.php?error=invalidemail");
        exit();
    }

    // On vérifie que les deux mots de passe sont identique
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: https://escape-hack.herokuapp.com/signup.php?error=passwordsdontmatch");
        exit();
    }

    // On vérifie si le pseudo ou l'email éxiste déja dans la BD
    if (uidExists($conn, $username, $email) !== false) {
        header("location: https://escape-hack.herokuapp.com/signup.php?error=usernametaken");
        exit();
    }
*/
    // Tout les cas de test ci-dessus sont validé alors insertion du nouvel utilisateur
    createSondage($conn, $nbPlayer, $name,$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7, $challenge1, $challenge2,$challenge3, $challenge4, $challenge5,$challenge6, $challenge7, $challenge8,$avis);

} 
else {
	header("location: https://escape-hack.herokuapp.com/sondage.php");
    exit();
}
