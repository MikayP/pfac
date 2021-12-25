jQuery(document).ready(function($){

    $('#burger-nav').click(() => {
        $('#burger-nav').toggleClass('open');
        $('.mobile-nav').toggleClass('open');
        $('body').toggleClass('no-scroll');
    });

});