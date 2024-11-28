<?php
include '../connection.php';
try {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $birth_date = $_POST['birth_date'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = 'user';
    $username = strtolower(substr($first_name, 0, 1) . $last_name);
    $postfix = 1;
    $temp_username = $username;

    while (true) {
        $result = $conn->query("SELECT * FROM users WHERE username = '$temp_username'");
        if ($result->num_rows == 0) {
            $username = $temp_username;
            break;
        }
        $temp_username = $username . $postfix;
        $postfix++;
    }

    $sql = "INSERT INTO users (first_name, last_name, email, country, city, street, birth_date, username, password) 
            VALUES ('$first_name', '$last_name', '$email', '$country', '$city', '$street', '$birth_date', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration successful! Your username is: $username'); window.location.href = '../index.php?menu=login';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
} catch (Exception $e) {
    echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href = '../index.php?menu=register';</script>";
} finally {
    $conn->close();
}
?>
