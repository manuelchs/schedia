<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('partial_views/head_tag.php') ?>
    <script src="/assets/scripts/contacto.js"></script>
    <title>Schedia - Contact us</title>
</head>
<body>
    <?php include('partial_views/navbar.php') ?>
    <div class="page-hero contacto-hero">
        <div class="gmw">
            <h1>
                <span class="custom-animation custom-animation-bottom">Contact us</span>
                <span class="custom-animation custom-animation-top">Your workspace starts here</span>
            </h1>
            <a href="tel:+553333080076" class="main-button left-desktop-no-mobile icon icon-left custom-animation custom-animation-bottom"><i class="fas fa-phone"></i><span>Call us</span></a>
        </div>
    </div>

    <div class="main-wrapper contacto-wrapper">
        <div class="gmw">
            <div class="address-wrapper">
                <h2 class="custom-animation custom-animation-bottom">Get in touch</h2>
                <p class="text-box custom-animation custom-animation-top">Tell us more about your project. No matter what you have in mind, our job is to make your workspace idea a reality.</p>
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
                <h3 class="custom-animation custom-animation-bottom">Send us a message</h3>
                <form id="contact-form" action="sendemail.php" method="post">
                    <input name="nombre" type="text" class="main-input custom-animation custom-animation-bottom" placeholder="Name*">
                    <input name="email" type="text" class="main-input custom-animation custom-animation-top" placeholder="E-mail address*">
                    <input name="telefono" type="text" class="main-input custom-animation custom-animation-bottom" placeholder="Phone number*">
                    <div class="main-select custom-animation custom-animation-top">
                        <select name="asunto">
                            <option value="">Subject</option>
                            <option value="Cotizaciones">Request proposal</option>
                            <option value="Sugerencias">Schedule an appointment</option>
                            <option value="Comentarios">Other subject</option>
                        </select>
                        <div><i class="fas fa-caret-down"></i></div>
                    </div>
                    <textarea name="mensaje" class="main-input custom-animation custom-animation-bottom" placeholder="Write your message, comment or suggestion"></textarea>
                    <button id="contact-form-btn" type="submit" class="main-button black-button custom-animation custom-animation-top"><span>Send message</span></button>
                    <div class="terms custom-animation custom-animation-bottom">Once you click the “send message” button, you automatically agree and accept our <a href="/en/privacy-notice">privacy notice</a>. We assure you that all the information we receive from your behalf, will only be used for internal purposes and will not be shared with any third parties.</div>
                </form>
            </div>
        </div>
    </div>
    <?php include('partial_views/footer.php') ?>
</body>
</html>