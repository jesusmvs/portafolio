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
     //$('.collapsible').collapsible();
     //$('.button-collapse').sideNav('show');

     $("#slide-out" ).hover(
      function() {
        $(this).addClass('mantener-scroll');
      }, function() {
        if ($.browser.mozilla) {
          $(this).removeClass('mantener-scroll');
        }        
      }
    );
  </script>
   
  </body>
</html>