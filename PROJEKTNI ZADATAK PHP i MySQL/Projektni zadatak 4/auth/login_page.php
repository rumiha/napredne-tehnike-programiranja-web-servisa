<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login page for the project">
    <meta name="keywords" content="login, authentication, project">
    <meta name="author" content="Petar Rumiha">
    <link rel="stylesheet" href="auth/registration.css">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="auth/login.php" method="POST" class="registration">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Login</button>
</form>
</body>
</html>
