<?php
// Povezivanje na bazu podataka
$connection = mysqli_connect("localhost", "root", "123", "my_db");

// Provjera uspješnosti povezivanja
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Provjera je li zahtjev POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizacija unosa korisnika
    $search = mysqli_real_escape_string($connection, $_POST['search']);
    // SQL upit za pretraživanje korisnika po imenu ili prezimenu
    $query = "SELECT name, surname FROM users WHERE firstname LIKE '%$search%' OR surname LIKE '%$search%' ORDER BY surname ASC LIMIT 10";
    $result = mysqli_query($connection, $query);

    // Provjera ima li rezultata
    if (mysqli_num_rows($result) > 0) {
        // Ispis rezultata pretraživanja
        while ($row = mysqli_fetch_array($result)) {
            echo "<p>" . $row['name'] . " " . $row['surname'] . "</p>";
        }
    } else {
        // Poruka ako nema rezultata
        echo "<p>No results found.</p>";
    }
}

// Zatvaranje veze s bazom podataka
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Users</title>
</head>
<body>
<h1>Search for Users</h1>
<!-- Forma za pretraživanje korisnika -->
<form method="POST" action="">
    <label for="search">Enter Firstname or Lastname:</label>
    <input type="text" name="search" id="search" required>
    <button type="submit">Search</button>
</form>
</body>
</html>