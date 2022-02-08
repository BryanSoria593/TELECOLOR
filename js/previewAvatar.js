$(document).ready(function () {
    document.querySelector('#avatar').onchange=function(e){
        let reader = new FileReader();
        reader.readAsDataURL(e.target.files[0]);
        reader.onload = function(){
            let preview  = document.getElementById('preview');
            image = document.createElement('img');  
            image.src = reader.result;
            preview.innerHTML = '';
            preview.append(image);
            $("#preview").css("margin","auto");
            $("img").css("width","100px");
            $("img").css("height","100px");
            $("img").css("border-radius","100%");

        }
    }
    
})