<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pogodi broj</title>
</head>
<body>
<div class="container">
    <h3>Igra (pogodi broj)</h3>
    <!-- Forma za unos broja -->
    <form method="post" action="">
        <label for="guess">Upiši jedan broj od 1 do 10:</label>
        <input type="number" id="guess" name="guess" min="1" max="10" required>
        <button type="submit">Pogodi!</button>
    </form>
    <div>
        <?php
        // Provjera je li zahtjev POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Dohvaćanje unesenog broja
            $guess = intval($_POST["guess"]);
            // Generiranje slučajnog broja između 1 i 10
            $random = rand(1, 10);

            // Provjera je li uneseni broj jednak slučajnom broju
            if ($guess === $random) {
                echo "Čestitamo! Pogodili ste broj!";
            } else {
                echo "Pogodak, probaj ponovo! <br>Zamišljeni broj je $random.";
            }
        }
        ?>
    </div>
</div>
</body>
</html>