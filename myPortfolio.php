<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/projects.css">
    <title>Astro Pi</title>
</head>

<body>
    <?php include('variable.php') ?>
    <header>
        <button class="backBtn-container">
            <a href="homePage.php">
                <div class="backArrow">
                    <img src="img/backArrow.png" alt="back arrow">
                </div>

                <div class="backTxt">
                    <p>BACK</p>
                </div>
            </a>
        </button>
        <div class="projectName-container">
            <div class="name">
                <h1><?php echo $monPortfolio ?></h1>
            </div>
            <div class="space"></div>
            <div class="logo">
                <p class="htmlLogo">&lt;/html&gt;</p>
                <p class="cssLogo">#css</p>
            </div>
        </div>
    </header>

    <div id="sltc2" class="spaceLabTitle-container">
        <h1>MON SITE WEB !</h1>
    </div>

    <div class="desc-container">
        <div class="imgRight">
            <img src="img/imgPortfolioMouvementUn.jpg" alt="code html">
        </div>

        <div class="descText">
            <h2>Dans quel but ?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse id malesuada nunc. Donec at ante convallis, ultrices sem ut, auctor lorem.</p>
        </div>
    </div>

    <footer>
        <?php include('footer.php') ?>
    </footer>
</body>

</html>

<!-- <a href="https://www.flaticon.com/free-icons/arrows" title="arrows icons">Arrows icons created by Pixel perfect - Flaticon</a> -->
<!--Image par <a href="https://pixabay.com/fr/users/prusakov-1149804/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=834635">Sergey Prusakov</a> de <a href="https://pixabay.com/fr//?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=834635">Pixabay</a>-->