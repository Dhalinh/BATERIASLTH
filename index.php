<!DOCTYPE html>
<!-- DHALI DEVS -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59G6FHX');</script>
<!-- End Google Tag Manager -->

  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Empresa Orgullosamente Mexicana, Líder en la Venta de Baterías, Motobaterías, Filtros y Lubricantes en CDMX y el Área Metropolitana">
    <meta name="theme-color" content="#111">
    
    <title>Baterias LTH</title>


    <link href="./images/icons/icon.png" rel="shortcut icon">
    <!-- reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <meta data-rh="true" property="og:site_name" content="Baterías LTH">
    <meta data-rh="true" property="og:image" content="https://bateriaslthmexico.com.mx/images/banner-03.jpg">
    <meta data-rh="true" property="og:image:alt" content="Baterías LTH">
    <meta data-rh="true" property="og:url" content="https://bateriaslthmexico.com.mx/">


    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>


</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59G6FHX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- alert confirm -->
<?php if(isset($_GET['options'])){
}else{
?>
<script type="text/javascript">
    $(document).ready(function() {
      setTimeout(function() {
        $('.modal').toggle();
      },6000);
    });
</script>
<?php }
?>


    <!-- alert confirm -->
  <?php if(isset($_GET['options'])){?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
      $( document ).ready(function() {
      Swal.fire({
          icon: 'success',
          title:'Gracias por contactarnos',
          text: 'Un ejecutivo se comunicará contigo en un momento.',
          /*showCloseButton: true,*/
          focusConfirm: false,
          timerProgressBar: true,
          confirmButtonText:
          'Continuar',
          confirmButtonAriaLabel: 'Send'
        });
        });
    </script>
  <?php }?>


    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <nav class="navbar">
        <div class="max-width">
            <div class="logo" style="width: 20%;">
                <img src="images/logo/logo-1.png" onclick="window.location.href='./'">
                
            </div>
            <ul class="menu">
                <li><a href="" class="menu-btn">Servicio a domicilio de lunes a domingo y días festivos</a></li>
            <!--
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            -->
                <li id="call-to-content" onclick="window.location.href='tel:5575839622'">
                   <img src="images/icons/phone.svg">
                   <div>
                       <h3><small>¡ Pídela Ahora !</small><br>
                       55 7583 9622 </h3>
                   </div>
                </li>
            </ul>
            
            <div class="menu-btn">
                <button id="boton-p" onclick="window.location.href='tel:5575839622';"><i class="fas fa-phone-alt"></i> 55 7583 9622
                </button>
            </div>
    
        </div>
    </nav>

    <!-- home section start -->
    <div id="carousel-p" class="owl-carousel owl-theme">

    <div class="item">
    <section class="home" id="home">
        <span class="fondo-0"></span>
      <div class="max-width">
            <div class="home-content">
                <div class="text-1">Baterías <strong>LTH</strong></div>
                <div class="text-2">Servicio a domicilio <br>sin costo, <small>¡En 60 min!</small></div>
                <div class="text-3"><i class="fas fa-car-battery" style="color: #efb404;"></i> <span class="typing"></span></div>
                <a href="tel:5591972073">Contacto</a>
                <ul id="view-products" >
                    <li><img src="images/products/FULL POWER.png" style="width: 100%;"></li>
                    <li><img src="images/products/LTH.png" style="width: 100%;"></li>
                </ul>
            </div>
      </div>
    </section>
    </div>
    <div class="item">
    <section class="home america" id="home" style="background: url(images/naranja_desk.jpg) no-repeat center;">
        <!--<span class="fondo-0"></span>--->
      <div class="max-width" style="justify-content: end;">
            <div class="home-content">
                <span id="movil" class="img-prom">
                    <img src="images/ame_movil.png">
                </span>

                <div class="text-1">Baterías <strong>LTH</strong></div>
                <div class="text-2">Asistencia vial con <br> America Racing</div>
                <div class="text-3"><i class="fas fa-car-battery" style="color: #efb404;"></i> <span>Baterías</span></div>
                <a href="tel:5591972073">Contacto</a>

                <span id="resp" class="img-prom">
                    <img src="images/ame.png">
                </span>
            </div>
      </div>
    </section>
    </div>
    <div class="item">
    <section class="home" id="home" style="background: url(images/banner-01.jpg) no-repeat center;">
        <span class="fondo-0"></span>
      <div class="max-width">
            <div class="home-content">
                <div class="text-1">Baterías <strong>LTH</strong></div>
                <div class="text-2">¡Salvamos tu día, <br>llevamos tu batería!</div>
                <div class="text-3"><i class="fas fa-car-battery" style="color: #efb404;"></i> <span>Baterías</span></div>
                <a href="tel:5591972073">Contacto</a>
                <ul id="view-p-3">
                    <li id="resp"><img src="images/products/CRONOS.png" style="width: 100%;"></li>
                    <li><img src="images/products/AMERICA.png" style="width: 100%;"></li>
                    <li><img src="images/products/LTH.png" style="width: 100%;"></li>
                    <li><img src="images/products/FULL POWER.png" style="width: 100%;"></li>
                    <li id="resp"><img src="images/products/AGM.png" style="width: 100%;"></li>
                </ul>

            </div>
      </div>
    </section>
    </div>
