$(document).ready(function () {

    // XMLHttpRequest object for communicating with server
    var xmlHttp = new XMLHttpRequest();

    var numberOfColums = 4;

    var htmlCode = "";

    var response;

    var send = "scripts/hook.php";

    xmlHttp.open("GET", send, true);

    xmlHttp.send(null);

    xmlHttp.onreadystatechange = function () {

        if (xmlHttp.readyState == 4) {
            response = xmlHttp.responseText.split("~");
            for (var i = 0; i < response.length; i++) {
                htmlCode += '<a href = " assignment/'+ response[i] +'">';
                htmlCode += '<img src = "assets/'+ response[i] +'"  class = "card-img-top img-thumbnail" />';
                htmlCode += '</a>';

            }


            document.getElementById('gallery_coke').innerHTML = htmlCode;
            document.getElementById('gallery_sprite').innerHTML = htmlCode;
            document.getElementById('gallery_pepper').innerHTML = htmlCode;
        }
    }

});