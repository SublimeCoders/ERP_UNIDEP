</div>
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="footer-nav" >
          <div class="col-md-9">
            <ul>
              <li><a href="#" id="open"><img src="imagenes\contacto.png" alt="" /> Contacto</a> </li>
              <li><a href="#"><img src="imagenes/asistencia.png" alt="" /></a> Asistencia </li>
              <li><a href="#"><img src="imagenes/manual.png" alt="" /></a> Manual </li>
              <li><a href="#"><img src="imagenes/quiencreo.png" alt=""></a> Creador </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="bottom-footer">
        <div class="col-md-5"></div>
        <div class="col-md-7">
          <ul class="footer-nav">
            <li><a href="https://www.facebook.com/unidepoficial" target="_blank"><img src="imagenes\facebook.png" alt="" /></a></li>
            <li><a href="https://plus.google.com/115663627232340246449  " target="_blank"><img src="imagenes\google-plus.png" alt="" /></a></li>
            <li><a href="https://www.twitter.com/UNIDEPoficial" target="_blank"><img src="imagenes\gorjeo.png" alt="" /></a></li>
          </ul>
         </div>

      </div>
      <div id="popup" style="display: none;">
          <div class="content-popup">
              <div class="close"><a href="#" id="close"><img src="Imagenes\png\close.png"/></a></div>
              <div>
                <section>
                	<center><div  class="mediano-center">

                	<h1 class="mediano azul">Contacto</h1>

                	<p>
                		UNIDEP Campus Hermosillo, Boulevard Paseo de las Quintas, Colonia Montecarlo, 83288 Hermosillo

                	</p>

                	<p>  Escribenos a: <a href="mailto: contacto@unidep.mx"> contacto@unidep.mx </a>	</p>
                  <p> Visite nuestra pagina web: <a href="www.Unidep.mx"> Unidep.mx </a></p>
                	<center>
                		<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d55796.32518317852!2d-111.02626734592255!3d29.0681558765178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x86ce847a1189fbe1%3A0x390d23a1de767c3c!2sUNIDEP+Campus+Hermosillo%2C+Boulevard+Paseo+de+las+Quintas%2C+Hermosillo!3m2!1d29.068085399999998!2d-110.99124769999999!5e0!3m2!1ses-419!2smx!4v1474612179209"
                     width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                	</center>

                	</div>

                </section>
                  <div style="float:left; width:100%;">

          </div>
              </div>
          </div>
      </div>
      <div class="popup-overlay"></div>
    </div>


  </footer>

<!--Cargar scripts -->
<script src="JS\jQuery.js" type="text/javascript"></script>
<script src="JS\bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#open').click(function(){
		$('#popup').fadeIn('slow');
		$('.popup-overlay').fadeIn('slow');
		$('.popup-overlay').height($(window).height());
		return false;
	});

	$('#close').click(function(){
		$('#popup').fadeOut('slow');
		$('.popup-overlay').fadeOut('slow');
		return false;
	});
});
</script>

</script>

</script>

</body>
</html>
