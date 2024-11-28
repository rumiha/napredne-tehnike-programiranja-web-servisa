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
    <h1>ADD NEWS</h1>
    <form action="news/add_news_to_db.php" method="POST" class="add-news-form">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="text">Text:</label>
        <textarea id="text" name="text" rows="5" required></textarea><br>

        <label for="images">Images (URLs):</label>
        <input type="text" id="images" name="images"><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>

        <button type="submit">Submit</button>
    </form>
</main>
</body>
</html>
