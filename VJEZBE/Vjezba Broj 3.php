<?php
// Postavljanje naslova stranice
$title = "Da Vincijev kod";
// Postavljanje linka na Wikipediju
$link = "hr.wikipedia.org/Da_Vincijev_kod";
// Postavljanje teksta linka
$linkText = "Pročitajte više na Wikipediji";
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
    <!-- Prikazivanje linka na Wikipediju -->
    <?php echo "<a href='https://" . $link . "' target='_blank'>" . $linkText . "</a>"; ?>
</p>
</body>
</html>