$(document).ready(function(){
    
    // Carrousel
    $('#carousel-example-generic').carousel();

    //Tooltip
    $(function () {$('[data-toggle="tooltip"]').tooltip()});

    // Dashboard
    var totalH = $( window ).height();
    var headerH = $('.adminHeader').height();
    var menuH = totalH - headerH;
    $('.admin_menu').height(menuH);

});

