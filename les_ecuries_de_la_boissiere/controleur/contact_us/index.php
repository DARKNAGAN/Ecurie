<?php

// On demande les 5 derniers billets (mod�le)
include_once('./modele/model_class.php');
$events = get_(0, 5);
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach($events as $cle => $event)
{
    $events[$cle]['nomevent'] = ($event['nomevent']);
    $events[$cle]['dateevent'] = ($event['dateevent']);
    $events[$cle]['imageevent'] = ($event['imageevent']);
    $events[$cle]['lieuevent'] = ($event['lieuevent']);
    $events[$cle]['descriptionevent'] = ($event['descriptionevent']);
}

// On affiche la page (vue)
include_once('./vue/contact_us/index.php');
