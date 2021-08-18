<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('partial_views/head_tag.php') ?>
    <script src="/assets/scripts/img-slider.js"></script>
    <script src="/assets/scripts/hammer.js"></script>
    <script src="/assets/scripts/aori.slider.js"></script>
    <title>Schedia - Nosotros</title>
</head>
<body>
    <?php include('partial_views/navbar.php') ?>
    <div class="page-hero nosotros-hero">
        <div class="gmw">
            <h1>
                <span>Nosotros</span>
                <span>Apasionados del interiorismo corporativo</span>
            </h1>
            <a class="main-button left-desktop-no-mobile"><span>Contactar</span></a>
        </div>
    </div>

    <div class="main-wrapper mision-wrapper">
        <div class="gmw">
            <div class="info">
                <h2 class="main-title">
                    <span>Nuestra misión</span>
                    <span>Apasionados por crear los mejores espacios</span>
                </h2>
                <p class="text-box mt-2">Somos una empresa de construcción enfocada y especializada en ejecución de interiores corporativos. En conjunto con la mano de obra especializada en cada ramo, realizamos un seguimiento puntual de los procesos para ofrecer calidad en entrega y forma, sin sobrecostos ni órdenes de cambio no solicitadas por el cliente final.</p>
                <button class="main-button black-button mt-3 left-desktop-no-mobile"><span>Ver proyectos</span></button>
            </div>
            <?php include('partial_views/img-slider.php') ?>
        </div>
    </div>

    <div class="main-wrapper soluciones-wrapper">
        <div class="gmw">
            <div class="photo-text-container">
                <div class="photo"></div>
                <div class="text">
                    <h2 class="main-title">
                        <span>Soluciones integrales</span>
                        <span>Del concepto a la realidad</span>
                    </h2>
                    <p class="mt-2 text-box">Siempre buscamos un valor agregado en los proyectos que realizamos haciendo un estudio global en búsqueda de optimizar en todo momento los aspectos logísticos de obra y financieros que ayuden a nuestros clientes a consolidar sus proyectos con calidad y dentro de los parámetros económicos requeridos siempre en tiempo.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper gray-wrapper elegirnos-wrapper">
        <div class="gmw">
            <h2 class="main-title centered">
                <span>¿Por qué elegirnos?</span>
                <span>El valor de trabajar con nostros.</span>
            </h2>
            <div class="grid-icons">
                <div class="grid-icon-item">
                    <div class="icon-wrapper">
                        <img class="normal" src="/assets/icons/elegirnos/tiempo-de-reaccion-reducido.png" alt="">
                        <img class="hover" src="/assets/icons/elegirnos/tiempo-de-reaccion-reducido-hover.png" alt="">
                    </div>
                    <h3>Tiempo de reacción reducido</h3>
                    <p class="text-box">Mano de obra basada en empresas locales, lo que hace que nuestro tiempo de reacción sea mucho menor.</p>
                </div>
                <div class="grid-icon-item">
                    <div class="icon-wrapper">
                        <img class="normal" src="/assets/icons/elegirnos/atencion-247.png" alt="">
                        <img class="hover" src="/assets/icons/elegirnos/atencion-247-hover.png" alt="">
                    </div>
                    <h3>Atención<br>24/7</h3>
                    <p class="text-box">Durante todo el proyecto ponemos a disposición del cliente un encargado (PM SR. Bilingüe) 24/7 para aclaración de dudas.</p>
                </div>
                <div class="grid-icon-item">
                    <div class="icon-wrapper">
                        <img class="normal" src="/assets/icons/elegirnos/seguimiento-del-proyecto.png" alt="">
                        <img class="hover" src="/assets/icons/elegirnos/seguimiento-del-proyecto-hover.png" alt="">
                    </div>
                    <h3>Seguimiento del proyecto</h3>
                    <p class="text-box">Ponemos un PM JR por cada 1000 m2 para el correcto seguimiento del proyecto, así como un residente de acabados por cada 1000 m2 o menos.</p>
                </div>
                <div class="grid-icon-item">
                    <div class="icon-wrapper">
                        <img class="normal" src="/assets/icons/elegirnos/seguridad-e-higiene.png" alt="">
                        <img class="hover" src="/assets/icons/elegirnos/seguridad-e-higiene-hover.png" alt="">
                    </div>
                    <h3 class="small">Seguridad e higiene</h3>
                    <p class="text-box">Durante todo proyecto disponemos a un encargado de seguridad e higiene por cada 500 m2, siguiendo todos los protocolos anti-COVID y empleando filtros sanitarios.</p>
                </div>
                <div class="grid-icon-item">
                    <div class="icon-wrapper">
                        <img class="normal" src="/assets/icons/elegirnos/fianzas-de-cumplimiento.png" alt="">
                        <img class="hover" src="/assets/icons/elegirnos/fianzas-de-cumplimiento-hover.png" alt="">
                    </div>
                    <h3>Fianzas de Cumplimiento</h3>
                    <p class="text-box">Le otorgamos a nuestros clientes hasta 3 años de garantía, brindándoles el respaldo adecuado por medio de fianzas de cumplimiento, buen uso, responsabilidad civil y vicios ocultos.</p>
                </div>
                <div class="grid-icon-item">
                    <div class="icon-wrapper">
                        <img class="normal" src="/assets/icons/elegirnos/seguimiento-postconstruccion.png" alt="">
                        <img class="hover" src="/assets/icons/elegirnos/seguimiento-postconstruccion-hover.png" alt="">
                    </div>
                    <h3>Seguimiento post construcción 24/7</h3>
                    <p class="text-box">Equipo de seguimiento de post construcción 24/7 con un tiempo de reacción menor a 30 minutos.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper proceso-wrapper">
        <div class="gmw">
            <h2 class="main-title centered">
                <span>Nuestro proceso</span>
                <span>¿Cómo lo hacemos?</span>
            </h2>
            <div class="slider-wrapper only-desktop">
                <div id="sliderSteps" class="slider column lo-hacemos-slider">
                    <div class="slider-item s1">
                        <div class="step conector right-conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/gestoria-tramites.png" alt="">
                                <div class="step-number">1</div>
                            </div>
                            <h4>Gestoría de trámites</h4>
                            <p class="text-box">Gestionamos trámites para construcción y contratación de servicios privados o del estado.</p>
                        </div>
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/planeacion-especializada.png" alt="">
                                <div class="step-number">2</div>
                            </div>
                            <h4>Planeación Especializada</h4>
                            <p class="text-box">Contamos con un equipo de ingenieros especializados en planeación de proyectos, logística, ejecución de ingenierías y cálculos.</p>
                        </div>
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/electricidad-iluminacion.png" alt="">
                                <div class="step-number">3</div>
                            </div>
                            <h4>Eléctricidad e iluminación</h4>
                            <p class="text-box">Empleando una adecuada ingeniería eléctrica, realizamos todos los cálculos eléctricos para aterrizar un estudio de iluminación a la medida del proyecto.</p>
                        </div>
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/hidrahulica-sanitaria.png" alt="">
                                <div class="step-number">4</div>
                            </div>
                            <h4>Hidráulica y sanitaria</h4>
                            <p class="text-box">Trabajamos a partir de cálculos hidrosanitarios precisos.</p>
                        </div>
                    </div>

                    <div class="slider-item s2">
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/proteccion-incendios.png" alt="">
                                <div class="step-number">5</div>
                            </div>
                            <h4>Protección de incendios</h4>
                            <p class="text-box">Aplicamos ingeniería de protección contra incendios según la NFPA.</p>
                        </div>
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/cableado-estructurado.png" alt="">
                                <div class="step-number">6</div>
                            </div>
                            <h4>Cableado estructurado</h4>
                            <p class="text-box">Todo el cableado estructurado que instalamos cuenta no solo con los más altos estándares de calidad sino con todas las certificaciones necesarias.</p>
                        </div>
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/audio-video-control.png" alt="">
                                <div class="step-number">7</div>
                            </div>
                            <h4>Audio, video y control</h4>
                            <p class="text-box">Esquipamiento especial de audio, video y control de acceso.</p>
                        </div>
                        <div class="step conector left-conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/domotica.png" alt="">
                                <div class="step-number">8</div>
                            </div>
                            <h4>Domótica</h4>
                            <p class="text-box">Espacios inteligentes a partir de la gestión y automatización domótica.</p>
                        </div>
                    </div>
                    <div class="slider-item s3">
                    </div>
                </div>
                <div class="points">
                    <div div="1" class="points-item p1 active"></div>
                    <div div="2" class="points-item p2"></div>
                </div>
            </div>

            <div class="slider-wrapper only-mobile">
                <div id="sliderStepsMobile" class="slider column lo-hacemos-slider">
                    <div class="slider-item s1">
                        <div class="step conector right-conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/gestoria-tramites.png" alt="">
                                <div class="step-number">1</div>
                            </div>
                            <h4>Gestoría de trámites</h4>
                            <p class="text-box">Gestionamos trámites para construcción y contratación de servicios privados o del estado.</p>
                        </div>
                    </div>
                    <div class="slider-item s2">
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/planeacion-especializada.png" alt="">
                                <div class="step-number">2</div>
                            </div>
                            <h4>Planeación Especializada</h4>
                            <p class="text-box">Contamos con un equipo de ingenieros especializados en planeación de proyectos, logística, ejecución de ingenierías y cálculos.</p>
                        </div>
                    </div>
                    <div class="slider-item s3">
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/electricidad-iluminacion.png" alt="">
                                <div class="step-number">3</div>
                            </div>
                            <h4>Eléctricidad e iluminación</h4>
                            <p class="text-box">Empleando una adecuada ingeniería eléctrica, realizamos todos los cálculos eléctricos para aterrizar un estudio de iluminación a la medida del proyecto.</p>
                        </div>
                    </div>
                    <div class="slider-item s4">
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/hidrahulica-sanitaria.png" alt="">
                                <div class="step-number">4</div>
                            </div>
                            <h4>Hidráulica y sanitaria</h4>
                            <p class="text-box">Trabajamos a partir de cálculos hidrosanitarios precisos.</p>
                        </div>
                    </div>
                    <div class="slider-item s5">
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/proteccion-incendios.png" alt="">
                                <div class="step-number">5</div>
                            </div>
                            <h4>Protección de incendios</h4>
                            <p class="text-box">Aplicamos ingeniería de protección contra incendios según la NFPA.</p>
                        </div>
                    </div>
                    <div class="slider-item s6">
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/cableado-estructurado.png" alt="">
                                <div class="step-number">6</div>
                            </div>
                            <h4>Cableado estructurado</h4>
                            <p class="text-box">Todo el cableado estructurado que instalamos cuenta no solo con los más altos estándares de calidad sino con todas las certificaciones necesarias.</p>
                        </div>
                    </div>
                    <div class="slider-item s7">
                        <div class="step conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/audio-video-control.png" alt="">
                                <div class="step-number">7</div>
                            </div>
                            <h4>Audio, video y control</h4>
                            <p class="text-box">Esquipamiento especial de audio, video y control de acceso.</p>
                        </div>
                    </div>
                    <div class="slider-item s8">
                        <div class="step conector left-conector">
                            <div class="icon-wrapper">
                                <img src="/assets/icons/proceso/domotica.png" alt="">
                                <div class="step-number">8</div>
                            </div>
                            <h4>Domótica</h4>
                            <p class="text-box">Espacios inteligentes a partir de la gestión y automatización domótica.</p>
                        </div>
                    </div>
                </div>
                <div class="points">
                    <div class="points-item p1 active" div="1"></div>
                    <div class="points-item p2" div="2"></div>
                    <div class="points-item p3" div="3"></div>
                    <div class="points-item p4" div="4"></div>
                    <div class="points-item p5" div="5"></div>
                    <div class="points-item p6" div="6"></div>
                    <div class="points-item p7" div="7"></div>
                    <div class="points-item p8" div="8"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrapper nueva-historia-wrapper">
        <div class="gmw">
            <h2>Iniciemos juntos una nueva historia</h2>
            <a href="#" class="main-button"><span>Contactar</span></a>
        </div>
    </div>

    <div class="main-wrapper clientes-wrapper">
        <div class="gmw">
            <div class="slider-wrapper">
                <div id="sliderClientes" class="slider column clientes-slider">
                    <div class="slider-item s1">
                        <img src="/assets/images/nosotros/clientes/avnet-big.png" alt="">
                        <img src="/assets/images/nosotros/clientes/betterware-big.png" alt="">
                        <img src="/assets/images/nosotros/clientes/cbre-big.png" alt="">
                        <img src="/assets/images/nosotros/clientes/colliers-big.png" alt="">
                    </div>
                    <div class="slider-item s2">
                        <img src="/assets/images/nosotros/clientes/cuesta-campos-big.png" alt="">
                        <img src="/assets/images/nosotros/clientes/f5-big.png" alt="">
                        <img src="/assets/images/nosotros/clientes/greystar-big.png" alt="">
                        <img src="/assets/images/nosotros/clientes/luxoft-big.png" alt="">
                    </div>
                    <div class="slider-item s3">
                        <img src="/assets/images/nosotros/clientes/mt-motors-big.png" alt="">
                        <img src="/assets/images/nosotros/clientes/technicolor-big.png" alt="">
                    </div>
                </div>
                <div class="points">
                    <div class="points-item p1 active" div="1"></div>
                    <div class="points-item p2" div="2"></div>
                    <div class="points-item p3" div="3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include('partial_views/footer.php') ?>
</body>
</html>