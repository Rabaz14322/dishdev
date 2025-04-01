<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacatures</title>
    <link rel="stylesheet" href="css/style1.css">
    <script src="js/java.js" defer></script>
</head>
<body>

    <?php include 'header.php'; ?>
    
    <main class="vacatures-container">
        <h1>Vacatures</h1>
        
        <section class="vacature">
            <h2>Kok</h2>
            <p>Heb je ervaring als kok in een restaurant? Sluit je dan aan bij ons team! Neem contact met ons op via e-mail.</p>
        </section>

        <section class="vacature">
            <h2>Afwasser</h2>
            <p>Op zoek naar een goedbetaald bijbaantje met flexibele uren? Stuur ons een mail als je als afwasser wilt werken.</p>
        </section>

        <section class="vacature">
            <h2>Bediende</h2>
            <p>Wil je als bediende werken met flexibele werkuren en een goed salaris? Neem contact met ons op per e-mail.</p>
        </section>

        <h2 class="vacature-contact">Stuur ons een mail: <a href="mailto:saffraansahara@nep.com">saffraansahara@nep.com</a></h2>
        
        
        <section class="vacature-form">
            <h3>Solliciteer nu!</h3>
            <form action="sollicitatie_verwerken.php" method="POST">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefoon">Telefoonnummer:</label>
                <input type="tel" id="telefoon" name="telefoon" required>

                <label for="bericht">Korte introductie:</label>
                <textarea id="bericht" name="bericht" rows="4" required></textarea>

                <button type="submit">Verstuur sollicitatie</button>
            </form>
        </section>

        <div class="vacature-afbeelding">
            <img src="img/bediende.avif" alt="Een bediende aan het werk">
        </div>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
