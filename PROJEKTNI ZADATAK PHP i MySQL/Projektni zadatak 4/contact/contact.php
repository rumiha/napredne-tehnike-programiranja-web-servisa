<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ovo je projektni zadatak">
    <meta name="keywords" content="HTML5, css, projekt, zadatak">
    <meta name="author" content="Petar Rumiha">
    <link rel="stylesheet" href="contact/contact.css">
    <title>Projektni zadatak</title>
</head>
<body>
<main>
    <h1>Contact Form</h1>
    <section class="map">
        <h2>Location</h2>
        <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.501452948683!2d15.958558616072303!3d45.81501097910673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6b689f3d8f9%3A0xc1aee6c4b90c57f6!2sZagreb%2C%20Croatia!5e0!3m2!1sen!2shr!4v1699883915142!5m2!1sen!2shr"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </section>

    <section class="contact-form">
        <h2>Contact Form</h2>
        <form action="#" method="post">
            <div>
                <label for="first-name">First Name *</label>
                <input type="text" id="first-name" name="first-name" placeholder="Your first name..." required>
            </div>
            <div>
                <label for="last-name">Last Name *</label>
                <input type="text" id="last-name" name="last-name" placeholder="Your last name..." required>
            </div>
            <div>
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" placeholder="Your email address..." required>
            </div>
            <div>
                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="cro">Croatia</option>
                    <option value="srb">Serbia</option>
                    <option value="crn">Montenegro</option>
                    <option value="bih">Bosnia and Herzegovina</option>
                    <option value="kos">Kosovo</option>
                    <option value="mad">Hungary</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div>
                <label for="message">Description</label>
                <textarea id="message" name="message" placeholder="Your description..." rows="3"></textarea>
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </section>
</main>
</body>
</html>
