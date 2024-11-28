<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $text = $_POST['text'];
    $images = $_POST['images'];
    $date = $_POST['date'];

    $stmt = $conn->prepare("INSERT INTO news (title, images, text, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $images, $text, $date);

    if ($stmt->execute()) {
        echo "<script>alert('News added successfully!'); window.location.href = '../index.php?menu=news';</script>";
    } else {
        echo "<script>alert('Error adding news: " . $conn->error . "'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request method.'); window.history.back();</script>";
}
?>
