<?php
//Iniciando la sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="CSS\Estilo.css" rel="stylesheet">
  
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top" id="Navbar">
    <script src="Script\NavBar.js"></script>
</nav>

<div class="jumbotron text-center">
  <img src="img/Crowley logo.png" alt="Logo" width="300" height="300">
  <p>La mejor manera de aprender Fisica</p> 
 
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Acerca de Crowley</h2><br>
      <h4>Excelente para alumnos </h4><br>
      <p>Crowley tiene cientos de explicaciones en las cuales los que apenas están aprendiendo puedan obtener informacion fundamental en cuanto a la fisica.  es una creacion de varios expertos en el tema los cuales dieron su tiempo y esfuerzo para poder crear este sitio web, el cual se basa en la Fisica y el inglés para dar a conocerse por todo el mundo</p>
      <br>  <a href="Registro.php" class="btn btn-info" role="button">Registrate Gratis</a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Que ofrece Crowley?</h2><br>
      <h4><strong>Globalizacion:</strong> Crowley da la opcion de que todo su contenido esté tanto en inglés como en español y proximamente en Ruso, esto facilita a los usuarios el poder entender toda la información que Crowley tiene para ti!</h4><br>
      <p><strong>Extra:</strong> Crowley es una division de Ghost Corp la cual ofrece información referente a la fisica moderna, el nombre fue inspiracion de el alquimista Aleister Crowley el cual hizo una revolucion en la ciencia moderna, a el le debemos el gran conocimiento que poseemos en la actualidad. </p>
    </div>
  </div>
</div>



<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Comentarios de gente satisfecha</h2><br>
  <h4>!Forma parte de este Grupo¡</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/PersonaFalsa1.png" alt="Paris" width="400" height="300">
        <img src="img/5Strellas.jpg" alt="New York" width="50" height="100">
        <p><strong>Emerson Francis</strong></p>
        <p><h4>"Crowley es increible, aprendí fisica en unos cuantos meses..."</h4></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/PersonaFalsa2.png" alt="Paris" width="400" height="300">
        <img src="img/5Strellas.jpg" alt="New York" width="50" height="100">
        <p><strong>Karla Bell</strong></p>
        <p><h4>"Crowley is amazing, I learned physics in a few months..."</h4></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/PersonaFalsa3.png" alt="Paris" width="400" height="300">
        <img src="img/5Strellas.jpg" alt="New York" width="50" height="100">
        <p><strong>Wadim Louk</strong></p>
        <p><h4>"Кроули потрясающий, я выучил физику за несколько месяцев..."</h4></p>
      </div>
    </div>
  </div><br>
  
  <h2>Ve lo que dicen nuestros usuarios en tiempo real</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
      <div class="item">
        <h4>"Эта компания самая лучшая. Я так довольна результатом!"<br><span>valireto, военный , член</span></h4>
      </div>
      <div class="item">
        <h4>"Es Simplemente increible lo que hacen"<br><span>Loera Joaquín, Si no le gustaba nos iba a matar , Narcotraficante</span></h4>
      </div>
      <div class="item">
        <h4>"Crowley es lo mejor. ¡Estoy tan feliz con el resultado!"<br><span>Juan Perez, Estudiante, Reprobó Fisica</span></h4>
      </div>
      <div class="item">
        <h4>"It's just amazing what they do"<br><span>frederich Nitch, cientist, Famous</span></h4>
      </div>
      
    </div>
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>PRO +</h2>
    <h4>Elije la que mejor se adapte a tu presupuesto</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basico</h1>
        </div>
        <div class="panel-body">
            <p><span class="glyphicon glyphicon-bullhorn "></span><strong> +</strong> Contenido completo</p>
          <p><span class="glyphicon glyphicon-signal "></span><strong> +</strong> Compartir con amigos</p>
          <p><span class="glyphicon glyphicon-log-in "></span><strong> +</strong> Más Cuentas</p>

        </div>
        <div class="panel-footer">
          <h3>$399</h3>
          <h4>por mes</h4>
          <a href="Registro.php" class="btn btn-lg" role="button">Registrate </a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
            <h1>PRO</h1>
          </div>
          <div class="panel-body">
              <p><span class="glyphicon glyphicon-bullhorn "></span><strong> +</strong> Contenido completo</p>
            <p><span class="glyphicon glyphicon-signal "></span><strong> +</strong> Compartir con amigos</p>
            <p><span class="glyphicon glyphicon-log-in "></span><strong> +</strong> Más Cuentas</p>
            <p><span class="glyphicon glyphicon-phone "></span><strong> +</strong> soporte las 24hrs</p>
            <p><span class="glyphicon glyphicon-king "></span><strong> +</strong> Opciones exclusivas</p>
          </div>
          <div class="panel-footer">
            <h3>$666</h3>
            <h4>por mes</h4>
            <a href="Registro.php" class="btn btn-lg" role="button">Registrate </a>
          </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
            <h1>Empresarial</h1>
          </div>
          <div class="panel-body">
              <p><span class="glyphicon glyphicon-bullhorn "></span><strong> +</strong> Contenido completo</p>
            <p><span class="glyphicon glyphicon-signal "></span><strong> +</strong> Compartir con amigos</p>
            <p><span class="glyphicon glyphicon-log-in "></span><strong> +</strong> Más Cuentas</p>
            <p><span class="glyphicon glyphicon-phone "></span><strong> +</strong> soporte las 24hrs</p>
            <p><span class="glyphicon glyphicon-king "></span><strong> +</strong> Opciones exclusivas</p>
            <p><span class="glyphicon glyphicon-edit "></span><strong> +</strong> Soporte Tecnico especializado</p>
            <p><span class="glyphicon glyphicon-cloud-download"></span><strong> +</strong> Proyectos conjuntos</p>
          </div>
          <div class="panel-footer">
            <h3>$1593</h3>
            <h4>por mes</h4>
            <a href="Registro.php" class="btn btn-lg" role="button">Registrate </a>
          </div>
      </div>      
    </div>    
  </div>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h2>Beneficios con PRO +</h2>
    <h4>Que ofrecemos?</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-folder-open logo-small"></span>
        <h4>Todo el Contenido</h4>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-book logo-small"></span>
        <h4>Soporte para Estudiantes</h4>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-lock logo-small"></span>
        <h4>Seguridad</h4>
      </div>
    </div>
    <br><br>
    <div class="row slideanim">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-leaf logo-small"></span>
        <h4>Nada en Fisico</h4>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-bookmark logo-small"></span>
        <h4>Profesionales</h4>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench logo-small"></span>
        <h4 style="color:#303030;">Soporte Tecnico</h4>
      </div>
    </div>
  </div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACTANOS</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contactanos y te responderemos en las proximas 24hrs</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> AGS. Mexico</p>
      <p><span class="glyphicon glyphicon-phone"></span> +52 1 449 5574342</p>
      <p><span class="glyphicon glyphicon-envelope"></span> ghost.corp.inc@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comentario" name="comentario" placeholder="Comentario" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>



<footer class="container-fluid text-center">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Tema hecho por <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a> y adaptado para fines educativos</p>
  <p>Crowley una subdivision de Ghost Corp </p>
</footer>

<script>
     
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('php, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>