<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../styles/paginas/inicio.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    
    <?php require('../layouts/head.php') ?>
    <script src="../../js/slider.js"></script>



    <title>Telecolor</title>
</head>

<body>

    <?php require('../layouts/menu.php') ?>

    <div class="contenedor">
        <!-- INICIO DEL SLIDER -->
        <section class="slider">
            <div><img src="../../img/PRI.png"></div>
            <div><img src="../../img/publi.jpg"></div>
            <div><img src="../../img/ELECTRONICA DIGITAL TELECOLOR.png"></div>
        </section>
        <!-- FIN DEL SLIDER -->
        <!-- INICIO DEL ASIDE -->
        <aside class="aside">
            <div class="anuncions__img">
                <img src="../../img/anuncios/camara.png" alt="Cámara de seguridad">
            </div>
            <div class="anuncions__img">
                <img src="../../img/anuncios/varios.png" alt="Varios productos">
            </div>
            <div class="anuncions__img">
                <img src="../../img/anuncios/laptop.png" alt="Descuento de laptop">
            </div>
            <div class="anuncions__img">
                <img src="../../img/anuncios/iphone.png" alt="Descuento de Iphone">
            </div>

            <!-- <div class="aside__msgBienvenida">
                <p>
                    <span>Bienvenido a</span><br>
                    <span>Electrónica Digital</span><br>
                    <span>TELECOLOR</span>
                </p>
            </div>
            <div class="aside__botones">
                <div class="aside__botones-inicio">
                    <div type="button" class="btn-iniciar btn w-50">INGRESAR</div>
                </div>
                <div class="aside__botones-registrar">
                    <div type="button" class="btn-registrar btn w-50">REGISTRAR</div>
                </div>
            </div>
            <div class="aside__politica">
                <div class="aside__politica-titulo">
                    <p>Política de antención al cliente</p>
                </div>
                <div class="aside__politica-descripcion">
                        <p>
                            <i class="fas fa-hand-holding-usd"></i>
                            <span>Seguridad de pago</span>
                        </p>
                        <p>
                            <i class="fas fa-cube"></i>
                            <span>Garantía de entrega</span>
                        </p>
                        <p>
                            <i class="far fa-gem"></i>
                            <span>Garantía de calidad</span>
                        </p>
                        <p>
                            <i class="fas fa-truck-loading"></i>
                            <span>Devoluciones sin motivo</span>
                        </p> 
                </div>
            </div> -->
        </aside>
        <!-- FIN DEL ASIDE -->
        <section class="garantia">
            <div class="garantia__informacion">
                <div class="garantia__informacion-logo">
                    <i class="fas fa-piggy-bank"></i>
                </div>
                <div class="garantia__informacion-titulo">
                    <p>Calidad y Ahorro</p>
                </div>
                <div class="garantia__informacion-descripcion">
                    <p>Control de calidad integral y precios accesibles</p>
                </div>
            </div>
            <div class="garantia__informacion">
                <div class="garantia__informacion-logo">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="garantia__informacion-titulo">
                    <p>Logística rápida y Conveniente</p>
                </div>
                <div class="garantia__informacion-descripcion">
                    <p>Entrega rápida y conveniente puerta a puerta</p>
                </div>

            </div>
            <div class="garantia__informacion">
                <div class="garantia__informacion-logo">
                    <i class="fas fa-user-shield"></i>
                </div>
                <div class="garantia__informacion-titulo">
                    <p>Seguridad de Pago</p>
                </div>
                <div class="garantia__informacion-descripcion">

                    <p>Servicios seguros para realizar los pagos</p>
                </div>

            </div>
            <div class="garantia__informacion">
                <div class="garantia__informacion-logo">
                    <i class="fas fa-headphones-alt"></i>
                </div>
                <div class="garantia__informacion-titulo">
                    <p>Servicio Profesional y Garantía de Producto</p>
                </div>
                <div class="garantia__informacion-descripcion">
                    <p>Servicio al cliente 24/7</p>
                </div>
            </div>

        </section>
        <section class="mercaderia">
            <section class="containerMasVendidos">
                <h2 class="title-productosMasVendidos">Productos más vendidos</h2>
                <div class="productos__masVendidos">
                    <div class="productos_masVendidos-items">
                        <picture>
                            <img src="../../img/PS4.png" alt="Imágen de PS4">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>PS4 SLIM</h3>
                            <p class="productos__informacion">1 TB</p>
                            <p class="precioActual">$300</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="productos_masVendidos-items">
                        <picture>
                            <img src="../../img/TCL.png" class="item-tv" alt="Imágen de tv tcl">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>TCL P615 4K TV 50''</h3>
                            <p class="productos__informacion">ANDROID TV</p>
                            <p class="precioActual">$530</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="productos_masVendidos-items">
                        <picture>
                            <img src="../../img/Mi-Smart-Band.png" alt="Imágen de mi band 6">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>MI BAND 6</h3>
                            <p class="productos__informacion">CORREA ADICIONAL</p>
                            <p class="precioActual">$55</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- INICIO DE ARTICULOS EN OFERTAS -->
            <section class="containerOfertas">
                <h2 class="title-productos">Ofertas</h2>
                <div class="productosOfertas">   
                    <div class="productosOfertas__items">
                        <picture>
                            <img src="../../img/ofertas/tvbox.png" alt="Imágen de TV BOX">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>ROKU STREAMING</h3>
                            <p class="productos__informacion">HD | 4K | HDR</p>
                            <p class="precioAntiguo">$49.99</p>
                            <p class="precioOferta">$29.98</p>
                            <span class="badge procentajeOferta"> -40%</span>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="productosOfertas__items">
                        <picture>
                            <img src="../../img/ofertas/camara.png" alt="Imágen de cámara">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>CÁMARA WEB</h3>
                            <p class="productos__informacion">1080P | MICRÓFONO </p>
                            <p class="precioAntiguo">$49.99</p>
                            <p class="precioOferta">$16.00</p>
                            <span class="badge procentajeOferta"> -32%</span>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="productosOfertas__items">
                        <picture>
                            <img src="../../img/ofertas/pantalla.png" alt="Imágen de pantalla">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>MONITOR</h3>
                            <p class="productos__informacion">HDMI | 1080 FHD</p>
                            <p class="precioAntiguo">$159.99</p>
                            <p class="precioOferta">$135.99</p>
                            <span class="badge procentajeOferta"> -15%</span>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="productosOfertas__items">
                        <picture>
                            <img src="../../img/ofertas/soporte.png" alt="Imágen de soporte para tv">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>Mounting Dream</h3>
                            <p class="productos__informacion">APTO PARA 26''-55''</p>
                            <p class="precioAntiguo">$29.99</p>
                            <p class="precioOferta">$25.49</p>
                            <span class="badge procentajeOferta"> -15%</span>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="productosOfertas__items">
                        <picture>
                            <img src="../../img/ofertas/tplink.png" alt="Imágen de router">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>TP-Link AC1750</h3>
                            <p class="productos__informacion">5 GHz | ALEXA | QoS </p>
                            <p class="precioAntiguo">$79.99</p>
                            <p class="precioOferta">$53.99</p>
                            <span class="badge procentajeOferta"> -33%</span>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="productosOfertas__items">
                        <picture>
                            <img src="../../img/ofertas/microfono.png" alt="Imágen de TV BOX">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>MICRÓFONO</h3>
                            <p class="productos__informacion">ZOOM | SKYPE | TEAMS</p>
                            <p class="precioAntiguo">$49.99</p>
                            <p class="precioOferta">$33.99</p>
                            <span class="badge procentajeOferta"> -32%</span>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    
                </div>
                
                
            </section>
            <!-- FIN DE ARTICULOS EN OFERTAS -->
            <!-- INICIO DE TELEVISORES -->
            <section class="containerTelevisores">
                <h2 class="title-productos">Televisores</h2>
                <div class="televisores">   
                    <div class="televisores__items">
                        <picture>
                            <img src="../../img/televisores/televisor.jpg" alt="Imágen de TV SAMSUNG 55''">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>SAMSUNG - SMART TV 4K 55''</h3>
                            <p class="productos__informacion">QLED | 4K | 120Hz</p>
                            <p class="precioOferta">$880</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="televisores__items">
                        <picture>
                            <img src="../../img/televisores/televisor2.jpg" alt="Imágen de TV BOX TV SAMSUNG 60''">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>SAMSUNG - SMART TV 4K 60''</h3>
                            <p class="productos__informacion">DUAL LED | 4K | 60Hz</p>
                            <p class="precioOferta">$1200</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="televisores__items">
                        <picture>
                            <img src="../../img/televisores/televisor3.jpg" alt="Imágen de TV ROKU">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>ROKU STREAMING</h3>
                            <p class="productos__informacion">led | 4K | HDR</p>
                            <p class="precioOferta">$710</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    
                </div>
                
                
            </section>
            <!-- FIN DE TELEVISORES -->
            <!-- INICIO DE RECOMENDACIONES -->

            <section class="containerRecomendado">
                <h2 class="title-productos">Recomendado para tí</h2>
                <div class="recomendados">   
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/aro.jpg" alt="Imágen de ARO DE LUZ">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>LUZ DE ANILLO</h3>
                            <p class="productos__informacion">10'' | LED </p>
                            <p class="precioOferta">$33.99</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/gta.jpg" alt="Imágen de GTA V">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>GTA V</h3>
                            <p class="productos__informacion">PREMIUM EDITION | PS4 </p>
                            <p class="precioOferta">$14.99</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/fifa.jpg" alt="Imágen de FIFA 22">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>FIFA 22</h3>
                            <p class="productos__informacion">PS5</p>
                            <p class="precioOferta">$39.99</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/mesa.jpg" alt="Imágen de MESA WARRIOR">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>MESA WARRIOR</h3>
                            <p class="productos__informacion">COLOR NEGRO | 55 INCH</p>
                            <p class="precioOferta">$184.99</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/mesa2.png" alt="Imágen de MESA SEVEN WARRIOR">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>ROKU STREAMING</h3>
                            <p class="productos__informacion">COLOR NEGRO | 60 INCH</p>
                            <p class="precioOferta">$199.99</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/silla.jpg" alt="Imágen de SILLA RESPAWN 110">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>SILLA RESPAWN 110</h3>
                            <p class="productos__informacion">RECLINABLE | REPOSAPIÉS</p>
                            <p class="precioOferta">$186.46</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/drones.jpg" alt="Imágen de DRON">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>LOZENGE DRON</h3>
                            <p class="productos__informacion">1 CÁMARA | 1080P | WIFI</p>
                            <p class="precioOferta">$39.99</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/iphone.jpg" alt="Imágen de IPHONE">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>IPHONE 12 PRO</h3>
                            <p class="productos__informacion">128 GB | COLOR AZUL</p>
                            <p class="precioOferta">$859.00</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/laptop.png" alt="Imágen de LAPTOP">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>ASUS ZENBOOK 13</h3>
                            <p class="productos__informacion">13.3'' | Ryzen 7 5700U</p>
                            <p class="precioOferta">$926.80</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/teclado.jpg" alt="Imágen de TECLADO">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>TECLADO MECÁNICO</h3>
                            <p class="productos__informacion">RAINBOW | 87 TECLAS</p>
                            <p class="precioOferta">$34.99</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/audifono.jpg" alt="Imágen de AUDÍFONO VOID RGB">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>CORSAIR VOID</h3>
                            <p class="productos__informacion">INALÁMBRICO | BLANCO</p>
                            <p class="precioOferta">$100</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    <div class="recomendados__items">
                        <picture>
                            <img src="../../img/recomendado/soldador.jpg" alt="Imágen de TV KIT DE SOLDADURA">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>KIT DE SOLDADURA</h3>
                            <p class="productos__informacion">FUENTE AC | 110 V</p>
                            <p class="precioOferta">$26.99</p>
                        </div>
                        <div class="botonesProductos">
                            <a href="../contenido/detalles.php">
                                <button type="button" class="btn btn-info btn-verDetalles">VER DETALLES</button>
                            </a>
                            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
                        </div>
                    </div>
                    
                    
                </div>
                
                
            </section>

            <!-- FIN DE RECOMENDACIONES -->
        </section>




        <?php require('../contenido/asistente.php') ?>


    </div>

    <?php require('../layouts/footer.php') ?>

</body>

</html>