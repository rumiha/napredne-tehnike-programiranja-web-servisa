<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izračun varijable c</title>
</head>
<body>
<!-- Forma za unos vrijednosti a i b -->
<form action="" method="POST">
    <label for="a">Vrijednost a:</label>
    <input type="number" id="a" name="a" required><br><br>

    <label for="b">Vrijednost b:</label>
    <input type="number" id="b" name="b" required><br><br>

    <button type="submit">Pošalji</button>
</form>

<?php
// Provjera je li zahtjev POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dohvaćanje vrijednosti a i b iz POST zahtjeva
    $a = $_POST['a'];
    $b = $_POST['b'];

    // Izračun vrijednosti c
    $c = (3 * $a - $b) / 2;

    // Prikaz rezultata
    echo "<h3>Rezultat:</h3>";
    echo "<p>Vrijednost c je: " . $c . "</p>";
}
?>
</body>
</html>