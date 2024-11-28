<?php
$menu = isset($_GET["menu"]) ? $_GET["menu"] : "home";
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ovo je projektni zadatak">
    <meta name="keywords" content="HTML5, css, projekt, zadatak">
    <meta name="author" content="Petar Rumiha">
    <link rel="stylesheet" href="style.css">
    <title>Projektni zadatak</title>
</head>
<body>
<?php include "header.php"; ?>
<?php
switch ($menu) {
    case "home":
        include "home.php";
        break;
    case "news":
        include "news/news.php";
        break;
    case "contact":
        include "contact/contact.php";
        break;
    case "about":
        include "aboutus/aboutus.php";
        break;
    case "gallery":
        include "gallery/gallery.php";
        break;
    case "login":
        include "auth/login_page.php";
        break;
    case "register":
        include "auth/register_page.php";
        break;
    default:
        include "home.php";
}
?>
<?php include "footer.php"; ?>
</body>
</html>
