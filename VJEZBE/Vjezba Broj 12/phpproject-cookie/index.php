<?php
# Sprječavanje pokušaja hakiranja
define('__APP__', TRUE);


# Varijable MORAJU BITI CIJELO BROJEVI
if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }

# Varijable MORAJU BITI NIZOVI ZNAKOVA A-Z
if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }

if (!isset($menu)) { $menu = 1; }
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<!-- Kraj CSS -->
		<!-- Meta elementi -->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="some description">
        <meta name="keywords" content="keyword 1, keyword 2, keyword 3, keyword 4, ...">
				
        <meta name="author" content="alen@tvz.hr">
		<!-- Meta elementi za favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<!-- Kraj meta elemenata za favicon -->
		<!-- Kraj meta elemenata -->
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<!-- Kraj Google Fonts -->
		<title>Example page - HTML5</title>
	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-subimage"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
# Uključivanje datoteke za navigaciju
include("menu.php");
print '</nav>
	</header>
	<main' . (isset($_COOKIE['news_title_1']) ? ' class="cookie"' : '') .'>';


# Početna stranica
if (!isset($menu) || $menu == 1) { include("home.php"); }

# Vijesti
else if ($menu == 2) { include("news.php"); }

# Kontakt
else if ($menu == 3) { include("contact.php"); }

# O nama
else if ($menu == 4) { include("about-us.php"); }


print '
	</main>';

# Provjera i ispis posljednje pregledanih naslova ako postoje kolačići
if (!empty($_COOKIE['news_title_1']) || !empty($_COOKIE['news_title_2']) || !empty($_COOKIE['news_title_3'])) {
	print '
		<aside><h2 style="text-align:center">ZADNJE PREGLEDANO</h2>';
	# Ispis vrijednosti $_COOKIE
	print '
		</aside>';
}
print '
	<footer>
		<p>Copyright &copy; ' . date("Y") . ' Alen Šimec</p>
	</footer>
</body>
</html>';
?>
