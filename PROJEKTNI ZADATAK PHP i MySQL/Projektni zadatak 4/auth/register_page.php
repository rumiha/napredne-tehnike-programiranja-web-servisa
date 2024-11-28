<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ovo je projektni zadatak">
    <meta name="keywords" content="HTML5, css, projekt, zadatak">
    <meta name="author" content="Petar Rumiha">
    <link rel="stylesheet" href="auth/registration.css">
    <title>Projektni zadatak</title>
</head>
<body>
<h1>Registration</h1>
<form action="auth/register.php" method="POST" class="registration">
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" required><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" required><br>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="country">Country:</label>
    <select id="country" name="country" required>
        <?php
        include 'connection.php';
        $result = $conn->query("SELECT name FROM countries");
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
        }
        ?>
    </select><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city" required><br>

    <label for="street">Street:</label>
    <input type="text" id="street" name="street" required><br>

    <label for="birth_date">Date of Birth:</label>
    <input type="date" id="birth_date" name="birth_date" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Register</button>
</form>
</body>
</html>