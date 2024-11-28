<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ovo je projektni zadatak">
    <meta name="keywords" content="HTML5, css, projekt, zadatak">
    <meta name="author" content="Petar Rumiha">
    <link rel="stylesheet" href="../news.css">
    <title>Projektni zadatak</title>
</head>
<body>
<main>
    <h1>NEWS DETAILS</h1>

    <?php
    include 'connection.php';

    $id = intval($_GET['id']);
    $sql = "SELECT * FROM news WHERE id = $id ORDER BY date DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = htmlspecialchars($row['title']);
        $images = htmlspecialchars($row['images']);
        $text = htmlspecialchars($row['text']);
        $date = htmlspecialchars($row['date']);
        $shortText = strlen($text) > 200 ? substr($text, 0, 200) . '...' : $text;

        echo "<article>
                    <img src='$images' alt='$title' style='max-width: 400px; max-height: 400px;'>
                    <div>
                        <h2><a href='#'>$title</a></h2>
                        <p class='date'>Published: $date</p>
                        <p>$shortText</p>
                        <a href='index.php?menu=news' class='read-more'>Go back...</a>
                    </div>
                </article>
                <br>
                
               <hr>
                <button onclick=window.location.href='index.php?menu=update_news&id=$id'>Edit</button>";
    } else {
        echo "<p>No news articles found.</p>";
    }

    $conn->close();
    ?>
</main>
<footer>
    <p>&copy; 2024 Petar Rumiha </p>
</footer>
</body>
</html>
