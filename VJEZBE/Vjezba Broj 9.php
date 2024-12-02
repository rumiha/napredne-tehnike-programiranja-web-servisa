<?php
// Postavljanje vremenske zone na 'Europe/Zagreb'
date_default_timezone_set('Europe/Zagreb');

// Dohvaćanje trenutnog dana, vremena i datuma
$day = date('l');
$time = date('H:i');
$date = date('Y-m-d');
// Definiranje niza državnih praznika
$holidays = ['2024-01-01', '2024-05-01', '2024-06-22', '2024-08-15', '2024-10-08', '2024-12-25'];

// Provjera je li trenutni datum državni praznik
if (in_array($date, $holidays)) {
    echo "Dućan je zatvoren zbog državnog praznika.";
} else {
    // Provjera je li danas subota
    if ($day == 'Saturday') {
        // Provjera je li trenutno vrijeme unutar radnog vremena subotom
        if ($time >= '09:00' && $time <= '14:00') {
            echo "Dućan je otvoren (subota, 9:00 - 14:00).";
        } else {
            echo "Dućan je zatvoren (subota, radno vrijeme je 9:00 - 14:00).";
        }
        // Provjera je li danas nedjelja
    } elseif ($day == 'Sunday') {
        echo "Dućan je zatvoren (nedjelja).";
        // Provjera je li danas radni dan (ponedjeljak - petak)
    } elseif ($day == 'Monday' || $day == 'Tuesday' || $day == 'Wednesday' || $day == 'Thursday' || $day == 'Friday') {
        // Provjera je li trenutno vrijeme unutar radnog vremena radnim danom
        if ($time >= '08:00' && $time <= '20:00') {
            echo "Dućan je otvoren (radno vrijeme 8:00 - 20:00).";
        } else {
            echo "Dućan je zatvoren (radno vrijeme je 8:00 - 20:00).";
        }
    }
}
?>