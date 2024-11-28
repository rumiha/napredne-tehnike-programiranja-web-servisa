<?php
include '../connection.php';
$id = intval($_GET['id']);
$sql = "DELETE FROM news WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Article deleted successfully.'); window.location.href = 'http://localhost/t/index.php?menu=news';</script>";
} else {
    echo "<script>alert('Problem deleting article.'); window.location.href = 'http://localhost/t/index.php?menu=news';</script>";
}
$conn->close();
?>