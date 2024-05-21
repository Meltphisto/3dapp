$(document).ready(function(){

    //AJAX service request to get the main text data from the json data store
    $.getJSON('./application/model/data.json', function(jsonObj){
        console.log(jsonObj);
        $('#title_home').html('<h2>' + jsonObj.pageTextData[0].title +'</h2>');
        $('#subTitle_home').html('<h3>' + jsonObj.pageTextData[0].subTitle +'</h3>');
        $('#description_home').html('<p>' + jsonObj.pageTextData[0].description +'</p>');

        $('#title_left').html('<h2>' + jsonObj.pageTextData[1].title +'</h2>');
        $('#subTitle_left').html('<h4>' + jsonObj.pageTextData[1].subTitle +'</h5>');
        $('#description_left').html('<p>' + jsonObj.pageTextData[1].description +'</p>');

        $('#title_centre').html('<h2>' + jsonObj.pageTextData[2].title +'</h2>');
        $('#subTitle_centre').html('<h5>' + jsonObj.pageTextData[2].subTitle +'</h5>');
        $('#description_centre').html('<p>' + jsonObj.pageTextData[2].description +'</p>');

        $('#title_right').html('<h2>' + jsonObj.pageTextData[3].title +'</h2>');
        $('#subTitle_right').html('<h6>' + jsonObj.pageTextData[3].subTitle +'</h5>');
        $('#description_right').html('<p>' + jsonObj.pageTextData[3].description +'</p>');
    });
});