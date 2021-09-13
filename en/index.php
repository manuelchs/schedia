<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('partial_views/head_tag.php') ?>
    <script src="/assets/scripts/slideshow.js"></script>
    <title>Schedia - English</title>
</head>
<body>
    <?php include('partial_views/navbar.php') ?>
    <div class="main-hero">
        <div class="overlay"></div>
        <div class="slide-show">
            <div class="slide-show-item ss6"></div>
            <div class="slide-show-item ss5"></div>
            <div class="slide-show-item ss4"></div>
            <div class="slide-show-item ss3"></div>
            <div class="slide-show-item ss2"></div>
            <div class="slide-show-item ss1"></div>
        </div>
        <div class="content-hero">
            <div class="gmw">
                <h1 class="home-page-hero-title custom-animation custom-animation-left">Creating intelligent workspace solutions.</h1>
                <h2 class="small-title custom-animation custom-animation-bottom">The art behind the design.</h2>
                <a href="/proyectos" class="main-button left-desktop-no-mobile custom-animation custom-animation-top"><span>Go to portfolio</span></a>
                <button onclick="scrollToID('footer', false)"><i class="fal fa-chevron-double-down"></i></button>
            </div>
        </div>
    </div>
    <?php include('partial_views/footer.php') ?>
</body>
</html>