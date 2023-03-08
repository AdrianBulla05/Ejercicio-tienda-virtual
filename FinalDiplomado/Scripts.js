function window_open(url){
    window.open( "https://www.google.com", "nombrePop-Up", "width=380,height=500, top=85,left=50");
   }
 
   
    document.getElementById("botonWindowOpen").onclick = function() {window_open()};
    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
      }
      slideIndex++;
      if(slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides,2000);
 }

 function abrirVentana(url) {
  window.open(url, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=400, height=400");
}
