<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/backBtn.css">
    <title>Projet de fin d'année 2022</title>
</head>

<body>

    <div class="containerBody">

        <?php include('variable.php') ?>
        <div class="header-container container-container">
            <header class="container-container">
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
                        <h1><?php echo $projetIT ?></h1>
                    </div>
                    <div class="space"></div>
                    <div class="logo">
                        <p class="projetITLogo">1ère</p>
                        <p class="projetITLogo">STI</p>
                    </div>
                </div>
            </header>

            <div id="sltc3" class="spaceLabTitle-container">
                <h1>PROJET IT 2022</h1>
            </div>
        </div>

        <!-- Le projet -->
        <div class="desc-container black container-container">
            <div id="imgProjetIT1" class="imgRight"></div>

            <div class="descText">
                <h2>Le projet</h2>
                <p class="black">Le projet portait sur la sécurité routière. Nous devions trouver un moyen de communiquer avec le véhicule derrière le nôtre. Nous avons opté pour un message visuel qui affiche un rond vert lorsque le véhicule suiveur est à bonne distance du nôtre et un rouge lorsque qu'il est trop près. Tout cela en fonction de la vitesse bien entendu.<br />Nous devions également créer une application mobile pour en alerter l'utilisateur.</p>
            </div>
        </div>

        <!-- Mes tâches -->
        <div class="desc-container white container-container">
            <div id="imgProjetIT2" class="imgRight"></div>

            <div class="descText">
                <h2>Mes tâches</h2>
                <p class="white">Je devais faire l'application et transférer des informations récoltées par un capteur ultrason depuis la carte Adafruit vers le téléphone, le tout via un module bluetooth HC-05. Nous avons coder en Micro-Python. Pour ce qui est de l'application mobile je me suis servi de <a class="white" href="https://appinventor.mit.edu/" target="_blank">MIT AppInventor</a>.</p>
            </div>
        </div>

        <footer class="container-container">
            <?php include('footer.php') ?>
        </footer>
    </div>
    <script src="js/backBtn.js"></script>
</body>

</html>