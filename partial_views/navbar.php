<?php
$altNav = $_SERVER['REQUEST_URI'] === '/terminos-y-condiciones' || $_SERVER['REQUEST_URI'] === '/aviso-de-privacidad';
?>
<div class="nav-wrapper <?php if ($altNav) { echo 'alt-nav'; } ?>" id="mainNav">
    <nav>
        <div class="gmw">
            <a class="logo" href="/">
                <img src="/assets/images/logo.png" alt="Logo de Schedia">
            </a>
            <ul class="links">
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Nostros</a>
                </li>
                <li>
                    <a href="">Proyecto</a>
                </li>
                <li>
                    <a href="">Contacto</a>
                </li>
            </ul>

            <div class="icons">
                <a class="social"><i class="fab fa-facebook-f"></i></a>
                <a class="social"><i class="fab fa-instagram"></i></a>
                <a class="social"><i class="fab fa-whatsapp"></i></a>
                <a class="social"><i class="far fa-phone"></i></a>
                <button class="select-language">
                    <i class="far fa-globe"></i>
                    <span>ES</span>
                    <i class="fas fa-caret-down"></i>
                    <div class="options">
                        <a>Español <i class="far fa-check"></i></a>
                        <a>Inglés</a>
                    </div>
                </button>
            </div>

        </div>
    </nav>
</div>