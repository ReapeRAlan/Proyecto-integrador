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
    <script src="Script\LnavBar.js"></script>
  </nav>

  <div class="jumbotron text-center">
    <img src="img/Crowley logo.png" alt="Logo" width="300" height="300">
    <p>La mejor manera de aprender Fisica</p>

  </div>

  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <h2>Inicia Seción</h2>
      <form action="includes/login.inc.php" method="post">
        <div class="form-floating md-form">
          <input type="text" name="uid" class="form-control mb-4" placeholder="ID de usuario">
          <label for="floatingInput">ID de usuario</label>
        </div>
        <div class="form-floating md-form">
          <input type="password" name="pwd" class="form-control mb-4" placeholder="Contraseña">
          <label for="floatingInput">Contraseña</label>
        </div>
        <button type="submit" name="submit" class="btn btn-dark btn-block">Entrar</button><br><br>
      </form>
    </div>
  </div>
  <div class="error-handler">
    <?php
    //Manejo de errores
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo '
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error:</strong> Los campos no deben estar en blanco.
        </div>
    
        ';
      } else if ($_GET["error"] == "wronglogin") {
        echo '
        <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error:</strong> Datos de acceso incorrecto.
        </div>
        ';
      } else if ($_GET["error"] == "stmtfailed") {
        echo '
                <div class="alert alert-danger">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Error:</strong> Algo salió mal, vuelve a intentarlo.
                </div>
        ';
      }
    }
    ?>
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