</div>

    <script type="text/javascript">
        $('#carousel-p').owlCarousel({
              center: true,
              items:2,
              dots: false,
              loop:true,
              margin:0,
              autoplay:true,
              autoplayTimeout:5000,
              autoplayHoverPause:false,
              responsive:{
                0:{
                  items: 1
                },
                600:{
                  items: 1
                },
                1000:{
                  items: 1
                }
            }
        });
    </script>
    <!---<div style="width: 100%;height: 20px;background: #092655;"></div>--->
    <section class="banner-center">
        <span class="fondo-0"></span>
        <div class="max-width">
            <h2>¡Promoción a 3, 6, y 9 meses sin intereses!</h2>
        </div>
    </section>

    <!-- about section start -->
    
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Servicios</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/meca.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text" style="display: none;"><span class="typing-2"></span></div>
                    <ul>
                        <li><img src="./images/icons/bat.svg"><br><p>Venta de Baterías</p></li>
                        <li><img src="./images/icons/moto.svg"><br><p>Venta de MotoBaterías</p></li>
                        <li><img src="./images/icons/mecanico.svg"><br><p>Instalacion a Domicilio</p></li>
                        <li><img src="./images/icons/tools.svg"><br><p>Diagnostico de Baterías</p></li>
                    </ul>
                    <a href="#contact">Contacto</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <span class="opacity"></span>
        <div class="max-width" style="position: relative;">
            <h2 class="title" style="color: #222;">Proceso</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-phone-volume"></i>
                        <div class="text">Nos contactas</div>                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-tools"></i>
                        <div class="text">Te asesoramos</div>                    
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-business-time"></i>
                        <div class="text">Vamos de inmediato</div>                    
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fas fa-credit-card"></i>
                        <div class="text">Pago contra entrega</div>                    
                    </div>
                </div>

               </div>
            </div>
        </div>
    </section>


    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Productos</h2>
            <div class="new-products">
                <ul>
                    <li onclick="window.location.href='tel:5591972073'">
                        <img src="images/products/LTH.png">
                        <button >Cotiza ahora</button>
                    </li>
                    <li onclick="window.location.href='tel:5591972073'">
                        <img src="images/products/AMERICA.png">
                        <button >Cotiza ahora</button>
                    </li>
                    <li onclick="window.location.href='tel:5591972073'">
                        <img src="images/products/FULL POWER.png">
                        <button >Cotiza ahora</button>
                    </li>
                    <li onclick="window.location.href='tel:5591972073'">
                        <img src="images/products/MOTO BATERIA.png">
                        <button >Cotiza ahora</button>
                    </li>
                    <li onclick="window.location.href='tel:5591972073'">
                        <img src="images/products/OPTIMA.png">
                        <button >Cotiza ahora</button>
                    </li>                 
                </ul>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <span class="fondo-image"></span>
        <div class="max-width">
            <h2 class="title">Garantía de satisfacción</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/pago-1.jpg" alt="">
                        <div class="text">Servicio a domicilio</div>
                        <p></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/pago-2.jpg" alt="">
                        <div class="text">Atención personalizada</div>
                        <p></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/pago-3.jpg" alt="">
                        <div class="text">Servicio <br>express</div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact" >
        <span class="opacity"></span>
        <div class="max-width" style="position: relative;">
            <h2 class="title">Contacto</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Quiénes somos</div>
                    <p>Empresa Orgullosamente Mexicana, Líder en la Venta de Baterías, Motobaterías, Filtros y Lubricantes en CDMX y el Área Metropolitana</p>
                    <br>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-clock"></i>
                            <div class="info">
                                <div class="head">Servicio</div>
                                <div class="sub-title">Lunes a Domingo de 7:00 am a 22:00 pm</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt" style="margin-left: 4px;"></i>
                            <div class="info">
                                <div class="head">Dirección</div>
                                <div class="sub-title">CDMX y Area Metropolitana</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">contacto@bateriaslthmexico.com.mx</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right" style="background: #fff; padding: 5%;box-shadow: 0 0.15rem 1.75rem 0 rgb(31 45 65 / 15%);">
                    <div class="text">Escríbenos</div>
                    <form class="contact-form" action="send_form_email.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <label>Nombre</label>
                                <input type="text" name="name" class="fullname" placeholder="Juan" required="required">
                            </div>
                            <div id="input-e" class="field email">
                                <label>Correo</label>
                                <input type="mail" name="mail" class="email-input" placeholder="ejemplo@gmail.com" required="required">
                            </div>
                        </div>
                        <br>
                        <div class="field">
                            <label>Teléfono</label>
                            <input type="phone" name="phone" class="subject" placeholder="55 5555 5555" required="required">
                        </div>
                        <br>
                        <div class="field textarea">
                            <label>Mensaje</label>
                            <textarea class="message" name="mensaje" cols="30" rows="10" placeholder="Hola estoy interesado en cotizar" required="required"></textarea>
                        </div>
                        <br>
                        <div class="g-recaptcha" data-sitekey="6Ldar6EUAAAAAIxqUUFFXgkb59qX-Grs73y96XSg"></div>
                        <div class="button-area">
                            <button class="send-msg" type="submit" name="send">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!-- bitton whatsApp-->
   <a href="https://api.whatsapp.com/send/?phone=525591972073&text=Me+interesa+una+bater%C3%ADa"> <button class="button-whatsapp" 
      onclick="window.open('https://wa.me/525591972073?text=<?php 
      echo(str_replace(' ', '%20', 'Me interesa una batería')) ?>');" 
      >
        <p><i class="fab fa-whatsapp"></i></p><h2>Cotiza ahora</h2>
    </button></a>


    <script type="text/javascript">
          $(document).ready(function(){ //Hacia arriba
      irArriba();
    });

    function irArriba(){
      $('.ir-arriba').click(function(){ $('body,html').animate({ scrollTop:'0px' },1000); });
      $(window).scroll(function(){
        if($(this).scrollTop() > 0){ $('.ir-arriba').slideDown(600); }else{ $('.ir-arriba').slideUp(600); }
      });
    $(window).scroll(function(){

              if($(this).scrollTop() > 0){

                $('.ir-arriba').slideDown(600);

                $('.box-logo').addClass('box-logo-down');

                $('.button-whatsapp').addClass('button-whatsapp-ative');

              }else{ 

                $('.ir-arriba').slideUp(600);

                $('.box-logo').removeClass('box-logo-down');

                $('.button-whatsapp').removeClass('button-whatsapp-ative');
              }

            });
      
      $('.ir-abajo').click(function(){ $('body,html').animate({ scrollTop:'1000px' },1000); });
    }
    </script>


    </div>

    <!-- footer section start -->
    <footer>
        <ul class="final">
            <li onclick="window.open('./doc/aviso.pdf');"> Términos y condiciones</li>
            <li>
                <span onclick="window.location.href='mailto:contacto@bateriaslthmexico.com.mx';">
                    <i class="far fa-envelope"></i> 
                    contacto@bateriaslthmexico.com.mx</span><br>
                <span onclick="window.location.href='tel:5575839622';">
                    <i class="fas fa-phone" style="transform: rotate(90deg);"></i> 
                    55 7583 9622</li></span>

            <li>Aceptamos Tarjetas de Crédito y Débito <br><img src="images/pago-4.png"></li>
        </ul>

        <span>Created By <a href="https://dimarketing.com.mx">DIMARKETING</a> | <span class="far fa-copyright"></span> 2021</span>
    </footer>

    <!-- POP --->
    <?php  include 'modal/pop.php';?>

    <script src="script.js"></script>
</body>
</html>
