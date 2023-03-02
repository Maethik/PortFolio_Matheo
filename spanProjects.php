<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/spanProjects.css">
    <title>spanProjects</title>
</head>

<body>
    <?php include('variable.php') ?>

    <div class="projectsSpace-bigContainer">
        <div class="projectsSpace">
            <div class="divs-container">
                <!-- Project 1 -->
                <a href="astroPi.php" id="span1" class="spanProjects">
                    <div class="titleSpace">
                        <div class="title">
                            <h2><?php echo "Le concours <br />", $astroPiName ?></h2>
                        </div>
                    </div>
                </a>

                <!-- Project 2 -->
                <a href="myPortfolio.php" id="span2" class="spanProjects">
                    <div class="titleSpace">
                        <div class="title">
                            <h2><?php echo $monPortfolio ?></h2>
                        </div>
                    </div>
                </a>

                <!-- Project 3 -->
                <a href="projetIT.php" id="span3" class="spanProjects">
                    <div class="titleSpace">
                        <div class="title">
                            <h2><?php echo $projetIT, " 2022" ?></h2>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>

</body>

</html>