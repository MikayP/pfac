window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var header = document.querySelector("header");
    var menu_font = document.querySelectorAll(".page_item");
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
     // expand
     header.classList.add("header_expand");
     menu_font.forEach( el => { el.classList.add("font_expand"); } );
    
  } else {
      // normal
    header.classList.remove("header_expand");
    menu_font.forEach( el => { el.classList.remove("font_expand") } );
  }
}


jQuery(document).ready(function($){

  $('#burger-nav').click(() => {
      $('#burger-nav').toggleClass('open');
      $('.mobile-nav').toggleClass('open');
      $('body').toggleClass('no-scroll');
      $('html').toggleClass('overflow-y-hidden');
  });


      AOS.init();

 
});