$(document).ready(function () {
    $('.btn-anadircarro').click(function(){
        Swal.fire({
            icon: 'success',
            title: 'Su producto ha sido agregado al carrito con éxito',
            width: '40%',
            confirmButtonText: 'Aceptar',
            allowOutsideClick: false,
            allowEscapeKey: false,
            allowEnterKey: false,
            stopKeydownPropagation: false,
            toast:true            
        });
    })


})