<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="../../styles/paginas/detalles.css">

    <script src="../../js-jquery/jquery-3.3.1.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../js/anadirCarrito.js"></script>
    <?php require('../layouts/head.php') ?>

    <title>Descripción del producto</title>
</head>

<body>
    <?php require('../layouts/menu.php') ?>

    <div class="contenedor">
        <!-- INICIO DE CONTENEDOR QUE MOSTRARÁ IMÁGEN DEL PRODUCTO A COMPRAR -->
        <section class="contenedor__imagenes">
            <div class="contenedor__imagenes-individual">
                <picture class="contenedor__imagenes-individual-item">
                    <img src="https://via.placeholder.com/70x80" alt="imágen detallado del producto">
                </picture>
                <picture class="contenedor__imagenes-individual-item">
                    <img src="https://via.placeholder.com/70x80" alt="imágen detallado del producto">
                </picture>
                <picture class="contenedor__imagenes-individual-item">
                    <img src="https://via.placeholder.com/70x80" alt="imágen detallado del producto">
                </picture>
                <picture class="contenedor__imagenes-individual-item">
                    <img src="https://via.placeholder.com/70x80" alt="imágen detallado del producto">
                </picture>
                
            </div>
            <div class="contenedor__imagenes-general">
                <img class="imagen__escritorio" src="https://via.placeholder.com/400x380" alt="imágen general del prueba">
                <img class="imagen__responsivo" src="https://via.placeholder.com/290x380" alt="imágen general del prueba">
            </div>
        </section>
        <!-- FIN DE CONTENEDOR QUE MOSTRARÁ IMÁGEN DEL PRODUCTO A COMPRAR -->
        <section class="contenedor__informacion">
            <div class="contenedor__informacion-nombreProducto">
                <h3>Producto 12345</h3>
                <p class="contenedor__informacion-nombreProducto-modelo"><span>Modelo:</span> RMAS152</p>
                <p class="contenedor__informacion-nombreProducto-marca"><span>Marca:</span> SAMSUNG</p>
            </div>
            <div class="contenedor__informacion-descripcionProducto">
                <ul>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit.</li>
                    <li>Lorem ipsum dolor sit amet.</li>
                    
                </ul>
            </div>
            <section class="contenedor__informacion-precios">
                <div class="compraOnline">
                    <p>
                        Precio de compra en línea: <span>$800</span>
                    </p>
                </div>
                <div class="compraNormal">
                    <p>
                        Precio de compra normal: <span>$700</span>
                    </p>
                </div>
                <div class="contenedor__informacion-aviso">
                    <p>*Precios incluyen iva</p>
                    <p>
                        <span>Disponibilidad:</span>
                        <span>En stock</span>
                        
                    </p>
                </div>
            </section>
            <div class="contenedor__informacion-cantidad">
                <div class="contenedor__informacion-cantidad-disponible">
                    <span>Cantidad disponible:</span>
                    <span>4</span>
                </div>
                <div class="contenedor__informacion-cantidad-seleccionar number-wrapper">
                    Seleccionar cantidad
                    <input type="number" min="1" max="4" value="1">

                </div>
            </div>

        </section>
        <section class="contenedor__botones">
            <button type="button" class="btn btn-success btn-anadircarro ">AÑADIR AL CARRITO</button>
            <button type="button" class="btn btn-info btn-verDetalles">COMRPAR</button>
        </section>
        


    </div>

    <?php require('../layouts/footer.php') ?>
</body>

</html>