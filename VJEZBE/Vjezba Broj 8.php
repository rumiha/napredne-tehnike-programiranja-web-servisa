<?php
// Definiranje niza automobila
$cars = array("Audi", "BMW", "Renault", "Citroen");
// Provjera je li odabrano vozilo
$selected = isset($_POST['car']) ? $_POST['car'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odabir vozila</title>
</head>
<body>

<p>Odaberite vozilo:</p>
<!-- Forma za odabir vozila -->
<form method="POST">
    <?php
    // Prikazivanje opcija za odabir vozila
    foreach ($cars as $car) {
        echo "<label><input type=\"checkbox\" name=\"car[]\" value=\"$car\" " . (is_array($selected) && in_array($car, $selected) ? "checked" : "") . "> $car</label><br>";
    }
    ?>
    <button type="submit">Odaberi</button>
</form>

<?php $selected ?>

</body>
</html>