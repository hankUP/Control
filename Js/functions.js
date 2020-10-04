$(document).ready(function(){
    //dar scroll ao clicar no link
    $('nav a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
                targetOffset = $(id).offset().top;
                
        $('html, body').animate({ 
            scrollTop: targetOffset - 10
        }, 1500);
    });
    //fim dar scroll ao clicar no link

});