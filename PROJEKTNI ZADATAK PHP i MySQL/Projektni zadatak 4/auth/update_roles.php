<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roles = $_POST['roles'];

    foreach ($roles as $id => $role) {
        $stmt = $conn->prepare("UPDATE users SET role = ? WHERE id = ?");
        $stmt->bind_param("si", $role, $id);
        $stmt->execute();
        $stmt->close();
    }

    echo "<script>alert('Roles updated successfully!'); window.location.href = '../index.php?menu=administration';</script>";
} else {
    echo "<script>alert('Invalid request method.'); window.history.back();</script>";
}

$conn->close();
?>