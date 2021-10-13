document.getElementById("Navbar").innerHTML =
'<div class="container">'+
    '<div class="navbar-header">'+
      '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">'+
        '<span class="icon-bar"></span>'+
        '<span class="icon-bar"></span>'+
        '<span class="icon-bar"></span>'+                      
      "</button>"+
      '<a class="navbar-brand" href="../Inicio.php">Crowley</a>'+
    "</div>"+
    '<div class="collapse navbar-collapse" id="myNavbar">'+
      '<ul class="nav navbar-nav navbar-right">'+
        '<li><a href="#about">INICIO</a></li>'+
        '<li><a href="#contact">CONTACTANOS</a></li>'+
        '<li><a href="#temas">TEMAS</a></li>'+
        '<li><a href="../includes/logout.inc.php" class="glyphicon glyphicon-log-out ">CERRAR SESION</a></li>'+
      "</ul>"+
    "</div>"+
  "</div>";