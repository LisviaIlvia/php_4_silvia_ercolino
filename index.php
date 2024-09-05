<?php

// Selfwork PHP 4
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere.

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
    ['name' => 'Ambra', 'surname' => 'Scura', 'gender' => 'F'],
    ['name' => 'Pino', 'surname' => 'Silvestre', 'gender' => 'M'],
    ['name' => 'Maria', 'surname' => 'Bellina', 'gender' => 'F'],
    ['name' => 'Giovanni', 'surname' => 'Albanesi', 'gender' => 'NB'],
  ];

  foreach ($users as $user) {
    if ($user['gender'] == 'NB') {
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    } elseif ($user['gender'] == 'F') {
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    }
}