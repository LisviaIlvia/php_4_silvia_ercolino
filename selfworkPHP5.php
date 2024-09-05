<?php

// Selfwork PHP 5
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array.

$numbers = [15, 33, 30, 36, 38, 63, 64];


$somma = 0;
$count = 0;

foreach($numbers as $number) {
    if($number % 2 == 0) {
        $count++;
      $somma += $number;
    }
}

if ($count > 0) {
    $media = $somma / $count;
    echo "La media dei numeri pari è: " . $media;
} else {
    echo "Nessun numero pari trovato.";
}
