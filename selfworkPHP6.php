<?php
// Selfwork PHP 6
// Scrivere un programma che stampi in console tutti i numeri da uno a cento.
// - Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
// - Se multiplo di 5 stampare “JAVASCRIPT”;
// - Se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

$number = 1;

do {
    if ($number % 3 == 0 && $number % 5 == 0) {
        echo "HACKADEMY\n";
    } elseif ($number % 3 == 0) {
        echo "PHP\n";
    } elseif ($number % 5 == 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $number . "\n";
    }
    $number++;
} while ($number <= 100);