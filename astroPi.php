<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/backBtn.css">
    <title>Astro Pi</title>
</head>

<body>
    <?php include('variable.php') ?>
    <header>
        <button onclick="rtn()" class="backBtn-container">
                <div class="backArrow">
                    <img src="img/backArrow.png" alt="back arrow">
                </div>

                <div class="backTxt">
                    <p>BACK</p>
                </div>
        </button>
        <div class="projectName-container">
            <div class="name">
                <h1><?php echo 'Le concours ', $astroPiName ?></h1>
            </div>
            <div class="space"></div>
            <div class="logo">
                <img src="img/astroPiLogo.svg" alt="logo">
            </div>
        </div>
    </header>

    <div id="sltc1" class="spaceLabTitle-container">
        <h1>MISSION SPACE LAB</h1>
    </div>

    <!-- C'est quoi ? -->
    <div class="desc-container black">
        <div id="imgAstroPi1" class="imgRight"></div>

        <div class="descText">
            <h2>Astro Pi ? C'est quoi ?</h2>
            <p class="black">Le concours Astro Pi est organisé par l'ESA, pour les écoles européennes. Il se décompose en 4 phases : la soumission du projet, la réalisation du projet, la vérification du programme et son exécution sur l'ISS, puis la phase de compte rendu en anglais. Chaque phase est éliminatoire. Le meilleur compte rendu gagne le concours.</p>

            <button><a href="https://astro-pi.org/mission-space-lab/" target="_blank">En savoir plus</a></button>
        </div>
    </div>

    <!-- Notre projet -->
    <div class="desc-container white">
        <div id="imgAstroPi2" class="imgRight"></div>

        <div class="descText">
            <h2>Notre projet</h2>
            <p class="white">Pour réaliser le projet, nous étions par groupe de 5. Le notre consistait à prendre des photos de la terre à partir de l'ISS pour ensuite y détecter les fumées d'incendie. Le but était de créer un moyen de détecter les feux plus efficacement.</p>
        </div>
    </div>

    <!-- Mes tâches -->
    <div class="desc-container black">
        <div id="imgAstroPi3" class="imgRight"></div>

        <div class="descText">
            <h2>Mes tâches</h2>
            <p class="black">Pour ce projet j'étais chargé de faire le traitement d'image. Pour cela j'ai opté pour la méthode KNN (Cas Plus Proche Voisin en français). Mais les images étaient trop grandes en termes de pixels et donc le traitement d'une seule image mettait trop longtemps ... J'ai alors dû faire un code qui découpe les images en d'autres plus petites.</p>
        </div>
    </div>

    <footer>
        <?php include('footer.php') ?>
    </footer>

    <script src="js/backBtn.js"></script>

</body>

</html>

<!-- <a href="https://www.flaticon.com/free-icons/arrows" title="arrows icons">Arrows icons created by Pixel perfect - Flaticon</a> -->
<!--Image par <a href="https://pixabay.com/fr/users/prusakov-1149804/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=834635">Sergey Prusakov</a> de <a href="https://pixabay.com/fr//?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=834635">Pixabay</a>-->