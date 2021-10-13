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

    //Armando la cadena de valores a enviar como parámetros
    $cadena = '&var1='.$pid.
              '&var2='.$pname.
              '&var3='.$pdesc.
              '&var4='.$pcosto.
              '&var5='.$pprecio.
              '&var6='.$pexist;

    //Validando campos en blanco
    if(emptyInputRecord($pid, $pname, $pdesc, $pcosto, $pprecio, $pexist) !== false){
        header('location: ../modificarproducto.php?error=emptyinput'.$cadena);
        exit();
    }
    
    //Validando que los valores ingresados sean numéricos
    $valor= validateNumbers($pid, $pcosto, $pprecio, $pexist);
    if($valor !== false){
        $vencode = urlencode($valor);
        $valor = 'location: ../modificarproducto.php?error=isnotnumber&msg1='.$vencode.$cadena;
        header($valor);
        exit();
    }

    //Validando si el ID de producto ya existe
    if(pidExist($dbh, $pid) == false){
        header('location: ../registrarproducto.php?error=productdoesnotexist'.$cadena);
        exit();
    }
    
    //Actualizando el producto
    updateProduct($dbh, $pid, $pname, $pdesc, $pcosto, $pprecio, $pexist);
    
}else {
    header("location: ../index.php");
}