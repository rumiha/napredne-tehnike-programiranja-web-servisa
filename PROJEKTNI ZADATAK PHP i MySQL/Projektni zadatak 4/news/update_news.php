<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ovo je projektni zadatak">
    <meta name="keywords" content="HTML5, css, projekt, zadatak">
    <meta name="author" content="Petar Rumiha">
    <link rel="stylesheet" href="news/news.css">
    <title>Projektni zadatak</title>
</head>
<body>
<main>
    <h1>EDIT AND UPDATE NEWS</h1>
    <?php
    include 'connection.php';

    $id = intval($_GET['id']);
    $sql = "SELECT * FROM news WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = htmlspecialchars($row['title']);
        $text = htmlspecialchars($row['text']);
        $images = htmlspecialchars($row['images']);
        $date = htmlspecialchars($row['date']);
    } else {
        echo "<p>No news article found with the given ID.</p>";
        exit();
    }

    echo "<button onclick=window.location.href='news/delete_news.php?id=$id' style=\"background-color: #f44336; color: white; border: none; padding: 10px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 4px;\">Delete This Article</button>";

    $conn->close();
    ?>
    <form action="news/update_news_to_db.php" method="POST" class="update-news-form">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $title; ?>" required><br>

        <label for="text">Text:</label>
        <textarea id="text" name="text" rows="5" required><?php echo $text; ?></textarea><br>

        <label for="images">Images (URLs):</label>
        <input type="text" id="images" name="images" value="<?php echo $images; ?>"><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="<?php echo $date; ?>" required><br>

        <button type="submit">Update</button>
    </form>


</main>
</body>
</html>