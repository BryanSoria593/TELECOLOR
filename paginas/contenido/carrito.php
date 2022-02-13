<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../js-jquery/jquery-3.3.1.min.js"></script>
    <script src="../../js/metodoDePago.js"></script>
    <link rel="stylesheet" href="../../styles/paginas/carrito.css">
    <?php require('../layouts/head.php') ?>
    <title>Carrito de compras</title>
</head>

<body>
    <?php require('../layouts/menu.php') ?>
    <section class="contenedor">
        <div class="contenedor__informacion">
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><img src="https://via.placeholder.com/90x90" alt="imágen detallado del producto"></th>

                        <td>IPHONE 11 PRO</td>
                        <td>1</td>
                        <td>$580</td>
                    </tr>
                    <tr>
                        <th><img src="https://via.placeholder.com/90x90" alt="imágen detallado del producto"></th>
                        <td>TELEVISOR VIZIO</td>
                        <td>1</td>
                        <td>$460</td>
                    </tr>
                    <tr>
                        <th><img src="https://via.placeholder.com/90x90" alt="imágen detallado del producto"></th>
                        <td>TELEVISOR TCL</td>
                        <td>1</td>
                        <td>$169.99</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="contenedor__pago">
            <div class="contenedor__pago-monto">
                <p class="contenedor__pago-monto-descripcion">
                    <span>Subtotal</span>
                    <span>$1209.99</span>
                </p>
                <p class="contenedor__pago-monto-descripcion">
                    <span>Envío</span>
                    <span>$10.00</span>
                </p>
                <p class="contenedor__pago-monto-descripcion">
                    <span>Iva 12%</span>
                    <span>$145.19</span>
                </p>
                <p class="contenedor__pago-monto-descripcion">
                    <span>Total</span>
                    <span>$1365.18</span>
                </p>
            </div>
            <section class="contenedor__pago-metodo">
                <p>Seleccione un método de pago</p>
                <div class="contenedor__pago-metodo-logos">
                    <div class="contenedor__pago-logo">
                        <input class="seleccionar tarjeta" name="role" value="visa" type="radio">
                        <i class="fa-brands fa-cc-visa visa"></i>
                    </div>
                    <div class="contenedor__pago-logo">
                        <input class="seleccionar tarjeta" name="role" value="mastercard" type="radio">
                        <i class="fa-brands fa-cc-mastercard mastercard"></i>
                    </div>
                    <div class="contenedor__pago-logo">
                        <input class="seleccionar criptomoneda" name="role" value="bitcoin" type="radio">
                        <i class="fa-brands fa-bitcoin bitcoin"></i>
                    </div>
                    <div class="contenedor__pago-logo">
                        <input class="seleccionar criptomoneda" name="role" value="ethereum" type="radio">
                        <i class="fa-brands fa-ethereum ethereum"></i>
                    </div>
                </div>
            </section>
            <section class="contenedor__pago-datos">
                <label for="tarjeta">Número de tarjeta</label>
                <input type="text" name="" id="tarjeta">
                <label for="caducidad">Fecha de caducidad</label>
                <div class="fecha">
                    <select class="meses" name="">
                        <option value="0">Mes</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    /
                    <select class="anios" name="">
                        <option value="0">Año</option>
                        <option value="1">2022</option>
                        <option value="2">2023</option>
                        <option value="3">2024</option>
                        <option value="4">2025</option>
                        <option value="5">2026</option>
                        <option value="6">2027</option>
                        <option value="7">2028</option>
                        <option value="8">2029</option>
                        <option value="9">2030</option>
                        <option value="10">2031</option>
                        <option value="11">2032</option>
                        <option value="12">2033</option>
                    </select>
                </div>
                <div class="botonesProductos">
                    <button type="button" class="btn btn-success btn-anadircarro ">REALIZAR PAGO</button>
                </div>

            </section>
            <section class="contenedor__pago-billetera">
                <label for="tarjeta">Billetera de TELECOLOR</label>
                <input type="text" name="" id="tarjeta" value="127321jh3vg21d3da1523aa132ds" readonly>
                <label for="tarjeta">Ingresar billetera</label>
                <input type="text" name="" id="tarjeta">
                <div class="botonesProductos">
                    <button type="button" class="btn btn-success btn-anadircarro ">REALIZAR INTERCAMBIO</button>
                </div>
            </section>
        </div>

    </section>
    <?php require('../layouts/footer.php') ?>
</body>

</html>