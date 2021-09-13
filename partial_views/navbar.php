<?php
$altNav = $_SERVER['REQUEST_URI'] === '/terminos-y-condiciones' || $_SERVER['REQUEST_URI'] === '/aviso-de-privacidad';
?>
<div class="nav-wrapper <?php if ($altNav) { echo 'alt-nav'; } ?>" id="mainNav">
    <nav>
        <div class="gmw">
            <a class="logo" href="/">
                <img src="/assets/images/logo.png" alt="Logo de Schedia">
            </a>
            <button class="burger-icon only-mobile mobile-menu-trigger">
                <i class="far fa-bars"></i>
            </button>
            <div id="sub-navbar" class="sub-wrapper">
                <div class="logo-mobile only-mobile">
                    <img src="/assets/images/logo-schedia-blanco.png" alt="">
                    <button class="close-menu mobile-menu-trigger"><i class="fal fa-times"></i></button>
                </div>
                <ul class="links">
                    <li>
                        <a href="/">Inicio</a>
                    </li>
                    <li>
                        <a href="/nosotros">Nosotros</a>
                    </li>
                    <li>
                        <a href="/proyectos">Proyectos</a>
                    </li>
                    <li>
                        <a href="/contacto">Contacto</a>
                    </li>
                </ul>
    
                <div class="icons">
                    <a href="https://www.facebook.com/schediaarquitectura/" target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/schedia_arquitectura/" target="_blank" class="social"><i class="fab fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=523333080076" target="_blank" class="social"><i class="fab fa-whatsapp"></i></a>
                    <a href="tel:+553333080076" class="social"><i class="far fa-phone"></i></a>
                    <button id="languageSubmenu" class="select-language">
                        <i class="far fa-globe"></i>
                        <span>ES</span>
                        <i class="fas fa-caret-down"></i>
                        <div id="languageOptions" class="options">
                            <a>Español <i class="far fa-check"></i></a>
                            <a href="/en">English</a>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</div>

<div id="alert">
    <button onclick="closeAlert();"><i class="far fa-times" aria-hidden="true"></i></button>
    <h2 id="titleAlert"></h2>
    <p id="messageAlert"></p>
</div>

<!-- Messenger plugin de chat Code -->
<div id="fb-root"></div>

<!-- Your plugin de chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "494769094038892");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v11.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>