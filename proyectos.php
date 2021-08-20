<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('partial_views/head_tag.php') ?>
    <script src="/assets/scripts/hammer.js"></script>
    <script src="/assets/scripts/aori.slider.js"></script>
    <title>Schedia - Proyectos</title>
</head>
<body>
    <?php include('partial_views/navbar.php') ?>
    <div class="page-hero proyectos-hero">
        <div class="gmw">
            <h1>
                <span class="custom-animation custom-animation-bottom">Proyectos</span>
                <span class="custom-animation custom-animation-top">El arte de crear espacios corporativos.</span>
            </h1>
        </div>
    </div>

    <div class="floating-wrapper">
        <div class="gmw">
            <?php include('partial_views/proyectos/avnet.php') ?>
            <?php include('partial_views/proyectos/betterware.php') ?>
            <?php include('partial_views/proyectos/cc.php') ?>
            <?php include('partial_views/proyectos/cbre.php') ?>
            <?php include('partial_views/proyectos/colliers.php') ?>
            <?php include('partial_views/proyectos/f5.php') ?>
            <?php include('partial_views/proyectos/luxoft.php') ?>
            <?php include('partial_views/proyectos/technicolor.php') ?>
            <?php include('partial_views/proyectos/mt-motors.php') ?>
            <?php include('partial_views/proyectos/greystar.php') ?>
        </div>
    </div>

    <div class="main-wrapper call-proyecto">
        <div class="gmw">
            <a href="/contacto" class="main-button black-button custom-animation custom-animation-bottom"><span>Contactar</span></a>
        </div>
    </div>

    <?php include('partial_views/footer.php') ?>
</body>
</html>