<!DOCTYPE html>
<html lang="nl" id="reservation-page">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservering</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/java.js" defer></script>
</head>

<body> 

<?php
    include 'header.php';
?>

<section class="reservation-page">

    <article class="reservation-form">
        <h2>Reservering</h2>
        <form action="" method="POST">
            <input type="text" placeholder="Naam" required>
            <input type="text" placeholder="Telefoon" required>
            <input type="email" placeholder="E-mail" required>
            <input type="date" required>
            <input type="number" placeholder="Aantal Personen" required>
            <input type="time" required>
            <textarea placeholder="Uw bericht"></textarea>
            <button type="submit">Verzenden</button>
        </form>
    </article>

    <article class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.8221697480394!2d4.483553387814222!3d52.0647615
        975081!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5c8d7f3301db1%3A0xf19c9a2b2183d89b!2sHildebrandhove%
        20161%2C%202726%20AV%20Zoetermeer!5e0!3m2!1snl!2snl!4v1742978102753!5m2!1snl!2snl" width="400" height="450"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <p><strong>Adres:</strong> Hildebrandhove 161, 2726 AV Zoetermeer</p>
    </article>

</section>

<?php
    include 'footer.php';
?>

</body>
</html>
