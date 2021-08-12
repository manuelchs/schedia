<div class="nav-wrapper
    <?php if ($_SERVER['REQUEST_URI'] === '/terminos-y-condiciones' || $_SERVER['REQUEST_URI'] === '/aviso-de-privacidad')
    {
        echo 'black-nav';
    }
    ?>" id="mainNav">
    <nav>
        <div class="gmw">
            <button id="barsMenu" class="bars-menu">
                <i class="far fa-times"></i>
                <i class="far fa-bars"></i>
            </button>
            <a class="logo" onclick="scrollToID('home')">
                <!-- <img src="/assets/images/logo-atg.svg" alt="Logo de ATG"> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="148.694" height="60.5" viewBox="0 0 148.694 60.5"><defs><style>.a{fill:#d90018;}.b,.c{fill:#fff;}.c{stroke:rgba(0,0,0,0);stroke-miterlimit:10;}</style></defs><g transform="translate(-744.28 939.86)"><path class="a" d="M905.015,530.892h1.14l2.781,6.89h-1.481l-.546-1.354h-2.62l-.535,1.354h-1.473Zm.57,2.257-.8,2.031H906.4Z" transform="translate(-158.001 -1417.237)"/><path class="a" d="M927.58,530.892h1.451v4.214a1.356,1.356,0,0,0,.323.945,1.088,1.088,0,0,0,.847.357,1.211,1.211,0,0,0,.936-.36,1.439,1.439,0,0,0,.333-1.015v-4.14h1.446v4.461a2.834,2.834,0,0,1-.3,1.22,2.1,2.1,0,0,1-.928.968,2.92,2.92,0,0,1-1.4.336,2.509,2.509,0,0,1-2.054-.79,2.579,2.579,0,0,1-.65-1.661Z" transform="translate(-176.569 -1417.237)"/><path class="a" d="M949.264,530.892h4.591v1.464H952.29v5.426h-1.471v-5.426h-1.555Z" transform="translate(-192.483 -1417.236)"/><path class="a" d="M966.991,534.131a3.4,3.4,0,0,1,1-2.521,3.252,3.252,0,0,1,2.373-.994,3.391,3.391,0,0,1,2.511,1,3.715,3.715,0,0,1,.01,5.045,3.322,3.322,0,0,1-2.475,1,3.27,3.27,0,0,1-2.457-1,3.5,3.5,0,0,1-.965-2.535m3.442-2.141a1.687,1.687,0,0,0-1.383.6,2.352,2.352,0,0,0-.525,1.585,2.207,2.207,0,0,0,.536,1.522,1.729,1.729,0,0,0,1.352.6,1.763,1.763,0,0,0,1.386-.6,2.283,2.283,0,0,0,.528-1.572,2.238,2.238,0,0,0-.517-1.543,1.8,1.8,0,0,0-1.375-.6" transform="translate(-205.494 -1417.034)"/><path class="a" d="M1002.344,530.892h4.591v1.464h-1.565v5.426H1003.9v-5.426h-1.555Z" transform="translate(-231.44 -1417.236)"/><path class="a" d="M1021.252,530.892h1.471v2.655h2.418v-2.655h1.471v6.89h-1.471v-2.739h-2.418v2.739h-1.471Z" transform="translate(-245.317 -1417.236)"/><path class="a" d="M1044.793,530.892h3.842v1.365h-2.371v1.391h2.371v1.343h-2.371v1.427h2.371v1.364h-3.842Z" transform="translate(-262.595 -1417.236)"/><path class="a" d="M1061.9,530.892h2.248a2.309,2.309,0,0,1,1.621.546,1.9,1.9,0,0,1,.6,1.474,2.545,2.545,0,0,1-.274,1.1,1.907,1.907,0,0,1-1.008.9l1.91,2.872h-1.691l-1.767-2.666h-.166v2.666H1061.9Zm1.482,1.228v1.795h.318q1.153,0,1.153-.95a.736.736,0,0,0-.3-.617,1.348,1.348,0,0,0-.832-.228Z" transform="translate(-275.153 -1417.237)"/><path class="a" d="M1082.822,530.892h1.748l1.279,4.13,1.28-4.13h1.685l.879,6.89h-1.4l-.6-4.849-1.5,4.849h-.668l-1.542-4.891-.568,4.891h-1.425Z" transform="translate(-289.89 -1417.236)"/><path class="a" d="M1112.186,534.131a3.4,3.4,0,0,1,1-2.521,3.254,3.254,0,0,1,2.374-.994,3.389,3.389,0,0,1,2.511,1,3.715,3.715,0,0,1,.011,5.045,3.323,3.323,0,0,1-2.475,1,3.271,3.271,0,0,1-2.457-1,3.5,3.5,0,0,1-.965-2.535m3.442-2.141a1.686,1.686,0,0,0-1.383.6,2.351,2.351,0,0,0-.525,1.585,2.208,2.208,0,0,0,.536,1.522,1.73,1.73,0,0,0,1.352.6,1.762,1.762,0,0,0,1.385-.6,2.282,2.282,0,0,0,.528-1.572,2.238,2.238,0,0,0-.517-1.543,1.8,1.8,0,0,0-1.375-.6" transform="translate(-312.056 -1417.034)"/><path class="a" d="M1143.192,531.256l-.915,1.013a2.5,2.5,0,0,0-1.04-.43.56.56,0,0,0-.421.186.622.622,0,0,0-.177.443q0,.509.915.882a6.341,6.341,0,0,1,1.014.522,1.868,1.868,0,0,1,.574.648,1.81,1.81,0,0,1,.232.9,2.038,2.038,0,0,1-.71,1.543,2.389,2.389,0,0,1-1.677.656,3.033,3.033,0,0,1-2.1-1.007l.967-1.139a1.793,1.793,0,0,0,1.217.677.729.729,0,0,0,.509-.238.7.7,0,0,0,.245-.5q0-.539-1.128-.95a3.7,3.7,0,0,1-.915-.444,1.585,1.585,0,0,1-.455-.6,1.9,1.9,0,0,1-.184-.811,1.978,1.978,0,0,1,.593-1.49,2.138,2.138,0,0,1,1.55-.572,2.681,2.681,0,0,1,1.9.719" transform="translate(-331.656 -1416.976)"/><path class="a" d="M1166.233,530.891h2.329a3.174,3.174,0,0,1,2.4.95,3.468,3.468,0,0,1,.91,2.5,3.23,3.23,0,0,1-3.437,3.437h-2.2Zm1.482,1.3v4.256h.582a2.206,2.206,0,0,0,1.487-.5,2.086,2.086,0,0,0,.582-1.664,2.5,2.5,0,0,0-.281-1.2,1.443,1.443,0,0,0-.813-.709,3.083,3.083,0,0,0-1.017-.186Z" transform="translate(-351.722 -1417.236)"/><path class="a" d="M1189.831,530.892h3.842v1.365H1191.3v1.391h2.371v1.343H1191.3v1.427h2.371v1.364h-3.842Z" transform="translate(-369.042 -1417.236)"/><path class="a" d="M1220.419,532.127l-.977.924a2.118,2.118,0,0,0-.759-.8,1.846,1.846,0,0,0-.946-.265,1.868,1.868,0,0,0-1.391.614,2.021,2.021,0,0,0-.59,1.448,2.094,2.094,0,0,0,.59,1.5,1.9,1.9,0,0,0,1.422.616,1.78,1.78,0,0,0,.871-.231,1.63,1.63,0,0,0,.674-.866h-1.617v-1.343h3.151v.892a2.928,2.928,0,0,1-.468,1.478,2.846,2.846,0,0,1-1.232,1.154,3.558,3.558,0,0,1-1.545.365,3.149,3.149,0,0,1-2.386-1.034,3.589,3.589,0,0,1-.972-2.556,3.4,3.4,0,0,1,1-2.466,3.25,3.25,0,0,1,2.41-1.023,3.063,3.063,0,0,1,2.766,1.59" transform="translate(-386.958 -1416.976)"/><path class="a" d="M1241.222,530.892h1.45v4.214a1.354,1.354,0,0,0,.322.945,1.088,1.088,0,0,0,.848.357,1.212,1.212,0,0,0,.936-.36,1.439,1.439,0,0,0,.333-1.015v-4.14h1.445v4.461a2.828,2.828,0,0,1-.3,1.22,2.1,2.1,0,0,1-.928.968,2.921,2.921,0,0,1-1.4.336,2.508,2.508,0,0,1-2.053-.79,2.58,2.58,0,0,1-.65-1.661Z" transform="translate(-406.759 -1417.237)"/><path class="a" d="M1265.189,530.892h1.14l2.781,6.89h-1.481l-.546-1.354h-2.62l-.535,1.354h-1.473Zm.57,2.257-.8,2.031h1.622Z" transform="translate(-422.342 -1417.237)"/><path class="a" d="M1289.279,530.891h2.329a3.173,3.173,0,0,1,2.4.95,3.467,3.467,0,0,1,.91,2.5,3.23,3.23,0,0,1-3.437,3.437h-2.2Zm1.482,1.3v4.256h.582a2.207,2.207,0,0,0,1.487-.5,2.086,2.086,0,0,0,.582-1.664,2.493,2.493,0,0,0-.281-1.2,1.443,1.443,0,0,0-.813-.709,3.083,3.083,0,0,0-1.017-.186Z" transform="translate(-442.03 -1417.236)"/><path class="a" d="M1311.4,530.892h1.14l2.781,6.89h-1.481l-.546-1.354h-2.62l-.535,1.354h-1.473Zm.57,2.257-.8,2.031h1.622Z" transform="translate(-456.259 -1417.237)"/><path class="a" d="M1335.725,530.892h1.461v5.4h2.012v1.486h-3.473Z" transform="translate(-476.118 -1417.236)"/><path class="a" d="M1352.091,530.892h1.14l2.781,6.89h-1.481l-.546-1.354h-2.62l-.535,1.354h-1.473Zm.57,2.257-.8,2.031h1.622Z" transform="translate(-486.123 -1417.237)"/><path class="a" d="M1376.483,530.892h1.456v4.88a2.2,2.2,0,0,1-.52,1.527,1.747,1.747,0,0,1-1.363.577,1.766,1.766,0,0,1-1.089-.362,2.277,2.277,0,0,1-.741-1.107l1.071-.819v.021a1.863,1.863,0,0,1,.1.231,1.707,1.707,0,0,0,.236.407.4.4,0,0,0,.309.181.453.453,0,0,0,.39-.2.917.917,0,0,0,.146-.546Z" transform="translate(-504.375 -1417.237)"/><path class="a" d="M1391.94,530.892h1.14l2.781,6.89h-1.481l-.546-1.354h-2.62l-.535,1.354h-1.473Zm.57,2.257-.8,2.031h1.623Z" transform="translate(-515.369 -1417.237)"/><path class="a" d="M1416.089,530.892h2.249a2.31,2.31,0,0,1,1.622.546,1.9,1.9,0,0,1,.6,1.474,2.548,2.548,0,0,1-.274,1.1,1.908,1.908,0,0,1-1.008.9l1.911,2.872h-1.691l-1.767-2.666h-.166v2.666h-1.472Zm1.482,1.228v1.795h.318q1.154,0,1.153-.95a.735.735,0,0,0-.3-.617,1.349,1.349,0,0,0-.832-.228Z" transform="translate(-535.099 -1417.237)"/><path class="a" d="M1438.843,530.892h1.14l2.781,6.89h-1.481l-.546-1.354h-2.62l-.535,1.354h-1.473Zm.57,2.257-.8,2.031h1.623Z" transform="translate(-549.792 -1417.237)"/><path class="a" d="M989.46,344.754l23.058,42.137h19.564l-23.058-42.137Z" transform="translate(-221.984 -1280.625)"/><path class="b" d="M1153.888,344.754h-41.749v13.613h12.845v28.524h16.7V358.367h12.2Z" transform="translate(-312.022 -1280.625)"/><path class="b" d="M925.476,344.754l-23.2,42.137h19.689l13.27-24.308Z" transform="translate(-158 -1280.625)"/><path class="c" d="M24.558,49.116a24.443,24.443,0,0,1-13.731-4.194,24.63,24.63,0,0,1-8.9-10.8A24.526,24.526,0,0,1,4.194,10.827,24.629,24.629,0,0,1,15,1.93a24.58,24.58,0,0,1,30.85,10.381,24.34,24.34,0,0,1,2.912,8.065H32.186a8.7,8.7,0,1,0,1.069,4.181c0-.105,0-.212-.006-.318H49.113c0,.116,0,.22,0,.318a24.444,24.444,0,0,1-4.194,13.73,24.63,24.63,0,0,1-10.8,8.9A24.4,24.4,0,0,1,24.558,49.116Z" transform="translate(842.004 -939.36)"/><path class="a" d="M1361.921,422.741,1388.3,449.49l.019-26.749Z" transform="translate(-495.344 -1337.862)"/></g></svg>
            </a>
            <ul id="insideMenu">
                <li>
                    <a href="/quienes-somos.php">Quienes somos</a>
                </li>
                <li>
                    <div class="industrias-wrapper" href="">
                        <span id="industriasLink">Industrias</span>    
                        <i id="industriasLinkIcon" class="fal fa-chevron-down"></i>
                    </div>
                    <div id="industriasSubmenu" class="submenu">
                        <a href="/industrias/oleaginosas.php">Oleaginosas</a>
                        <a href="/industrias/jugos.php">Jugos</a>
                        <a href="/industrias/endulzantes.php">Endulzantes</a>
                        <a href="/industrias/destilados.php">Destilados</a>
                        <a href="/industrias/lacteos.php">Lácteos</a>
                        <a href="/industrias/cosmeticos.php">Cosméticos</a>
                    </div>
                </li>
                <li>
                    <a onclick="scrollToID('#inocuidad')">Inocuidad</a>
                </li>
                <li>
                    <a href="/contacto.php">Contacto</a>
                </li>
            </ul>
            <div class="social-media">
                <a href="https://www.facebook.com/autothermosmx/" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.youtube.com/channel/UChRtw4oPeEXJq-ikxaFO--g/" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=523313332555&text=Hola%2C%20quisiera%20solicitar%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios%20de%20Auto%20Thermos%20Guadalajara%20%F0%9F%9A%9A" target="_blank">
                    <div class="whatsapp-icon"></div>
                </a>
                <a href="tel:523336737050">
                    <i class="fas fa-phone"></i>
                </a>
            </div>
        </div>
    </nav>
    <div class="mobile-menu">
        <ul id="outsideMenu">
            <li>
                <a href="/">Inicio</a>
            </li>
            <li>
                <a href="/quienes-somos.php">Quienes somos</a>
            </li>
            <li>
                <a id="submenuNavbarLinkMobile" href="">Industrias <i class="far fa-plus"></i><i class="far fa-minus"></i></a>
                <div id="submenuNavbarMobile" class="submenu">
                    <a href="/industrias/oleaginosas.php">Oleaginosas</a>
                    <a href="/industrias/jugos.php">Jugos</a>
                    <a href="/industrias/endulzantes.php">Endulzantes</a>
                    <a href="/industrias/destilados.php">Destilados</a>
                    <a href="/industrias/lacteos.php">Lácteos</a>
                    <a href="/industrias/cosmeticos.php">Cosméticos</a>
                </div>
            </li>
            <li>
                <a onclick="scrollToID('#inocuidad')">Inocuidad</a>
            </li>
            <li>
                <a href="/contacto.php">Contacto</a>
            </li>
        </ul>
        <div class="social-media">
            <a href="https://www.facebook.com/autothermosmx/" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.youtube.com/channel/UChRtw4oPeEXJq-ikxaFO--g/" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://api.whatsapp.com/send?phone=523313332555&text=Hola%2C%20quisiera%20solicitar%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20servicios%20de%20Auto%20Thermos%20Guadalajara%20%F0%9F%9A%9A" target="_blank">
                <div class="whatsapp-icon white"></div>
            </a>
            <a href="tel:523336737050">
                <i class="fas fa-phone"></i>
            </a>
        </div>
    </div>
</div>