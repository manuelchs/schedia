<?php
    $hideInsta = $_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index' || $_SERVER['REQUEST_URI'] === '/index.php';
?>
<div <?php if( $hideInsta ) { echo 'style="display: none;"'; }  ?> class="instagram main-wrapper">
    <img src="/assets/images/logo-instagram.png" alt="">
    <!-- SnapWidget -->
    <script src="https://snapwidget.com/js/snapwidget.js"></script>
    <div class="gmw">
        <iframe src="https://snapwidget.com/embed/961268" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
    </div>
    <a href="https://www.instagram.com/schedia_arquitectura/" target="_blank" class="main-button black-button"><span>See more on Instagram</span></a>
</div>
<footer id="footer">
    <div class="links-section">
        <div class="gmw">
            <a class="logo-footer custom-animation custom-animation-top" href="/en">
                <img src="/assets/images/logo-schedia-azul.png" alt="">
            </a>
            <div class="social-mobile only-mobile">
                <a href="https://www.facebook.com/schediaarquitectura/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/schedia_arquitectura/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=523333080076" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a href="tel:+553333080076"><i class="far fa-phone"></i></a>
            </div>
            <div class="links-list">
                <h5 class="custom-animation custom-animation-bottom">Contact us<i class="far fa-plus only-mobile"></i></h5>
                <div class="links custom-animation custom-animation-top">
                    <a href="tel:+553333080076">
                        <i class="fas fa-phone"></i>
                        <span>(33) 3308 0076</span>
                    </a>
                    <a href="https://goo.gl/maps/S5GQT99cGXXP5eM98" target="_blank">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Guadalajara - Calle Buenos Aires 2570 int 5, Col. Providencia.</span>
                    </a>
                    <a href="https://goo.gl/maps/vxFk5MLmtfsDLTS3A" target="_blank">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Monterrey – Calle Jose Benítez 2211 piso 1 Local 13 Col. Chepevera</span>
                    </a>
                </div>
            </div>
            <div class="links-list">
                <h5 class="custom-animation custom-animation-bottom">Site map<i class="far fa-plus only-mobile"></i></h5>
                <div class="links custom-animation custom-animation-top">
                    <a href="/en"><span>Home</span></a>
                    <a href="/en/about"><span>About us</span></a>
                    <a href="/en/portfolio"><span>Portfolio</span></a>
                    <a href="/en/contact"><span>Contact us</span></a>
                    <a href="/en/privacy-notice"><span>Privacy notice</span></a>
                </div>
            </div>
            <div class="links-list only-desktop">
                <h5 class="custom-animation custom-animation-bottom">Social media</h5>
                <div class="links custom-animation custom-animation-top">
                    <a href="https://www.facebook.com/schediaarquitectura/" target="_blank">
                        <div class="icon-wrapper">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.instagram.com/schedia_arquitectura/" target="_blank">
                        <div class="icon-wrapper">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <span>Instagram</span>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=523333080076" href="_blank">
                        <div class="icon-wrapper">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <span>Whatsapp</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="rights-section">
        <div class="gmw">
            <img src="/assets/images/ssl-icon.png" alt="">
            <span class="rights">Schedia 2021&reg; All rights reserved.</span>
            <span class="aori">Website developed by <a href="https://aori.mx/" target="_blank">aori.mx</a></span>
        </div>
    </div>
</footer>