<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    
    <div class="content-modal">
    	<h1>¡No te vayas!</h1>
    	<p>Queremos darte un descuento especial en tu primera compra</p>

    	<form action="sender.php" method="POST" name="formulario">
        <input type="hidden" name="message" value="Quiero obtener mi descuento">

        <div class="inputs-div">
          <input type="text" name="name" placeholder="Nombre" required="required">
          <input type="tel" name="phone" placeholder="55 5555 5555" required="required">
        </div>
    		<button class="desktop" type="submit" name="btn-action" value="desktop">Obtener descuento <i class="fab fa-whatsapp"></i></button>

        <button class="mobil" type="submit" name="btn-action" value="mobil">Obtener descuento <i class="fab fa-whatsapp"></i></button>
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

    $(document).ready(function(){
      $(document).mousemove(function(event){
        $('#coordenadas').text(event.pageX + ", " + event.pageY);

        if(event.pageY<=38){
          document.getElementById("myModal").style.display = "block";
   
        }
         
      });
    });

   function cerrar(){
    document.getElementById("myModal").style.display = "block";
   }

</script>