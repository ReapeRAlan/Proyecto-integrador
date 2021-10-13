<?php
//Iniciando la sesión
session_start();
if (isset($_SESSION["userid"])){
  echo 'Prueaa';
}else{
  header("location: Login.php");
        exit();
}
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
  <style>


    .margin {
      margin-bottom: 45px;
    }

    .bg-1 {
      background-color: #1abc9c;
      /* Green */
      color: #ffffff;
    }

    .bg-2 {
      background-color: #474e5d;
      /* Dark Blue */
      color: #ffffff;
    }

    .bg-3 {
      background-color: #ffae00;
      /* White */
      color: #555555;
    }


    .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
    }
  </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top" id="Navbar">
    <script src="Script\NavBarP.js"></script>
  </nav>

  <div class="jumbotron text-center">
    <img src="img/Crowley logo.png" alt="Logo" width="300" height="300">
    <h1>
      <p>Bienvenido a Crowley</p>
    </h1>

  </div>

  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <h2>Empecemos con Crowley</h2><br>
        <h4>!Selecciona un Tema¡ </h4><br>
        <p>Elije el tema que quieras estudiar con crowley, empieza ahoa y da click en el tema preferido</p>
        <br> <a href="#temas" class="btn btn-info" role="button">Temas</a>
      </div>
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-book logo"></span>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-blackboard logo slideanim"></span>
      </div>
      <div class="col-sm-8">
        <h2>Crowley</h2><br>
        <h4><strong>Paso1:</strong> Seleccione el tema de preferencia y haga click en la imagen adjunta para poder empezar</h4><br>
        <h4><strong>Paso2:</strong> Disfrute de Crowley y sus paginas repletas de informacion referente al tema que ustéd eligió </h4>
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
  <!-- Second Container -->
<div id="temas" class="container-fluid bg-2 text-center">
  <h1>Temas</h1>
</div>
 <!-- First Container -->
<div class="container-fluid bg-1 text-center" >
  <h1 class="margin text-left">1</h1>
  <h3 class="container-fluid bg-2" style="background-color: black;">Aplicación de las propiedades mecánicas de los materiales </h3>
  
  <a href="temas/tema1.html" title="Tema"><img src="img/font.jpg" class="img-fluid " style="display:inline" alt="Bird" width="100%" ></a>
  <h3 class="container-fluid bg-2"style="background-color: black;" > Un resorte es un objeto que puede ser deformado por una fuerza y volver a su forma original en la ausencia de esta.Los resortes vienen en una gran variedad de formas diferentes, pero el muelle en espiral de metal es probablemente el más familiar. Los resortes son una parte esencial de casi todos los dispositivos mecánicos moderadamente complejos; desde bolígrafos a motores de coches de carreras</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <br>
  <br>
  <br>
</div>

 <!-- First Container -->
 <div class="container-fluid bg-1 text-center" style="background-color: blue;">
    <!-- Cambiar numero al numero de el tema siguiente -->
  <h1 class="margin text-left">1</h1>
   <!-- En el "style cambia el color a el de tu preferencia tomando en cuenta el color de la pagina -->
  <h3 class="container-fluid bg-2" style="background-color: black;">Aplicación de las propiedades mecánicas de los materiales </h3>
   <!-- Cambiar link a tema#.html que toque -->
  <a href="temas/tema1.html" title="Tema"><img src="img/font.jpg" class="img-fluid " style="display:inline" alt="Bird" width="100%" ></a>
   <!-- cambias la pequeña descripcion de el tema  y tambien cambia el color al mismo tono que la franja superior-->
  <h3 class="container-fluid bg-2"style="background-color: black;" > Un resorte es un objeto que puede ser deformado por una fuerza y volver a su forma original en la ausencia de esta.Los resortes vienen en una gran variedad de formas diferentes, pero el muelle en espiral de metal es probablemente el más familiar. Los resortes son una parte esencial de casi todos los dispositivos mecánicos moderadamente complejos; desde bolígrafos a motores de coches de carreras</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <br>
  <br>
  <br>
