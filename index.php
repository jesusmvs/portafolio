<!DOCTYPE html>
<html lang="es">
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis:600,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <title>Portafolio</title>
  </head>

  <body>
    <header>    
      <div class="row">
        <div id="navLateral" class="col s12 m3 principal">
          <ul id="slide-out" class="side-nav fixed">
            <li><div class="userView">
              <img id="wallpaper" class="background" src="img/wallpaper2.png">
              <img  id="profile" class="circle responsive-img" src="img/profile.jpg">
              <a class="center text-center"><span class="white-text name text-center fuente">Ing. Jesús Velásquez</span></a>
            </div></li>
            <div class="margen-izq-10 margen-der-10 ">
              <h2 class="fuente acerca valign-wrapper"><i class="material-icons icono-acerca">assignment_ind</i><span class="text-center center">Acerca de mi</span></h2>
              <p class="acerca-text">
              Ingeniero de Sistemas, egresado de la Universidad De Oriente. Geek amante de la programación, en especial del Desarrollo Web. Capacitado para abordar de forma óptima las etapas de Análisis, Desarrollo e Implantación de Sistemas de Información.</p>
            </div>
            <li><div class="divider"></div></li>
            <li id="active"><a href="#" class="waves-effect opciones white-text"><i class="material-icons white-text">work</i><span>Portafolio</span><i id="icono-acceder" class="white-text material-icons right">send</i></a></li>
            <li><a href="#" class="waves-effect opciones"><i class="material-icons">done</i><span>Conocimientos</span><i id="icono-acceder" class="material-icons right">send</i></a></li>
            <li><a class="modal-trigger waves-effect opciones" href="#modalFooter"><i class="material-icons">contact_phone</i><span>Contáctame</span><i id="icono-acceder" class="material-icons right">send</i></a></li>
            
          </ul>
        </div>

        <div id="titulo" class="col s12 m9">
          <nav class="nav-grande block">
       
            <div class="row">
              <div class="col s2 m2 valign-wrapper down">
                <a href="#" data-activates="slide-out" class="button-collapse"><i id="icono-menu" class="material-icons">menu</i></a></div>
              <div class="col s8 m8 center">
                <h1><a class="fuente" href="#">Portafolio</a></h1>
              
              </div>
            </div>
          </nav>
        </div>      
      </div>
    </header>

	<section>
		<div class="row info">

			<div class="col s12 m3 principal"></div>
			<div class="col s12 m9">
				<!-- Informacion de la seccion -->
				<div class="row">
			        <div class="col s12 m12">
			          	<div class="card">
				            <div class="card-content white-text">
				              <!--<span class="card-title">Card Title</span>-->
				              <p>A continuación te muestro algunos de mis trabajos basados en aplicaciones orientadas a la web y páginas web</p>
				            </div>
			          	</div>
			        </div>
			    </div>
			    <div class="row">
			        <div class="col s9 m4 centrar"> 	
					  	<div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator img" src="img/sgda.png">
						    </div>
						    <div class="card-content izq">
						      <span class="card-title activator white-text fuente">S.G.D.A<i class="material-icons right white-text">visibility</i></span>
						      
						      <p><a target="_blank" href="http://http://jesusmvs10.esy.es/">Ingresar</a></p>
						    </div>
						    <div class="card-reveal izq justif">
						      <span class="card-title grey-text text-darken-4">S.G.D.A<i class="material-icons right">close</i></span>
						      <p>Demo de Sistema De Gestión de Documentos Académicos realizado para la Unidad Educativa Anaco PDVSA.</p>
						      

						     

						    </div>
					  	</div>
			        </div>
			        <div class="col s9 m4 centrar"> 	
					  	<div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator img" src="img/siew.png">
						    </div>
						    <div class="card-content izq">
						      <span class="card-title activator white-text fuente">S.I.E.W<i class="material-icons right white-text">visibility</i></span>
						      <p><a target="_blank" href="http://sgda.jesusmvs10.net23.net/">Ingresar</a></p>
						    </div>
						    <div class="card-reveal izq justif">
						      <span class="card-title grey-text text-darken-4">S.I.E.W<i class="material-icons right">close</i></span>
						      <p>Demo de Sistema de Inscripción Escolar realizado con PHP Orientado a Objetos.</p>
						    </div>
					  	</div>
			        </div>
			        <div class="col s9 m4 centrar"> 	
					  	<div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator img" src="img/sp.png">
						    </div>
						    <div class="card-content izq">
						      <span class="card-title activator white-text fuente">S.P.<i class="material-icons right white-text">visibility</i></span>
						      <p><a target="_blank" href="http://seproactivo.com.ve/">Ingresar</a></p>
						    </div>
						    <div class="card-reveal izq justif">
						      <span class="card-title grey-text text-darken-4">S.P.<i class="material-icons right">close</i></span>
						      <p>Página web dedicada al emprendimiento online y a métodos para generar ingresos.</p>
						    </div>
					  	</div>
			        </div>
			        <div class="col s9 m4 centrar"> 	
					  	<div class="card">
						    <div class="card-image waves-effect waves-block waves-light">
						      <img class="activator img" src="img/estatic.png">
						    </div>
						    <div class="card-content izq">
						      <span class="card-title activator white-text fuente">Web<i class="material-icons right white-text">visibility</i></span>
						      <p><a target="_blank" href="http://estatic.jesusmvs10.net23.net/">Ingresar</a></p>
						    </div>
						    <div class="card-reveal izq justif">
						      <span class="card-title grey-text text-darken-4">Web<i class="material-icons right">close</i></span>
						      <p>Demo de Página web realizada para empresa de repuestos a medida</p>
						    </div>
					  	</div>
			        </div>


			    </div>
			</div>
		</div>
	</section>
    
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
      