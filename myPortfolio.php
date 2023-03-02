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
        <button onclick="rtn()"  class="backBtn-container">
                <div class="backArrow">
                    <img src="img/backArrow.png" alt="back arrow">
                </div>

                <div class="backTxt">
                    <p>BACK</p>
                </div>
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

    <!-- Pourquoi ? -->
    <div class="desc-container black">
        <div id="imgPortfolio1" class="imgRight"></div>

        <div class="descText">
            <h2>Pourquoi ?</h2>
            <p class="black">Il y à quelque temps, je me suis lancé dans ce projet dans l'objectif de le mettre en lien dans mes projets motivés sur Parcoursup. En effet je me suis dit que cela pourrait être un plus dans la prise en compte de mon dossier et que cela permettrait aux IUT d'avoir un aperçu de ce que je fais déjà. Ce site me permet aussi de me faire de l'expérience avec les langages du web et ensuite proposer des sites web sur Fiverr (<a class="black" href="https://fr.fiverr.com/maethik" target="_blank">lien vers Fiverr</a>). Enfin acquérir plus de visibilité sur internet quoi !</p>
        </div>
    </div>

    <!-- Comment ? -->
    <div class="desc-container white">
        <div id="imgPortfolio2" class="imgRight"></div>

        <div class="descText">
            <h2>Comment ?</h2>
            <p class="white">En développant ce site j'ai pu perfectionner ma maîtrise des langages HTML et CSS. J'ai utilisé un petit peu de JavaScript pour deux trois animations sur le site. Je me suis également servi d'un tout tout petit peu de PHP ... juste les bases.</p>
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