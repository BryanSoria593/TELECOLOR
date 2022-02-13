$(document).ready(function () {



    $('.chatbox__support').click(function () {
        $('.chatbox').css('display','flex');
    })
    const chatButton = document.querySelector('.chatbox__button');
    const chatContent = document.querySelector('.chatbox__support');
    const icons = {
        isClicked: "<img class='chatbox__button-img'  src='../../img/ASISTENTE.png' /> Nosotros las Respondemos",
        isNotClicked: "<img class='chatbox__button-img' src='../../img/ASISTENTE.png' /> ¿Tienes dudas? "
    }
    const chatbox = new InteractiveChatbox(chatButton, chatContent, icons);
    chatbox.display();
    chatbox.toggleIcon(false, chatButton);
})