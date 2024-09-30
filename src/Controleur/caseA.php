<?php

$Vue->setMenu(new \App\Vue\Vue_Menu_A());
switch ($action) {
    case "defaut":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseA());
        break;
    case "pageSuivante":
        $Vue->addToCorps(new \App\Vue\Vue_CaseA_PageSuivante());
        break;
    case "pageAccueil":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseA());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous venez de faire un retour à l'accueil du A"));
        break;
    case "versA":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseA());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous venez de changer de case !"));
        break;
    case "CalculIMC":
        $Vue->addToCorps(new \App\Vue\Vue_CalculIMC());
        if (!empty($_POST["poids"])) {
            $IMC = $_POST["poids"] / ($_POST["taille"] * $_POST["taille"]);
            $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Votre IMC est de $IMC"));
        }
        break;
    case "CalculDistanceOrage":
        $Vue->addToCorps(new App\Vue\Vue_CalculDistanceOrage());
        if (!empty($_POST["secondes"])) {
            $distance = $_POST["secondes"] / 3;
            $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("L'orage est à $distance km de distance"));
        }
        break;
}