<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../styles/paginas/inicio.css">

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
        <!-- INICIO DEL SLIDER -->
        <section class="slider">
            <div><img src="../../img/PRI.png"></div>
            <div><img src="../../img/PRI.png"></div>
            <div><img src="../../img/PRI.png"></div>
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
        <!-- INICIO DE LA SECTION QUE MOSTRARÁ LAS GARANTÍAS -->
        <section class="garantia">
            <div class="garantia__informacion">
                <div class="garantia__informacion-logo">
                    <i class="fas fa-piggy-bank"></i>
                </div>
                <div class="garantia__informacion-titulo">
                    <p>Calidad y Ahorro</p>
                </div>
                <div class="garantia__informacion-descripcion">
                    <p>Entrega rápida y conveniente puerta a puerta</p>
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
                    <p>Entrega rápida y conveniente puerta a puerta</p>
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
                    <p>Entrega rápida y conveniente puerta a puerta</p>
                </div>
            </div>

        </section>
        <!-- FIN DE LA SECTION QUE MOSTRARÁ LAS GARANTÍAS -->
        <!-- FIN DEL ASIDE -->
        <!-- <div class="anuncios">
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
        </div> -->


    </div>
    <br>
    <?php require('../layouts/footer.php') ?>

</body>

</html>