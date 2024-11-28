<?php
session_start();
include '../connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = $conn->query("SELECT * FROM users WHERE username = '$username'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['korisnicko_ime'];
            $_SESSION['user_name'] = $user['ime'];
            echo "<script>alert('Login successful! Welcome, " . $user['ime'] . "' ); window.location.href = '../index.php?menu=home';</script>";
        } else {
            echo "<script>alert('Incorrect password!'); window.location.href = '../index.php?menu=login';</script>";
        }
    } else {
        echo "<script>alert('Username does not exist!'); window.location.href = '../index.php?menu=login';</script>";
    }

    $stmt->close();
} else {
    echo "Please provide both username and password.";
}

$conn->close();
?>
