<?php

$carnet = [];

function ajoutePersonne($carnet, $nom, $prenom, $adresse, $cp, $ville)
{
    $carnet[] = [
        "nom" => $nom,
        "prenom" => $prenom,
        "adresse" => $adresse,
        "code_postal" => $cp,
        "ville" => $ville
    ];
    return $carnet;
}
function rechercheNom($carnet, $nom)
{
    $ret = [];
    foreach ($carnet as $pers) {
        if (strpos($pers["nom"], $nom) >= 0) {
            $ret[] = $pers;
        }
    }
    return $ret;
}
function rechercheCP($carnet, $cp)
{
    $ret = [];
    foreach ($carnet as $pers) {
        if ($pers["code_postal"] == $cp) {
            $ret[] = $pers;
        }
    }
    return $ret;
}

$prompt = "";

while ($prompt != "Q") {
    if ($prompt == "A") {
        $nom = readline("Quel nom :");
        $prenom = readline("Quel prénom :");
        $adresse = readline("Quel adresse :");
        $cp = readline("Quel code postal :");
        $ville = readline("Quel ville :");

        $carnet = ajoutePersonne($carnet, $nom, $prenom, $adresse, $cp, $ville);
    } elseif ($prompt == "N") {
        $nomRech = readline("Quel Nom : ");
        print_r(rechercheNom($carnet, $nomRech));
    } elseif ($prompt == "C") {
        $cpRech = readline("Quel code postal : ");
        print_r(rechercheCP($carnet, $cpRech));
    }
    $prompt = readline("Que voulez vous faire ? (A => ajouter, N => recherche par nom, C => recherche par code postal, Q => quitter)");
}
