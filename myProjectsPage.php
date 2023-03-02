<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/myProjectsPage.css">
    <link rel="stylesheet" href="css/backBtn.css">
    <title>Mes projets</title>
</head>

<body>
    <header>
        <button onclick="rtn()" class="backBtn-container">
                <div class="backArrow">
                    <img src="img/backArrow.png" alt="back arrow">
                </div>

                <div class="backTxt">
                    <p>BACK</p>
                </div>
        </button>

        <div class="titleHeader-container">
            <div class="title">
                <h1>ici, découvrez tout mes projets ...</h1>
            </div>
            <div class="downArrow">
                <img src="img/downArrowIcon.png" alt="down arrow">
            </div>
        </div>
    </header>

    <?php include('spanProjects.php') ?>

    <div class="gradient"></div>

    <footer>
        <?php include('footer.php') ?>
    </footer>

    <script src="js/backBtn.js"></script>

</body>

</html>