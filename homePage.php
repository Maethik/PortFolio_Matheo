<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/homePage.css">
	<link rel="stylesheet" href="css/swiper.css">
	<title>Home Page</title>
</head>

<body>
	<div class="homePage-container">
		<div class="homePage-top">
			<nav>
				<a class="txtHover" href="#">A propos</a>
				<a class="txtHover" href="#">Mon CV</a>
				<a class="txtHover" href="#">Mes projets</a>
				<a class="txtHover" href="#">Me contacter</a>
			</nav>
			<div class="Home-container">
				<div class="nav-container">
					<button type="button" aria-label="toggle cutain navigation" class="nav-toggler">
						<span class="line l1"></span>
						<span class="line l2"></span>
						<span class="line l3"></span>
					</button>

					<div class="titleNav">
						<p>♠♥</p>
					</div>
				</div>
				<!-- Titre d'accroche -->
				<div class="textAcroche-container">
					<div class="textAcroche">
						<h1>Bonjour et bienvenue sur <em>mon portfolio</em> !</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="homePage-bottom">
			<div class="recentsProjects-container">
				<h1>Mes projets récents</h1>
				<?php include('swiperSlide.php') ?>
			</div>
		</div>

		<footer>
			<?php include("footer.php") ?>
		</footer>
	</div>

	<script src="js/homePage.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

	
</body>

</html>