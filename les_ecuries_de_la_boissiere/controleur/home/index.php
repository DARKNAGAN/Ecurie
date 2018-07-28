<?php

// On demande les 5 derniers billets (mod�le)
include_once('./modele/model_class.php');
$unevent = get_News(0, 5);
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach($unevent as $cle => $event)
{
    $unevent[$cle]['nomevent'] = ($event['nomevent']);
    $unevent[$cle]['dateevent'] = ($event['dateevent']);
    $unevent[$cle]['imageevent'] = ($event['imageevent']);
    $unevent[$cle]['lieuevent'] = ($event['lieuevent']);
    $unevent[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

// On affiche la page (vue)
include_once('./vue/home/index.php');