</div>
 <!-- First Container -->
 <div class="container-fluid bg-1 text-center" style="background-color: green;">
    <!-- Cambiar numero al numero de el tema siguiente -->
  <h1 class="margin text-left">1</h1>
   <!-- En el "style cambia el color a el de tu preferencia tomando en cuenta el color de la pagina -->
  <h3 class="container-fluid bg-2" style="background-color: black;">Aplicación de las propiedades mecánicas de los materiales </h3>
   <!-- Cambiar link a tema#.html que toque -->
  <a href="temas/tema1.html" title="Tema"><img src="img/font.jpg" class="img-fluid " style="display:inline" alt="Bird" width="100%" ></a>
   <!-- cambias la pequeña descripcion de el tema  y tambien cambia el color al mismo tono que la franja superior-->
  <h3 class="container-fluid bg-2"style="background-color: black;" > Un resorte es un objeto que puede ser deformado por una fuerza y volver a su forma original en la ausencia de esta.Los resortes vienen en una gran variedad de formas diferentes, pero el muelle en espiral de metal es probablemente el más familiar. Los resortes son una parte esencial de casi todos los dispositivos mecánicos moderadamente complejos; desde bolígrafos a motores de coches de carreras</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <br>
  <br>
  <br>
</div>
 <!-- First Container -->
 <div class="container-fluid bg-1 text-center" style="background-color: black;">
    <!-- Cambiar numero al numero de el tema siguiente -->
  <h1 class="margin text-left">1</h1>
   <!-- En el "style cambia el color a el de tu preferencia tomando en cuenta el color de la pagina -->
  <h3 class="container-fluid bg-2" style="background-color: white; color:black;">Aplicación de las propiedades mecánicas de los materiales </h3>
   <!-- Cambiar link a tema#.html que toque -->
  <a href="temas/tema1.html" title="Tema"><img src="img/font.jpg" class="img-fluid " style="display:inline" alt="Bird" width="100%" ></a>
   <!-- cambias la pequeña descripcion de el tema  y tambien cambia el color al mismo tono que la franja superior-->
  <h3 class="container-fluid bg-2"style="background-color: white; color:black;" > Un resorte es un objeto que puede ser deformado por una fuerza y volver a su forma original en la ausencia de esta.Los resortes vienen en una gran variedad de formas diferentes, pero el muelle en espiral de metal es probablemente el más familiar. Los resortes son una parte esencial de casi todos los dispositivos mecánicos moderadamente complejos; desde bolígrafos a motores de coches de carreras</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <br>
  <br>
  <br>
</div>
 <!-- First Container -->
 <div class="container-fluid bg-1 text-center" style="background-color: purple;">
    <!-- Cambiar numero al numero de el tema siguiente -->
  <h1 class="margin text-left">1</h1>
   <!-- En el "style cambia el color a el de tu preferencia tomando en cuenta el color de la pagina -->
  <h3 class="container-fluid bg-2" style="background-color: black;">Aplicación de las propiedades mecánicas de los materiales </h3>
   <!-- Cambiar link a tema#.html que toque -->
  <a href="temas/tema1.html" title="Tema"><img src="img/font.jpg" class="img-fluid " style="display:inline" alt="Bird" width="100%" ></a>
   <!-- cambias la pequeña descripcion de el tema  y tambien cambia el color al mismo tono que la franja superior-->
  <h3 class="container-fluid bg-2"style="background-color: black;" > Un resorte es un objeto que puede ser deformado por una fuerza y volver a su forma original en la ausencia de esta.Los resortes vienen en una gran variedad de formas diferentes, pero el muelle en espiral de metal es probablemente el más familiar. Los resortes son una parte esencial de casi todos los dispositivos mecánicos moderadamente complejos; desde bolígrafos a motores de coches de carreras</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <br>
  <br>
  <br>
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
    $(document).ready(function() {
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
          }, 900, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $(window).scroll(function() {
        $(".slideanim").each(function() {
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