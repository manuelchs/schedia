<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('partial_views/head_tag.php') ?>
    <script src="/assets/scripts/contacto.js"></script>
    <title>Schedia - Contacto</title>
</head>
<body>
    <?php include('partial_views/navbar.php') ?>
    <div class="page-hero contacto-hero">
        <div class="gmw">
            <h1>
                <span class="custom-animation custom-animation-bottom">Contacto</span>
                <span class="custom-animation custom-animation-top">Tu proyecto comienza aquí</span>
            </h1>
            <a href="tel:+553333080076" class="main-button left-desktop-no-mobile icon icon-left custom-animation custom-animation-bottom"><i class="fas fa-phone"></i><span>Llamar</span></a>
        </div>
    </div>

    <div class="main-wrapper contacto-wrapper">
        <div class="gmw">
            <div class="address-wrapper">
                <h2 class="custom-animation custom-animation-bottom">Contáctanos</h2>
                <p class="text-box custom-animation custom-animation-top">Cuéntanos cuál es el proyecto que te interesa. Cualquiera que sea tu sueño, nuestra pasión es ayudarte a descubrir el diseño exclusivo que lo hará realidad.</p>
                <a href="https://goo.gl/maps/S5GQT99cGXXP5eM98" target="_blank" class="address-item custom-animation custom-animation-left">
                    <i class="fal fa-map-marker-alt"></i>
                    <div class="data">
                        <h4>Guadalajara</h4>
                        <p>Calle Buenos Aires 2570 Int 5, Col. Providencia.</p>
                    </div>
                </a>
                <a href="https://goo.gl/maps/vxFk5MLmtfsDLTS3A" target="_blank" class="address-item custom-animation custom-animation-right">
                    <i class="fal fa-map-marker-alt"></i>
                    <div class="data">
                        <h4>Monterrey</h4>
                        <p>Calle Jose Benítez 2211 piso 1 Local 13 Col. Chepevera</p>
                    </div>
                </a>
            </div>
            <div class="form-wrapper">
                <h3 class="custom-animation custom-animation-bottom">Envíanos un mensaje</h3>
                <form id="contact-form" action="sendemail.php" method="post">
                    <input name="nombre" type="text" class="main-input custom-animation custom-animation-bottom" placeholder="Nombre*">
                    <input name="email" type="text" class="main-input custom-animation custom-animation-top" placeholder="E-mail*">
                    <input name="telefono" type="text" class="main-input custom-animation custom-animation-bottom" placeholder="Teléfono*">
                    <div class="main-select custom-animation custom-animation-top">
                        <select name="asunto">
                            <option value="">Elige un asunto</option>
                            <option value="Cotizaciones">Requiero una cotización</option>
                            <option value="Sugerencias">Deseo agendar una cita o video llamada</option>
                            <option value="Comentarios">Otro asunto</option>
                        </select>
                        <div><i class="fas fa-caret-down"></i></div>
                    </div>
                    <textarea name="mensaje" class="main-input custom-animation custom-animation-bottom" placeholder="Escríbenos un mensaje"></textarea>
                    <button id="contact-form-btn" type="submit" class="main-button black-button custom-animation custom-animation-top"><span>Enviar mensaje</span></button>
                    <div class="terms custom-animation custom-animation-bottom">Al dar clic en "Enviar mensaje" aceptas nuestro <a>Aviso de privacidad</a>. Te aseguramos que no compartiremos tus datos con nadie.</div>
                </form>
            </div>
        </div>
    </div>

    <?php include('partial_views/footer.php') ?>
</body>
</html>