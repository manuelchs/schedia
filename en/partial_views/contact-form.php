<!-- EN EL ELEMENTO .input-wrapper SE DEBE
ESCRIBIR PRIMERO EL input Y DESPUÉS EL label,
EN LA MAQUETA SE MOSTRARÁ PRIMERO EL label Y DESPUÉS EL input -->

<!-- SOLO AGREGA LA CLASE input-error AL INPUT QUE ESTÁ INCORRECTO Y CSS HARÁ EL RESTO  -->

<!-- <form id="contact-form" action="sendemail.php" method="post">
    <div class="input-wrapper custom-animation custom-animation-bottom">
        <input type="text" placeholder="Nombre completo" name="nombre">
        <label for="">
            <span>Nombre *</span>
            <span>Verifica este campo</span>
        </label>
    </div>
    <div class="input-wrapper custom-animation custom-animation-bottom">
        <input type="email" placeholder="Introduce tu correo electrónico" name="email">
        <label for="">
            <span>Email *</span>
            <span>Verifica este campo</span>
        </label>
    </div>

    <div class="input-wrapper custom-animation custom-animation-bottom">
        <input type="text" placeholder="Número telefónico con clave LADA" name="telefono">
        <label for="">
            <span>Teléfono</span>
            <span>Verifica este campo</span>
        </label>
    </div>

    <div class="input-wrapper custom-animation custom-animation-bottom">
        <input type="text" placeholder="El nombre de su empresa" name="nombre-empresa">
        <label for="">
            <span>Nombre de la empresa</span>
            <span>Verifica este campo</span>
        </label>
    </div>

    <div class="input-wrapper custom-animation custom-animation-bottom">
        <div class="select-wrapper">
            <i class="fas fa-caret-down"></i>
            <select name="asunto" id="contacto-asunto-dropdown">
                <option value="">Selecciona un asunto</option>
                <option data-option-id="1" value="Solicitar una cotización">Solicitar una cotización</option>
                <option data-option-id="2" value="Ofrecer un producto/servicio">Ofrecer un producto/servicio</option>
                <option data-option-id="3" value="Solicitud de empleo">Solicitud de empleo</option>
                <option data-option-id="4" value="Otro asunto">Otro asunto</option>
            </select>
        </div>
        <label for="">
            <span>Asunto *</span>
            <span>Verifica este campo</span>
        </label>
    </div>

    <!-- <div class="input-wrapper custom-animation custom-animation-bottom">
        <input type="text" placeholder="Escribe la industria" name="">
        <label for="">
            <span>Industria a la que perteneces</span>
            <span>Verifica este campo</span>
        </label>
    </div> -->

    <div class="input-wrapper only-cotizacion hidden">
        <div class="select-wrapper">
            <i class="fas fa-caret-down"></i>
            <select name="industria" id="">
                <option value="">Selecciona una industria</option>
                <option value="Oleaginosas">Oleaginosas</option>
                <option value="Jugos">Jugos</option>
                <option value="Endulzantes">Endulzantes</option>
                <option value="Destilados">Destilados</option>
                <option value="Lácteos">Lácteos</option>
                <option value="Cosméticos">Cosméticos</option>
            </select>
        </div>
        <label for="">
            <span>Industria a la que perteneces</span>
            <span>Verifica este campo</span>
        </label>
    </div>

    <div class="input-wrapper only-cotizacion hidden">
        <input type="text" placeholder="¿Cuáles son los puntos de recolección de la carga?" name="punto-carga">
        <label for="">
            <span>Punto(s) de carga del producto</span>
            <span>Verifica este campo</span>
        </label>
    </div>

    <div class="input-wrapper custom-animation custom-animation-bottom">
        <textarea placeholder="Ingresa los detalles de tu mensaje" name="mensaje"></textarea>
        <label for="">
            <span>Mensaje *</span>
            <span>Verifica este campo</span>
        </label>
    </div>

    <p id="errorMessage" class="error d-none">Completa todos los campos</p>
    <button id="contact-form-btn" class="main-button mt-1-half"><span>Enviar</span></button>
    <p class="terms mt-3">Al dar clic en "Enviar" aceptas nuestro <a href="">Aviso de privacidad</a> y reconoce que sus datos se mantendrán confidenciales.</p>
</form> -->