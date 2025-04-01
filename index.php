<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saffraan & Sahara</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/java.js" defer></script>
</head>
<?php
    include 'header.php';
?>

<main>
    <article>
        <section class="Video">
            <video width="100%" height="200px" autoplay muted loop>
                <source src="https://vid.cdn-website.com/48ff00b0/videos/Ib3dVEORMCQYwYPvpGNr_production+ID_5065326-v.mp4" type="video/mp4">
            </video>
        </section>
        <section class="text1">
            <h1>Welkom bij Restaurant Saffraan & Sahara</h1>
            <p>Welkom in de wereld van verfijnde smaken en gastvrijheid. Bij Saffraan & Sahara nemen we je
                 mee op een culinaire reis door het Midden-Oosten en de Middellandse Zee. Onze gerechten 
                 worden met zorg bereid met de beste en meest verse ingrediënten.</p>
            <p>Of je nu komt voor een romantisch diner, een gezellige lunch met vrienden of een speciale 
                gelegenheid, bij ons ben je altijd welkom. Geniet van authentieke specerijen, heerlijke geuren en 
                een warme sfeer die je meteen een thuisgevoel geeft.</p>
            <p>Laat je verrassen door onze gevarieerde menukaart, vol met zowel traditionele als moderne gerechten. 
                Van geurige tajines en versgebakken flatbreads tot smaakvolle mezze en verfijnde desserts – we hebben voor ieder wat wils.</p>
        </section>

        <section class="img1">
            <img src="img/victoria-shes-UC0HZdUitWY-unsplash.jpg" alt="food_img">
        </section>

        <section class="text2enimg">
        <p>Laat je verrassen door onze gevarieerde menukaart, <br> vol traditionele gerechten  
                Van geurige tajines en versgebakken flatbreads tot
                heerlijke mezze, knapperige falafel en gegrilde vleesgerechten. <br> 
                Geniet van de rijke smaken van het Midden-Oosten en de verfijnde gerechten uit de Middellandse Zee. <br> 
                Proef onze aromatische kruiden, vers gemaakte hummus en frisse salades. <br> 
                Van zachte lamsvlees gerechten tot pittige kebabs en geurige couscous, alles is met liefde bereid. <br>
                Laat je verwennen door onze verfijnde voorgerechten en verrukkelijke desserts, zoals de zoete baklava en romige panna cotta. <br>
                Ervaar de veelzijdigheid van onze gerechten, van lichte mezze tot stevige maaltijden. <br>
                Laat je zintuigen prikkelen met elke hap en ontdek de magie van onze authentieke keuken. <br>
                Of je nu komt voor een lichte lunch of een uitgebreid diner, bij ons ben je altijd verzekerd van een smaakvolle ervaring. <br>
</p>

            <img src="img/faisal-BS4Zeq7xDRk-unsplash(1).jpg" alt="food-img">
        </section>

        <section class="text3enimg2">
            <img src="img/casey-lee-awj7sRviVXo-unsplash.jpg" alt="food-img">
            <p> vol traditionele gerechten  
                Van geurige tajines en versgebakken flatbreads tot
                de smaakvolle **moussaka**,<br> een ovenschotel met lagen aubergines,<br> gehakt en een romige bechamelsaus. <br> 
                Geniet van de rijke smaken van het gekruide vlees en de zachte aubergine, die perfect gecombineerd worden in dit heerlijke gerecht. <br> 
                Laat je verwennen door de romige textuur van de bechamel en de rijke, hartige smaak van de kruiden. <br> 
                De moussaka is een perfecte balans tussen sappig vlees, zachte groenten en een gouden, knapperige bovenlaag. <br> 
                Het gerecht wordt langzaam gebakken voor een diepe, onvergetelijke smaak. <br> 
                Dit is een echte klassieker die je moet proeven voor een authentieke ervaring uit de Mediterrane keuken. <br>
</p>

        </section>
        <section class="ourgillary">
            <img src="img/ourgillary.png" alt="">
        </section>
        <section class="gillary">
            <img src="img/emiliano-vittoriosi-OFismyezPnY-unsplash.jpg" alt="food">
            <img src="img/dana-devolk--Cb-dhW7tqg-unsplash.jpg" alt="food">
            <img src="img/chad-montano--GFCYhoRe48-unsplash.jpg" alt="food">
            <img src="img/ahmed-nadar-BXT--puFdfo-unsplash.jpg" alt="food">
        </section>

        <section class="safraan"> 
            <h1>Saffraan & Sahara</h1> 
            <h2>DEN HAAG</h2>
        </section>

        <section class="menu">
            <article class="card dinner" onclick="goToPage('lunchendiner.php')">
                <img src="img/dinner.png" alt="Dinner">
                <span>Dinner</span>
            </article>

            <article class="card lunch" onclick="goToPage('lunchendiner.php')">
                <img src="img/lunch.png" alt="Lunch">
                <span>Lunch</span>
            </article>
        </section>
    </main>

<?php
    include 'footer.php';
?>
</body>
</html>
