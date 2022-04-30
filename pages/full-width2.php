<?php
  include '../layout/funciones_php/funciones.php'
?>

<!DOCTYPE html>
<!--
Template Name: Foxclore
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Tecnología 5G VS 3G</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/1211.jpg');">
  <!-- ################################################################################################ -->
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_quarter first">
      <h1><a href="index.html">Tecnología 5G</a></h1>
      <p>Impacto en la sociedad</p>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="https://api.whatsapp.com/send?phone=4433452459&text=Hola, Nececito mas informacion sobre la Tecnología 5G!" target="_blank"><i class="fas fa-phone"></i></a> <span><strong>Llamanos al:</strong> +52 (443) 345 2459</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="mailto:israelnava2001@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a> <span><strong>Envianos un Email a:</strong> israelnava2001@gmail.com</span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <section id="navwrapper" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <nav id="mainav">
      <ul class="clear">
        <li ><a href="../index.html">Inicio</a></li>
        <li><a class="drop" href="#">Acerca de...</a>
          <ul>
            
            <li><a href="../pages/01-5G.html">¿Qué es el 5G?</a></li>
            <li><a href="../pages/02-historia.html">Historia del 5G</a></li>
            <li><a href="../pages/03-caracteristicas.html">Características</a></li>
         </ul>
        </li>
        <li><a class="active" href="#">Implicaciones</a>
          <ul>
            <li><a href="../pages/11-mundo.html">En el Mundo</a></li>
            <li><a href="../pages/12-mexico.html">En México</a></li>
            <li><a class="drop" href="#">Noticias</a>
              <ul>
                <li><a href="../pages/04-aviacion.html">5G y Aviación en EU</a></li>
                <li><a href="../pages/13-expansion.html">Expansión 5G</a></li>
                <li><a href="../pages/05-consecuencias.html">Consecuencias del 5G</a></li>
                <li><a href="../pages/14-paises.html">Paises con más desconfianza al 5G</a></li>
                <li><a href="../pages/06-5GAumento.html">2025: 5G aumentará 147 millones de subscriptores</a></li>
                <li><a href="../pages/15-ericcson.html">Ericcson y el 5G</a></li>
                <li><a href="../pages/16-mas.html">Tecnología 5G ¿Más que un avance tecnológico?</a></li>
              </ul>
            </li>
            <li><a href="../pages/07-Mitos.html">Mitos</a>
            <li><a href="../pages/08-avances.html">Avances</a>
          </ul>
        </li>
        <li><a href="../pages/gallery.html">Galería</a></li>
        <li><a class="drop" href="#">Ventajas y Desventajas</a>
        <ul>
          <li><a href="../pages/09-ventajas.html">Ventajas de la Tecnología 5G</a></li>
          <li><a href="../pages/17-desventajas.html">Desventajas de la Tecnología 5G</a></li>
          <li><a href="../pages/10-5gvs4g.html">5G vs 4G</a></li>
        </ul>
        </li>
        <li><a class="drop" href="#">Dispositivos</a>
        <ul>
          <li class="active"><a href="../pages/full-width.html">Móviles 5G</a></li>
          <li><a href="../pages/18-routers.html">Roúters</a></li>
        </ul>
        <li class="active"><a  href="#">Comentarios</a>
      </li>
       
      </ul>
    </nav><!-- ################################################################################################ -->
    <div id="searchform">
      <div>
        <form action="#" method="post">
          <fieldset>
            <legend>Búsqueda rápida:</legend>
            <script async src="https://cse.google.com/cse.js?cx=9ef9724d72fbb14cf"></script>
            <div class="gcse-search"></div>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </section>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Dispositivos móviles</h6>
    <ul>
      <li><a href="../index.html">Inicio</a></li>
      <li><a href="#">Comentarios Públicos</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1>Comentarios Públicos</h1>
      
      <div id="comments">
        <h2 id="titulo2">Comentarios Recientes</h2>
        <ul id="area_comentarios"> 
          <?php echo $mostrar; //Mostrar todos los comentarios que tenga registrados
          ?>
        </ul>
        <h2 id="titulo3">Suscribete para más contenido y cuentanos tu experiencia:</h2>
        <form action="#" method="post">
          <div class="one_third first">
          <label for="name">Tu Nombre: <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Correo Electrónico: <span>*</span></label>
            <div class="error" id="error-email"></div>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="phone">Número de Teléfono</label>
            <div class="error-tel" id="error-phone"></div>
            <input type="phone" name="phone" id="phone" value="" size="22">
          </div>
          
          <div class="block clear">
            <label for="comment">Tu comentario:<span>*</span></label>
            <textarea name="comment" id="comment" cols="25" rows="10" required></textarea> <!--Required para pedir tipo de dato-->
          </div>
          <div class="one_third">
            <input type="checkbox" name="terminos" id="terminos" value="terminos"/> 
            <label for= "terminos">Acepta los términos y condiciones </label>
          </div>
          <div>
            <input type="submit" name="submit" value="Enviar Comentario" id="btn_comentario" onclick="validarFormulario()">
    
            &nbsp;
            <input type="reset" name="reset" value="Reiniciar el Formulario">
          </div>
        </form>
      </div>
      <div class="block clear">
      
        

