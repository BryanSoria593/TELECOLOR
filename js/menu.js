$(document).ready(function () {
    
    $('.icon').click(function (params) {
        $('.nav').show();
    })

    $('.close').click(function (params) {
        $('.nav').hide();
    })

    /*MENÚ CELULAR */
    
    //INICIO DE MOSTRAR Y OCULTAR EL MENÚ RESPONSIVO CUANDO EL USUARIO CAMBIE DE RESOLUCIÓN DE PANTALLA
    $(window).resize(function (params) {
        if ($(document).width()>890) {
            $('.nav').css('display','block');
            $('.nav ul li ul').css('display','block');
            $('.iconoFlechaArriba').css('display','none');//OCULTAT LOS ICONOS DE DESPLIEGUE PARA LA PANTALLA DE ORDENADOR
            $('.iconoFlechaAbajo').css('display','none');//OCULTAT LOS ICONOS DE DESPLIEGUE PARA LA PANTALLA DE ORDENADOR
        }else  {
            $('.iconoFlechaAbajo').css('display','inline-block');//MOSTRAR LOS ICONOS DE DESPLIEGUE PARA LA PANTALLA DE ORDENADOR
            $('.iconoFlechaArriba').css('display','none');//MOSTRAR LOS ICONOS DE DESPLIEGUE PARA LA PANTALLA DE ORDENADOR
            $('nav').css('display','none');
            $('nav ul li ul').css('display','none');
        }
        
    });
    //FIN DE MOSTRAR Y OCULTAR EL MENÚ RESPONSIVO CUANDO EL USUARIO CAMBIE DE RESOLUCIÓN DE PANTALLA



    //INICIO DE DESPLEGAR SUBLISTA CUANDO EL USUARIO DE CLICK SOBRE UNA LISTA QUE CONTENGA OTRA LISTA
    $('.nav__listas li:has(ul)').click(function(e){
        e.preventDefault();
        if ($(document).width()<=890) {
            desplegarSublista();
        }
    })
    //FIN DE DESPLEGAR SUBLISTA CUANDO EL USUARIO DE CLICK SOBRE UNA LISTA QUE CONTENGA OTRA LISTA    


    //INICIO DE REDIRIGIR A UNA PÁGINA CUANDO EL USUARIO DE CLICK SOBRE UN ELEMENTO <a></a>
    $('.nav__listas ul li a').click(function (params) {
        window.location.href = $(this).attr('href');
        return params;
    });
    //FIN DE REDIRIGIR A UNA PÁGINA CUANDO EL USUARIO DE CLICK SOBRE UN ELEMENTO <a></a> 

    
    function desplegarSublista(params) {
        
        let contenido = $('.nav__listas li:has(ul)');
        if (contenido.hasClass('activado')) {
            
            contenido.removeClass('activado');
            contenido.children('ul').slideUp();
            //MOSTRAR Y OCULTAR FLECHAS
            $('.iconoFlechaArriba').css('display','none');
            
            $('.iconoFlechaAbajo').css('display','inline-block');
            

        } else {
            $('.nav__listas li ul').slideUp();
            $('.nav__listas li').removeClass('activado');
            $('.nav__listas li:has(ul)').addClass('activado');
            $('.nav__listas li:has(ul)').children('ul').slideDown();
            
            //MOSTRAR Y OCULTAR FLECHAS
            $('.iconoFlechaArriba').css('display','inline-block');
            $('.iconoFlechaAbajo').css('display','none');
            
        }
        return params;
    }

    //FIN DE MENÚ CELULAR
})


  