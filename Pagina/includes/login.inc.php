<?php

if(isset($_POST["submit"])){
    //Obtiene los datos del formulario
    
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    
    //Incluyendo archivos externos
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Validando campos vacios y en caso de haberlos agrega el identificador de error en la URL
    if(emptyInputLogin($username, $pwd) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }
    //Llamando la función para relizar el login
    loginUser($dbh, $username, $pwd);

} else{
    //Regresa a la página inicial
    header("location: ../index.php");
    exit();
}

?>