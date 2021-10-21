<?php
if(isset($_POST["submit"])){
    
    //Obteniendo datos del formulario
    $uid =  $_POST["uid"];
    $utype = strtoupper($_POST["utype"]);
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    updateType($dbh, $uid, $utype);
    
        

    
   
    

   
  

    //Incluyendo archivos externos
   // require_once 'dbh.inc.php';
    //require_once 'functions.inc.php';

    //Armando la cadena de valores a enviar como parámetros
   // $cadena = '&var1='.$pid.
    //          '&var2='.$pname.
  //            '&var3='.$pdesc;
           

    //Validando campos en blanco
   // if(emptyInputRecord($pid, $pname, $pdesc) !== false){
   //     header('location: ../modificarproducto.php?error=emptyinput'.$cadena);
    //    exit();
   // }
    

    //Validando si el ID de producto ya existe
    //if(pidExist($dbh, $pid) == false){
    //    header('location: ../registrarproducto.php?error=productdoesnotexist'.$cadena);
    //    exit();
    //}
    
    //Actualizando el producto
   // updateProduct($dbh, $pid, $pname, $pdesc);
    
}else {
    header("location: ../index.php");
}