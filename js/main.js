function scrollFunction(){var o=document.querySelector("header"),e=document.querySelectorAll(".page_item");document.body.scrollTop>80||document.documentElement.scrollTop>80?(console.log("bottom"),o.classList.add("header_expand"),e.forEach((o=>{o.classList.add("font_expand")}))):(console.log("top"),o.classList.remove("header_expand"),e.forEach((o=>{o.classList.remove("font_expand")})))}jQuery(document).ready((function(o){o("#burger-nav").click((()=>{o("#burger-nav").toggleClass("open"),o(".mobile-nav").toggleClass("open"),o("body").toggleClass("no-scroll"),o("html").toggleClass("overflow-y-hidden")}))})),window.onscroll=function(){scrollFunction()};
//# sourceMappingURL=main.js.map
