
<script type="text/javascript">
      window.onload = function() {
      var recaptcha = document.forms["formulario"]["g-recaptcha-response"];
      recaptcha.required = true;
      recaptcha.oninvalid = function(e) {
        // si la función es null abrir alert
        alert("Completa el formulario");
      }
    }
</script>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
    <div class="content-modal">
    	<h1>¡No te vayas!</h1>
    	<p>Queremos darte 5% de descuento en tu primera compra</p>

    	<form action="sender.php" method="POST" name="formulario">
    		<input type="hidden" name="origin" value="bateriaslthmexico.com.mx">
        <input type="hidden" name="message" value="5% de descuento en primera compra">
    		<input type="text" name="email" required="required" placeholder="ejemplo@gmail.com">
        <center><div class="g-recaptcha" data-sitekey="6Ldar6EUAAAAAIxqUUFFXgkb59qX-Grs73y96XSg"></div></center>
    		<button type="submit" name="send" value="pop">¡Obtén 5% de descuento!</button>
    	</form>

    	<h6 class="no">No gracias prefiero pagar más</h6>
    </div>
  </div>

</div>
<script>
 	 $('.close').click(function(){
      $('.modal').toggle();
    });

 	 $('.no').click(function(){
      $('.modal').css("display","none");
    });

</script>