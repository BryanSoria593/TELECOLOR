<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../styles/paginas/inicio.css">
    <link rel="stylesheet" href="../../styles/paginas/celulares.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script src="../../js/slider.js"></script>

    <?php require('../layouts/head.php') ?>

    <title>Telecolor</title>
</head>

<body>

    <?php require('../layouts/menu.php') ?>

    <div class="contenedor">
        <!-- INICIO DE MERCADERÍA -->
        <section class="mercaderia">
            
            <!-- INICIO DE TELEVISORES -->
            
            <section class="containerTelevisores">
                <h2 class="title-productos">Nuevos Celulares</h2>
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
                        <button type="button" class="btn btn-success btn-anadircarro btn-ofertas">AÑADIR AL CARRITO</button>
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
                        <button type="button" class="btn btn-success btn-anadircarro btn-ofertas">AÑADIR AL CARRITO</button>
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
                        <button type="button" class="btn btn-success btn-anadircarro btn-ofertas">AÑADIR AL CARRITO</button>
                    </div>               
                </div>
                
                
            </section>
            <!-- FIN DE TELEVISORES -->
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
                        <button type="button" class="btn btn-success btn-anadircarro btn-ofertas">AÑADIR AL CARRITO</button>
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
                        <button type="button" class="btn btn-success btn-anadircarro btn-ofertas">AÑADIR AL CARRITO</button>
                    </div>
                    <div class="productosOfertas__items">
                        <picture>
                            <img src="../../img/ofertas/pantalla.png" alt="Imágen de pantalla">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>MONITOR PORTÁTIL</h3>
                            <p class="productos__informacion">HDMI | 1080 FHD</p>
                            <p class="precioAntiguo">$159.99</p>
                            <p class="precioOferta">$135.99</p>
                            <span class="badge procentajeOferta"> -15%</span>
                        </div>
                        <button type="button" class="btn btn-success btn-anadircarro btn-ofertas">AÑADIR AL CARRITO</button>
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
                        <button type="button" class="btn btn-success btn-anadircarro btn-ofertas">AÑADIR AL CARRITO</button>
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
                        <button type="button" class="btn btn-success btn-anadircarro btn-ofertas">AÑADIR AL CARRITO</button>
                    </div>
                    <div class="productosOfertas__items">
                        <picture>
                            <img src="../../img/ofertas/microfono.png" alt="Imágen de TV BOX">
                        </picture>
                        <div class="productos__descripcion">
                            <h3>MICRÓFONO TONOR</h3>
                            <p class="productos__informacion">ZOOM | SKYPE | TEAMS</p>
                            <p class="precioAntiguo">$49.99</p>
                            <p class="precioOferta">$33.99</p>
                            <span class="badge procentajeOferta"> -32%</span>
                        </div>
                        <button type="button" class="btn btn-success btn-anadircarro btn-ofertas">AÑADIR AL CARRITO</button>
                    </div>
                    
                </div>
                
                
            </section>
            <!-- FIN DE ARTICULOS EN OFERTAS -->
            
        </section>
        <!-- FIN DE MERCADERÍA -->
    </div>

    <?php require('../layouts/footer.php') ?>

</body>

</html>