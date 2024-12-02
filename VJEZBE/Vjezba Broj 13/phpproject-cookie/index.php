<?php
# Definiranje konstante za zaštitu od neovlaštenih pristupa
define('__APP__', TRUE);


# Provjera i postavljanje varijabli koje MORAJU BITI CIJELO BROJEVI
if(isset($_GET['menu'])) {
	$menu = (int)$_GET['menu']; # Pretvaranje varijable u cijeli broj
}
if(isset($_GET['action'])) {
	$action = (int)$_GET['action']; # Pretvaranje varijable u cijeli broj
}

# Provjera i postavljanje varijabli koje MORAJU BITI NIZOVI ZNAKOVA
if(!isset($_POST['_action_']))  {
	$_POST['_action_'] = FALSE;  # Postavljanje zadane vrijednosti ako varijabla nije definirana
}

# Ako varijabla $menu nije postavljena, koristi se zadana vrijednost 1
if (!isset($menu)) { $menu = 1; }

print '
<!DOCTYPE html>
<html>
	<head>
		<!-- Uključivanje CSS stilova -->
		<link rel="stylesheet" href="style.css">
		<!-- Završetak CSS-a -->
		
		<!-- Meta elementi za responsivnost i informacije o stranici -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
        <meta name="author" content="alen@tvz.hr">
		
		<!-- Meta elementi za favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- Kraj meta elemenata za favicon -->
		
		<!-- Google font Oswald -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- Kraj Google fontova -->
		
		<title>Primjer stranice - HTML5</title>
	</head>
<body>
	<header>
		<!-- Postavljanje hero slike ovisno o izborniku -->
		<div'; if ($menu > 1) {
	print ' class="hero-subimage"'; # Ako je $menu veći od 1, koristi se manja slika
} else {
	print ' class="hero-image"'; # Inače koristi glavnu hero sliku
}
print '></div>
		<nav>';
# Uključivanje datoteke za navigaciju
include("menu.php");
print '</nav>
	</header>
	<main' . (isset($_COOKIE['news_title_1']) ? ' class="cookie"' : '') .'>';

# Prikaz odgovarajuće stranice ovisno o vrijednosti $menu

# Početna stranica
if (!isset($menu) || $menu == 1) {
	include("home.php");
}
# Vijesti
else if ($menu == 2) {
	include("news.php");
}
# Kontakt
else if ($menu == 3) {
	include("contact.php");
}
# O nama
else if ($menu == 4) {
	include("about-us.php");
}

print '
	</main>';

# Pokretanje sesije za pohranu podataka
session_start();

# Provjera i ispis posljednje pregledanih naslova iz sesije
if (!empty($_SESSION['news_title_1']) || !empty($_SESSION['news_title_2']) || !empty($_SESSION['news_title_3'])) {
	print '
		<aside><h2 style="text-align:center">ZADNJE PREGLEDANO</h2>';

	# Prikaz naslova spremljenih u sesiji
	if (!empty($_SESSION['news_title_1'])) {
		print '<p>' . htmlspecialchars($_SESSION['news_title_1']) . '</p>';
	}
	if (!empty($_SESSION['news_title_2'])) {
		print '<p>' . htmlspecialchars($_SESSION['news_title_2']) . '</p>';
	}
	if (!empty($_SESSION['news_title_3'])) {
		print '<p>' . htmlspecialchars($_SESSION['news_title_3']) . '</p>';
	}

	print '</aside>';
}

# Prikaz podnožja stranice
print '
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Alen Šimec</p>
	</footer>
</body>
</html>';
?>
