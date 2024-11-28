<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ovo je projektni zadatak">
    <meta name="keywords" content="HTML5, css, projekt, zadatak">
    <meta name="author" content="Petar Rumiha">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="news/news.css">
    <title>Projektni zadatak</title>
</head>
<body>
<main>
    <h1>NEWS</h1>
    <button class="news-button" onclick="window.location.href='index.php?menu=add_news'">Add News</button>
    <section class="articles">
        <?php
        include 'connection.php';

        $sql = "SELECT * FROM news ORDER BY date DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = htmlspecialchars($row['id']);
                $title = htmlspecialchars($row['title']);
                $images = htmlspecialchars($row['images']);
                $text = htmlspecialchars($row['text']);
                $date = htmlspecialchars($row['date']);
                $shortText = strlen($text) > 200 ? substr($text, 0, 200) . '...' : $text;

                echo "<article>
                        <img src='$images' alt='$title'>
                        <div>
                            <h2><a href='#'>$title</a></h2>
                            <p class='date'>Published: $date</p>
                            <p>$shortText</p>
                            <a href='index.php?menu=news_details&id=$id' class='read-more'>Read more...</a>
                            <button onclick=window.location.href='index.php?menu=update_news&id=$id'>Edit</button>
                        </div>
                      </article>";
            }
        } else {
            echo "<p>No news articles found.</p>";
        }

        $conn->close();
        ?>
    </section>
    <h1>OLD NEWS</h1>
    <section class="articles">
        <article>
            <img src="images/news1-1.jpg" alt="Breaking News">
            <div>
                <h2><a href="news/news1.html">Lorem ipsum Dolor</a></h2>
                <p class="date">Published: 25.12.2024.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mi sem, porttitor eget nisi in, molestie faucibus quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                <a href="news/news1.html" class="read-more">Read more...</a>
            </div>
        </article>
        <article>
            <img src="images/news2-1.jpg" alt="Breaking News">
            <div>
                <h2><a href="news2.html">Nam consectetur, nisi vitae</a></h2>
                <p class="date">Published: 25.12.2024.</p>
                <p>Nam consectetur, nisi vitae finibus convallis, sapien felis egestas ipsum, eget semper ipsum nulla eu neque. Donec bibendum justo in eros commodo, in laoreet metus aliquam. Donec mi erat, interdum tempus ipsum efficitur, venenatis scelerisque sapien. Etiam imperdiet magna urna, ac auctor ante ultricies aliquam. Praesent porta, odio vel varius cursus, elit nisl pharetra ex, non facilisis nisi mauris laoreet mauris.</p>
                <a href="news2.html" class="read-more">Read more...</a>
            </div>
        </article>
        <article>
            <img src="images/news3-1.jpeg" alt="Breaking News">
            <div>
                <h2><a href="news3.html">Sed sapien nulla</a></h2>
                <p class="date">Published: 25.12.2024.</p>
                <p>Sed sapien nulla, tempor id convallis a, tincidunt eget neque. Nam eget mauris id enim porta elementum. Nullam gravida, magna eu consectetur mattis, erat erat suscipit nisl, feugiat aliquet magna odio vitae risus. Fusce eget sagittis neque. Sed magna orci, finibus quis orci vel, imperdiet suscipit sapien. </p>
                <a href="news3.html" class="read-more">Read more...</a>
            </div>
        </article>
        <article>
            <img src="images/news4-1.jpeg" alt="Breaking News">
            <div>
                <h2><a href="news4.html">Duis sit amet urna</a></h2>
                <p class="date">Published: 25.12.2024.</p>
                <p>Duis sit amet urna a risus blandit aliquet. Fusce rhoncus vestibulum felis, quis tincidunt felis molestie non. Maecenas ut venenatis est, et volutpat nisi. Nulla facilisi. Aenean ac eros faucibus, feugiat quam id, tempus lorem. Nulla sit amet tortor interdum, consectetur tortor et, viverra orci. Sed efficitur elit massa.</p>
                <a href="news4.html" class="read-more">Read more...</a>
            </div>
        </article>
        <article>
            <img src="images/news5-1.jpeg" alt="Breaking News">
            <div>
                <h2><a href="news5.html">Duis sit amet urna</a></h2>
                <p class="date">Published: 25.12.2024.</p>
                <p>Duis sit amet urna a risus blandit aliquet. Fusce rhoncus vestibulum felis, quis tincidunt felis molestie non. Maecenas ut venenatis est, et volutpat nisi. Nulla facilisi. Aenean ac eros faucibus, feugiat quam id, tempus lorem. Nulla sit amet tortor interdum, consectetur tortor et, viverra orci. Sed efficitur elit massa.</p>
                <a href="news5.html" class="read-more">Read more...</a>
            </div>
        </article>
    </section>
</main>
</body>
</html>
