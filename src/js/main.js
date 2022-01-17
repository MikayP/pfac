jQuery(document).ready(function($){

    $('#burger-nav').click(() => {
        $('#burger-nav').toggleClass('open');
        $('.mobile-nav').toggleClass('open');
        $('body').toggleClass('no-scroll');
        $('html').toggleClass('overflow-y-hidden');
    });

});

window.onscroll = function() {scrollFunction()};


function scrollFunction() {
    var header = document.querySelector("header");
    var menu_font = document.querySelectorAll(".page_item");
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
     // normal
     console.log('bottom');
     header.classList.add("header_expand");
     menu_font.forEach( el => { el.classList.add("font_expand"); } );
    
  } else {
      // expand
      console.log('top');
    header.classList.remove("header_expand");
    menu_font.forEach( el => { el.classList.remove("font_expand") } );
  }
}