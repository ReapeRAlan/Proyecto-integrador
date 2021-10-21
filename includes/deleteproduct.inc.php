<?php
if(isset($_POST["submit"])){
    
    //Obteniendo datos del formulario
    $pid =  $_POST["pid"];
    $pname =  $_POST["pname"];
    $pdesc =  $_POST["pdesc"];
    $pcosto =  $_POST["pcosto"];
    $pprecio =  $_POST["pprecio"];
    $pexist =  $_POST["pexist"];

    //Incluyendo archivos externos
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Validando si el ID de producto ya existe
   // if(pidExist($dbh, $pid) == false){
    //    header('location: ../registrarproducto.php?error=productdoesnotexist');
    //    exit();
  //  }
    
    //Eliminando el producto
    deleteProduct($dbh, $pid, $pname, $pdesc, $pcosto, $pprecio, $pexist);
    
}else {
    header("location: ../index.php");
}