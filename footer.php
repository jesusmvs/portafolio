
    
        <footer class="page-footer gris-claro">
          <div class="row">
            <div class="col s12 m3 principal"></div>
            <div class="col s12 m9 center">
             <section>
                <h5 class="white-text fuente">Más Información en:</h5>
                <p class="white-text">
                  <a class="mail"><i class="fa fa-envelope"></i> jesusmvs10@gmail.com</a>
                  <span class="font-20"> | </span>
                  <a class="telf"><i class="fa fa-phone"></i> +584120946706</a>
                </p>
             </section>
            </div>
          </div>
          <div class="footer-copyright gris-oscuro">
            <div class="row">
              <div class="col m3 s12 principal"></div>
              <div class="col m9 s12 center">
                Todos los Derechos Reservados © 2016
                
              </div>
            </div>
          </div>
        </footer>
            


    <!-- Modal Structure -->
    <div id="modalFooter" class="modal bottom-sheet">
      <div class="modal-title center white-text">
        <h4 class="fuente">Contáctame</h4>
      </div>
      <div class="modal-content">
        <section>
          <div class="row">
            <div class="col s4 m2 center">
              <a href="mailto:jesusmvs10@gmail.com" class="in-fl"> <i class="fa fa-envelope icon center"></i></a>
            </div>

            <div class="col s4 m2 center">
              <a class="in-fl telf"><i class="fa fa-phone-square icon center"></i></a>
              
            </div>

            <div class="col s4 m2 center">
              <a target="_blank" href="https://github.com/jesusmvs" class="in-fl"> <i class="fa fa-github-square icon center"></i></a>
            </div>

            <div class="col s4 m2 center">
              <a target="_blank" href="https://www.instagram.com/chumavs10/" class="in-fl"> <i class="fa fa-instagram icon center"></i></a>
            </div>

            <div class="col s4 m2 center">
              <a target="_blank" href="https://www.facebook.com/jvelasquezsolano" class="in-fl"> <i class="fa fa-facebook-square icon center"></i></a>
            </div>

            <div class="col s4 m2 center">
              <a target="_blank" href="https://twitter.com/jesusmvs" class="in-fl"> <i class="fa fa-twitter-square icon center"></i></a>
            </div>

          </div>
        </section>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
      </div>
    </div>
          
  
  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.3.0.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript">
      
	    $(document).ready(function(){
        $('.modal-trigger').leanModal();
      });

      $(".button-collapse").sideNav();
       $("#slide-out" ).hover(
        function() {
          $(this).addClass('mantener-scroll');
        }, function() {
          if ($.browser.mozilla) {
            $(this).removeClass('mantener-scroll');
          }        
        }
      );

      $(".telf").click(function(){
        $("body").append("<input type='text' id='temp'>");
        $("#temp").val("+584120946706").select();
        document.execCommand("copy");
        $("#temp").remove();
         Materialize.toast('Copiado al Portapapeles', 2000, 'rounded');
        
      });

      $(".mail").click(function(){
        $("body").append("<input type='text' id='temp'>");
        $("#temp").val("jesusmvs10@gmail.com").select();
        document.execCommand("copy");
        $("#temp").remove();
         Materialize.toast('Copiado al Portapapeles', 2000, 'rounded');
        
      });


  </script>
   
  </body>
</html>