

<?php
if(isset($_POST['phone'])) {
 
    if ($_POST['btn-action']=='desktop') {
    
      $message  = $_POST['message']; // no requerido 
      $phone    = $_POST['phone'];
      $name     = $_POST['name'];

      $prospect = ' Hola mi nombre es: '.$name.' Teléfono: '.$phone.' Mensaje: '.$message;

      $prospect= str_replace(' ', '%20', $prospect);

      echo "<script>window.location.href='https://web.whatsapp.com/send?phone=525591972073&text=".$prospect."','_blank';</script>";
 
    }
    

    if ($_POST['btn-action']=='mobil') {
    
      $message  = $_POST['message']; // no requerido 
      $phone    = $_POST['phone'];
      $name     = $_POST['name'];

      $prospect = ' Hola mi nombre es: '.$name.' Teléfono: '.$phone.' Mensaje: '.$message;

      $prospect= str_replace(' ', '%20', $prospect);

      echo "<script>window.location.href='https://wa.me/525591972073?&text=".$prospect."','_blank';</script>";
 
    }

}
 
?>
