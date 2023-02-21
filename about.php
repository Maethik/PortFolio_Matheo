<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/backBtn.css">
    <title>About me !</title>
</head>

<body>
    <button onclick="rtn()" class="backBtn-container">
        <div class="backArrow">
            <img src="img/backArrow.png" alt="back arrow">
        </div>

        <div class="backTxt">
            <p>BACK</p>
        </div>
    </button>

    <div class="header">
        <div class="divImgProfil">
            <img class="imgProfil" src="img/photoProfil.jpg" alt="photo de Mathéo">
        </div>
        <h1>Un lycéen passionné <span>d'informatique</span></h1>
    </div>

    <div class="contentPage-container">
        <!-- borderBottomImage -->
        <div class="borderBottomImg"></div>
        <!-- about - schoolPart -->
        <div class="mySchoolParcours-container part-container whiteBgc">
            <div class="leftColumn">
                <img src="img/timeMachine.svg" alt="time machine image">
            </div>

            <div class="rightColumn">
                <h2 class="black">PRE BAC</h2>
                <h3 class="black">De Coron à Chemillé</h3>
                <p class="black">J'ai d'abord fait une maternelle puis une primaire à l'école Saint Louis à Coron, ma commune de résidence. Je suis ensuite allé au collège Notre Dame à La Salle de Vihiers.<br />J'ai fait une seconde générale à Renaudeau pour intégrer une filière STI2D SIN au lycée de L'Hyrôme, à Chemillé.</p>
            </div>
        </div>

        <!-- borderBottomImage -->
        <div class="borderTopImg"></div>
        <!-- about - postBac -->
        <div class="postBac-container part-container blackBgc">
            <div class="leftColumn">
                <img src="img/computingIllustration.svg" alt="illustration d'informatique">
            </div>

            <div class="rightColumn">
                <h2 class="white">POST BAC</h2>
                <h3 class="white">Informatique un jours,<br />Informatique toujours !</h3>
                <p class="white">Après le BAC, je voudrais faire un BUT Informatique en trois ans, et, pourquoi pas, poursuivre dans une école d'ingénieur. Toujours dans l'informatique bien entendu !</p>
            </div>
        </div>

        <!-- borderBottomImage -->
        <div class="borderBottomImg"></div>
        <!-- about - skills -->
        <div class="skillsProgramming-container part-container whiteBgc">
            <div class="leftColumn">
                <img src="img/codeIllustration.svg" alt="illustration de code">
            </div>

            <div class="rightColumn">
                <h2 class="black">SKILLS</h2>
                <h3 class="black">HTML, CSS, JS, Python,<br />C and more ...</h3>
                <p class="black">J'ai commencé par apprendre le HTML et le CSS lors d'un stage en 4ème année de collège. Puis j'ai étendu mes connaissances avec le Python. Dans le cadre du lycée j'ai aussi coder en C et en JS, je n'ai pas résisté à ma curiosité bien longtemps et j'ai approfondi ces toutes nouvelles notions toutes autant appétissantes les unes que les autres en autodidacte.</p>
            </div>
        </div>
        
        <!-- FOOTER -->
        <?php include('footer.php') ?>
    </div>
    
    
    <script src="js/backBtn.js"></script>

</body>

</html>