<?php
include '../connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $title = $_POST['title'];
    $text = $_POST['text'];
    $images = $_POST['images'];
    $date = $_POST['date'];

    $stmt = $conn->prepare("UPDATE news SET title = ?, text = ?, images = ?, date = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $title, $text, $images, $date, $id);

    if ($stmt->execute()) {
        echo "<script>alert('News updated successfully!'); window.location.href = '../index.php?menu=news';</script>";
    } else {
        echo "<script>alert('Error updating news: " . $conn->error . "'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request method.'); window.history.back();</script>";
}
?>