<button  style="background-color: #8a170e;"><a href="10-5gvs4g.html" style="color: aliceblue;" class="fas fa-arrow-alt-circle-left"> Atras (5G vs 5G) </a></button>

<button  style="background-color: #085c0f;"><a href="18-routers.html" style="color: aliceblue;" class="fas fa-arrow-alt-circle-right"> Siguiente (Roúters 5G) </a></button></div>
    </div>
       <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay row4" style="background-image:url('../images/demo/backgrounds/1112.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h6 class="heading">Tecnología 5G</h6>
      <ul class="faico clear">
        <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
      <p class="nospace">Noticias, videos, boletines más relevantes, solo los encuentras aquí xD.</p>
    </div>
    <!-- ################################################################################################ -->
    <hr class="btmspace-50">
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Suscribete para más!!</h6>
      <p class="nospace btmspace-15">Te gustaría recibir más notificaciones sobre los avances de esta tecnología. Solo subscribete! Es gratis!!</p>
      <form action="#" method="post" id="formulario">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" id="nombre" type="text" value=""  placeholder="Name" name="nombre">
          <input class="btmspace-15" type="text" value="" placeholder="Email" name="email">
          <button type="submit" value="submit">Suscribirse</button>
        </fieldset>
      </form>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Comentarios destacados:</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">Me pude informar acerca de la tecnología 5G</a></p>
            <time class="block font-xs" datetime="2045-04-06">Miercoles, 22<sup>de</sup> Marzo 2022</time>
          </article>
        </li>
        <li>
          <article>
            <p class="nospace btmspace-10"><a href="#">La estancia en la página web está agradable.</a></p>
            <time class="block font-xs" datetime="2045-04-05">Miercoles, 23<sup>de</sup> Marzo 2022</time>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Más en este sitio...</h6>
      <ul class="nospace linklist">
        <li><a href="05-consecuencias.html">Consecuencias 5G</a></li>
        <li><a href="07-Mitos.html">Mitos 5G</a></li>
        <li><a href="12-mexico.html">Impacto en México</a></li>
        <li><a href="full-width.html">Móviles compatibles con 5G</a></li>
        <li><a href="09-ventajas.html">Ventajas del 5G</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Te podría interesar...</h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="04-aviacion.html"><img src="../images/demo/001A.jpg" alt=""></a></li>
        <li><a class="imgover" href="06-aumento.html"><img src="../images/demo/002.jpg" alt=""></a></li>
        <li><a class="imgover" href="07-Mitos.html"><img src="../images/demo/003.jpeg" alt=""></a></li>
        <li><a class="imgover" href="08-avances.html"><img src="../images/demo/004.jfif" alt=""></a></li>
        <li><a class="imgover" href="05-consecuencias.html"><img src="../images/demo/005.jpg" alt=""></a></li>
        <li><a class="imgover" href="15-ericson.html"><img src="../images/demo/006.jpg" alt=""></a></li>
        <li><a class="imgover" href="02-historia.html"><img src="../images/demo/1410.jpg" alt=""></a></li>
        <li><a class="imgover" href="09-ventajas.html"><img src="../images/demo/1012_.png" alt=""></a></li>
        <li><a class="imgover" href="11-mundo.html"><img src="../images/demo/1011.jpg" alt=""></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left" id="copyrigth">Copyright &copy; 2022 - Todos los derechos reservados - <a href="#">Tecnología5G</a></p>
    <p class="fl_right">Desarrollado por <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">Israel345 Nava Reyes</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../layout/scripts/app.js"></script> <!--Clase del día de hoy "Vincular JS"-->
<script src="../layout/scripts/funciones.js"></script>
<script>
  function validarFormulario(correo, telefono){
    let re = /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
    let rt = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/
    if (!re.test(correo)) {
      document.getElementById('error-email').innerHTML = "Correo Inválido xD";
      setTimeout(function(){
        document.getElementById('error-email').innerHTML = "";
      },2000);
    }

  if (!rt.test(telefono)) {
      document.getElementById('error-phone').innerHTML = "Teléfono Inválido xD";
      setTimeout(function(){
        document.getElementById('error-phone').innerHTML = "";
      },2000);
    }

  let condiciones = document.getElementById("terminos");
  if (!condiciones.checked){
    alert("Debes aceptar todos los términos y condiciones.");
    return false;
  }
  }
</script>
</body>
</html>