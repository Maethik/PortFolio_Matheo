<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/homePage.css">
    <link rel="stylesheet" href="css/swiper.css">
    <title>Slide Astro Pi</title>
</head>

<body>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <!-- SLIDE 1 -->
            <div class="swiper-slide silde1">
                <div id="slideOne" class="slide-img">
                    <!-- BGIMG -->
                </div>
                <div class="slide-title">
                    <h2>#AstroPi</h2>
                </div>
                <div class="slide-desc">
                    <p>Le projet consistait à prendre des photos de la terre à partir de l'ISS pour ensuite y détecter les fumées d'incendie ...</p>
                </div>
                <div class="slide-readmore-btn">
                    <button><a href="astroPi.php">Lire plus</a></button>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class="swiper-slide silde2">
                <div id="slideTwo" class="slide-img">
                    <!-- BGIMG -->
                </div>
                <div class="slide-title">
                    <h2>#MonPortfolio</h2>
                </div>
                <div class="slide-desc">
                    <p>Ce site m'a permis de me faire de l'expérience avec les langages du web ...</p>
                </div>
                <div class="slide-readmore-btn">
                    <button><a href="myPortfolio.php">Lire plus</a></button>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div class="swiper-slide silde3">
                <div class="slide-img">
                    <!-- BGIMG -->
                </div>
                <div class="slide-title">
                    <!-- TITLE -->
                </div>
                <div class="slide-desc">
                    <!-- SHORT DESC -->
                </div>
                <div class="slide-readmore-btn">
                    <!-- READ MORE BTN -->
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>

</html>