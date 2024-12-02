<?php
// Provjera je li zahtjev POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dohvaćanje unesenog niza
    $input = $_POST["inputString"];
    // Brojanje riječi u nizu
    $count = str_word_count($input);
    // Prikazivanje rezultata
    echo "<p>ulazni niz: $input. sadrži $count riječi.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadatak str_word_count</title>
</head>
<body>
<h1>Zadatak <span style="color: red;">str_word_count</span></h1>
<p>U zadatku se traži da se ispiše koliko je riječi u rečenici. Koristite naredbu <span style="color: red;">str_word_count</span>
</p>
<!-- Forma za unos niza -->
<form method="post">
    <label for="inputString">Ulazni niz:</label>
    <input type="text" id="inputString" name="inputString">
    <button type="submit">ispisi broj riječi</button>
</form>
<?php
// Provjera je li zahtjev POST (duplikat koda)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dohvaćanje unesenog niza (duplikat koda)
    $input = $_POST["inputString"];
    // Brojanje riječi u nizu (duplikat koda)
    $count = str_word_count($input);
    // Prikazivanje rezultata (duplikat koda)
    echo "<p>ulazni niz: $input. sadrži $count riječi.</p>";
}
?>
</body>
</html>