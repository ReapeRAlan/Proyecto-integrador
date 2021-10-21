<?php
//Iniciando la sesión
session_start();
if (isset($_SESSION["userid"])){
}else{
  header("location: Login.php");
        exit();

}
?>
<?php
if (isset($_SESSION["userid"])){
  echo'
  <br>
  <br>
  <div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>'.$_SESSION["userid"].'</strong> te has logueado como <strong>'.$_SESSION["typeu"].'</strong>
  </div>
';
    
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

  <?php
  if (isset($_SESSION["userid"])){
    if($_SESSION["typeu"] == 'Cliente'){
      $nombre =$_SESSION["userid"];
      if(isset($_GET["var1"])){
        $id = 'value="'.$_GET['var1'].'"';
        $nombre = 'value="'.$_GET['var2'].'"';
        $contraseña =  'placeholder="***********"';
    } else {
        $nombre = 'placeholder= "Nombre"';
        $contraseña =  'placeholder="Contraseñas"';
  
        
    }
?>
    <div class="card mx-auto p-5">
    <!-- Card body -->
    <div class="card-body">
        <div class="text-center border border-light p-5"> 
            <p class="h4 mb-4">Edición de Usuario</p>
            <p>Registra los cambios necesarios y presiona el botón guardar:</p>
            <form action="includes/updateproduct.inc.php" method="post" >
            <input type="hidden" id="myCheck" name="myCheck" value="false" >
                <div class="form-floating md-form">
                <label for="floatingInput">ID UNICO DE USUARIO</label>
                    <input type="text" name="uid" class="form-control mb-4" readonly="readonly" <?php echo $id; ?> placeholder="ID unico">
                </div>    
                <div class="form-floating md-form">
                <label for="floatingInput">Nombre</label>
                        <input type="text" name="uname" class="form-control mb-4" <?php echo $nombre; ?> placeholder="Nombre completo">
                        
                </div>
                <label for="pwd">Password:</label>
                <input type="checkbox" id="mych" name="myCheck" value="true" onclick="myFunction()">
                
                <div class="form-floating md-form">
                <div class="form-group">
      
      <p id="text" style="display:none"><input type="password" name="upwd" class="form-control mb-4" <?php echo $contraseña; ?> placeholder="Contraseña nueva"> </p>
      
    </div>        
                

                <button type="submit" name="submit" class="btn btn-dark btn-block">Guardar</button>
                <a class="btn btn-dark btn-block" href="modificar.php" role="button">Cancelar</a>
            </form>
             
            <script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var checkBox = document.getElementById("mych");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
        </div>
    </div>
    <?php
    }else if ($_SESSION["typeu"] = 'Administrador'){
    if(isset($_GET["var1"])){
        $uid = 'value="'.$_GET['var1'].'"';
        $utype =  'value="'.$_GET['var3'].'"';
        
    } else {
        $uid = 'placeholder= "ID del usuario"';
        $utype =  'placeholder="Tipo de usuario"';
        
    }

    ?>
    <div class="card mx-auto p-5">
    <!-- Card body -->
    <div class="card-body">
        <div class="text-center border border-light p-5"> 
            <p class="h4 mb-4">Edición de Usuario</p>
            <p>Registra los cambios necesarios y presiona el botón guardar:</p>
            <form action="includes/updateproduct.inc.Admin.php" method="post">
                <div class="form-floating md-form">
                    <input type="text" name="uid" class="form-control mb-4" readonly="readonly" <?php echo $uid; ?> placeholder="ID del producto">
                    <label for="floatingInput">ID del usuario</label>
                </div>    
                <div class="form-floating md-form">
                        <input type="text" name="utype" class="form-control mb-4" <?php echo $utype; ?> placeholder="Descripción">
                        <label for="floatingInput">Tipo [A ó C]</label>
                </div>
                <button type="submit" name="submit" class="btn btn-dark btn-block">Guardar</button>
                <a class="btn btn-dark btn-block" href="modificar.php" role="button">Cancelar</a>
            </form>
        </div>
    </div>
    <?php
  }
}
?>




    <div class="error-handler">
        <?php
        //Manejo de errores
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <strong>Error:</strong> Los campos no deben estar en blanco.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            } else if($_GET["error"] == "isnotnumber"){
                $v1=$_GET['msg1'];
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <strong>Error:</strong><br>'.$v1.'
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }else if($_GET["error"] == "productdoesnotexist"){
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <strong>Error:</strong> El ID de producto ingresado no existe
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }else if($_GET["error"] == "stmtfailed"){
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <strong>Error:</strong> Algo salió mal, vuelve a intentarlo.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            } else if($_GET["error"] == "none"){
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="success:"><use xlink:href="#check-circle-fill"/></svg>
                    Producto actualizado exitosamente!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }
        }
        ?>
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