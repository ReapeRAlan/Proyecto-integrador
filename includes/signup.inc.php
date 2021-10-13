<?php
if(isset($_POST["submit"])){
    
    //Obteniendo datos del formulario
    $uid =  $_POST["uid"];
    $name =  $_POST["name"];
    $pwd =  $_POST["pwd"];
    $pwdRepeat =  $_POST["pwdrepeat"];

    //Incluyendo archivos externos
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //Validando campos en blanco
    if(emptyInputSignup($uid, $name, $pwd, $pwdRepeat) !== false){
        header("location: ../registro.php?error=emptyinput");
        exit();
    }
    
    //Validando que las contraseñas coincidan
    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header("location: ../registro.php?error=passwordsdontmatch");
        exit();
    }

    //Validando que la contraseña cumpla con las características establecidas
    //$valor=invalidPwd($pwd);
    //if($valor !== false){
    //    $vencode = urlencode($valor);
	//	$valor = 'location: ../registro.php?error=invalidpassword&msg1='.$vencode;
    //    header($valor);
    //    exit();
    //}

    //Validando si el usuario ID ya existe
    if(uidExist($dbh, $uid) !== false){
        header("location: ../registro.php?error=usrnametaken");
        exit();
    }
    
    //Creando el usuario
    createUser($dbh, $uid, $name, $pwd);
    
}else {
    header("location: ../index.php");
}