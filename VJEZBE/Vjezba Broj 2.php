<?php
// Postavljanje naslova stranice
$title = "Da Vincijev kod";
// Postavljanje linka na Wikipediju
$link = "https://hr.wikipedia.org/Da_Vincijev_kod";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Informacije o knjizi Da Vincijev kod autora Dana Browna.">
    <meta name="keywords" content="Da Vincijev kod, Dan Brown, kriminalistički triler, knjige">
    <!-- Prikazivanje naslova stranice -->
    <title><?php echo $title; ?></title>
</head>
<body>
<h1>Da Vincijev kod</h1>
<!-- Opis knjige -->
<p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.</p>
<p>
    <!-- Link na Wikipediju za više informacija -->
    <a href="<?php echo $link; ?>" target="_blank">Pročitajte više na Wikipediji</a>
</p>
</body>
</html>