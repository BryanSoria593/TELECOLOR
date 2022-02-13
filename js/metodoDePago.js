$(document).ready(function () {

    const datos = $('.contenedor__pago-datos');
    const billetera = $('.contenedor__pago-billetera');
    $('.tarjeta').click(function () {
        datos.css('display','block');
        billetera.css('display','none');
    
    })
    $('.criptomoneda').click(function () {
        datos.css('display','none');
        billetera.css('display','block');
       
    })

    
})