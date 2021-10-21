<?php
//Iniciando la sesión
session_start();
if (isset($_SESSION["userid"])){
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
    <?php 
   
    ?>
    <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                     
      </button>
      <a class="navbar-brand" href="Inicio.php">Crowley</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <?php
         if (isset($_SESSION["userid"])){
          if($_SESSION["typeu"] == 'Cliente'){
             
              echo '<li class="nav-item"><a class="nav-link" href="modificar.php"><i class="glyphicon glyphicon-user"></i>'.$_SESSION["userid"].' ['.$_SESSION["typeu"].']</a></li>';
            
          } else if ($_SESSION["typeu"] = 'Administrador'){
            
             echo '<li class="nav-item"><a class="nav-link" href="modificar.php"><i class="glyphicon glyphicon-user"></i> '.$_SESSION["userid"].' ['.$_SESSION["typeu"].']</a></li>';
            
          }
          
      } 
    
        ?>
        <li><a href="includes/logout.inc.php" class="glyphicon glyphicon-log-out ">CERRAR SESION</a></li>
      </ul>
    </div>
  </div>
  </nav>

<div class="tabla">
        <?php 
        if (isset($_SESSION["userid"])){
            if($_SESSION["typeu"] == 'Cliente'){
              $idu =$_SESSION["idu"];
              //Incluyendo archivos externos
              require_once 'includes/dbh.inc.php';
              require_once 'includes/functions.inc.php';
        
               //Preparando la sentencia SQL
              $sentencia = $dbh->prepare("SELECT * FROM usuarios WHERE ID_Usuario ='$idu'");
               //Ejecutando la sentencia
              $sentencia->execute();
                //Obteniendo los datos
              $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h2 class="display-4">Cambiar Datos</h2>
                        <br>
                    </div>
                </div>
                <?php
if(isset($_GET["error"])){
            if($_GET["error"] == "none"){
                echo '
                <div class="alert alert-info">
                  <strong>Exito!</strong> Modificacíon exitosa!
                </div>
                ';
            }
          }
?>
                <div class="table-responsive">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">ID</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach ($productos as $lista) {
                            echo '<tr>';
                            echo '<td>'.$lista['Nombre_usuario'].'</td>';
                            echo '<td>'.$lista['ID_Usuario'].'</td>';
                            $cadena = 
                            'var1='.$lista['ID_Usuario'].
                            '&var2='.$lista['Nombre_usuario'];
                            
                            $vencode = urlencode($cadena);
                            echo '<td><a class="btn btn-outline-primary" href="modificarUsuario.php?'.$cadena.'">Modificar</a></td>';
                            
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>      
                <?php
            }else if ($_SESSION["typeu"] = 'Administrador'){
              //Incluyendo archivos externos
              require_once 'includes/dbh.inc.php';
              require_once 'includes/functions.inc.php';
        
               //Preparando la sentencia SQL
              $sentencia = $dbh->prepare("SELECT * FROM usuarios");
               //Ejecutando la sentencia
              $sentencia->execute();
                //Obteniendo los datos
              $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h2 class="display-4">Modificar Usuarios</h2>
                        <br>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach ($productos as $lista) {
                            echo '<tr>';
                            echo '<th scope="row">'.$lista['ID_Usuario'].'</th>';
                            echo '<td>'.$lista['Nombre_usuario'].'</td>';
                            echo '<td>'.$lista['Tipo_usuario'].'</td>';

                            
                            $cadena = 
                            'var1='.$lista['ID_Usuario'].
                            '&var3='.$lista['Tipo_usuario'];
                            $vencode = urlencode($cadena);
                            
                            echo '<td><a class="btn btn-outline-primary" href="modificarUsuario.php?'.$cadena.'">Modificar</a></td>';
                            echo '</tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>      
                <?php      
            }
            echo'<br><br>';
            echo '<div class="error-handler">';
            //Manejo de errores
            if(isset($_GET["error"])){
                if($_GET["error"] == "stmtfailed"){
                    echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <strong>Error:</strong> Algo salió mal, vuelve a intentarlo.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        ';
                } else if($_GET["error"] == "Dnone"){
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
                            Producto <strong>eliminado</strong> exitosamente!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        ';
                } else if($_GET["error"] == "Unone"){
                    echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
                            Producto <strong>actualizado</strong> exitosamente!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        ';
                }
            }
            echo '</div>';
        }else{
            header("location: index.php?");
            exit();
        }
        ?>
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