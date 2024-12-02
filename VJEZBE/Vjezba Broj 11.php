<?php

// Funkcija koja provjerava je li broj prost
function is_prime($num): bool
{
    // Brojevi manji ili jednaki 1 nisu prosti
    if ($num <= 1) {
        return false;
    }
    // Provjera dijelitelja od 2 do kvadratnog korijena broja
    for ($i = 2; $i <= sqrt($num); $i++) {
        // Ako je broj djeljiv s bilo kojim brojem, nije prost
        if ($num % $i == 0) {
            return false;
        }
    }
    // Ako nije pronađen nijedan djelitelj, broj je prost
    return true;
}

// Ispis prostih brojeva manjih od 100
echo "Prosti brojevi manji od 100 su:\n";
for ($i = 2; $i < 100; $i++) {
    // Provjera je li broj prost
    if (is_prime($i)) {
        // Ispis prostog broja
        echo $i . "\n";
    }
}

?>