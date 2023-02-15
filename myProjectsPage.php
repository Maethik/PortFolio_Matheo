<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/myProjectsPage.css">
    <title>Mes projets</title>
</head>

<body>
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

    <footer>
        <?php include('footer.php') ?>
    </footer>
</body>

</html>