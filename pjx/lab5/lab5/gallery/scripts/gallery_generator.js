// JavaScript Gallery Generator
// Create the XMLHttpRequest Object for communicating with the web server
var xmlHttp = new XMLHttpRequest();
// Stores number of horizontalColumns gallery has, if too large it won't fit in browser window
var numberOfColumns = 4;
//Stores newly generated gallery HTML code
var htmlCode = "";
// Temporarily stores server response while code is generated
var response;

$(document).ready(function() {

    var send = "scripts/hook.php";

    xmlHttp.open("Get", send, true);

    xmlHttp.send(null);

    xmlHttp.onreadystatechange = function() {
        if(xmlHttp.readyState == 4) {


            response = xmlHttp.responseText.split("~");
            htmlCode += '<tr>';
            for (var i=0;i<response.length;i++){
                htmlCode += '<td id="gallery_cell">';
                htmlCode += '<a href="' + 'images/' + response[i] + '">';
                htmlCode += '<img src="' + response[i] + '" id="image_thumbnail"/>';
                htmlCode += '</a>';
                htmlCode += '</td>';
                if (((i+1)%numberOfColumns) == 0){
                    htmlCode += '</tr><tr>';
                }
            }
            htmlCode += '</tr>';
            document.getElementById('gallery').innerHTML = htmlCode;
        }
    }
});






