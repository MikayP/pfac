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

  // $(".custom-fade-right").animate({left:200, opacity:"show"}, 1000);
   

 
var btn = $('#button-to-top');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
AOS.init();
});

(function(){
  const target = document.getElementById('flickity');
  const videos = target.getElementsByTagName('video');
  const videosLength = videos.length;

  const flickity = new Flickity(target,{
    wrapAround:true,
    autoPlay:false,
    on: {
      ready: function() {
        console.log('Flickity ready');
        videos[0].play();
      }
    }
  });

  for(let i = 0;i < videosLength; i++){
    /*　各動画の長さ　*/
    videos[i].addEventListener('loadedmetadata',function(){
      console.log("Video Duration_" + i + " : "+ videos[i].duration);
    },false);
    videos[i].addEventListener('ended',function(){
      flickity.next('true');
    },false);
  }

  flickity.on('change',changeSlide);
  function changeSlide(index) {
    for(let i = 0;i < videosLength; i++){
      videos[i].currentTime = 0;
      videos[index].play();
    }
  }

}());


(function(){
/*flickity setting start*/
const elem = document.getElementById('flickity');
const videos = elem.getElementsByTagName('video');
const videoFirst = videos[0];
const videosNum = videos.length;

const flkty = new Flickity( elem, {
  wrapAround:true,
  autoPlay:false,
  fullscreen: true,
  adaptiveHeight: true,
  lazyLoad: 1,
  on: {
    ready: function(index) {
      console.log('Flickity is ready');
      videoFirst.play();

      /*movie end next start*/
      for(let i = 0;i < videosNum; i++){
        videos[i].addEventListener("ended", endvid);
      }

      function endvid(){
        console.log("The video has ended");
        console.log(this);
        if(this.currentTime === this.duration){
          flkty.next('true');
        }
      }

      videos[0].addEventListener('loadedmetadata',getDurations,false);
      function getDurations(){
        const vidDurations = new Array();
        for(let i = 0;i < videosNum; i++){
          const viddura = videos[i].duration;
          vidDurations[i] ={"id":i,"duration":viddura};
        }
        console.log(vidDurations);
      }

    },
    change: function( index ) {
      videos[index].currentTime = 0;
      videos[index].play();
      console.log('Slide changed to : ' + index );
      console.log(videos[index].currentTime);
      console.log('videoduration_' + index + ' : ' + videos[index].duration);
    },
    settle:function(index){
      console.log('settle');
    }
  }
});
/*flickity setting end*/
}());
