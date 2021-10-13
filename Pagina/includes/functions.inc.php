<?php
    //Función para validar campos vacios en la forma de login
    function emptyInputLogin($username, $pwd){
        $result;
        if(empty($username) || empty($pwd)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    //Función para validar los campos vacios en la forma de registro
    function emptyInputSignup($uid, $name, $pwd, $pwdRepeat){
        $result;
        if(empty($uid) || empty($name) || empty($pwd)|| empty($pwdRepeat)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

     //Función para validar los campos vacios en la forma de registro de productos
     function emptyInputRecord($pid, $pname, $pdesc, $pcosto, $pprecio, $pexist){
        $result;
        if(empty($pid) || empty($pname) || empty($pdesc)|| empty($pcosto)|| empty($pprecio)|| empty($pexist)){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    //Función para validar que las contraseñas ingresadas coincidan
    function pwdMatch($pwd, $pwdRepeat){
        $result;
        if($pwd !== $pwdRepeat){
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    //Función para validar si existe el usuario dentro de la base de datos
    function uidExist($dbh, $uid){
        
        $result;
        //Preparando la sentencia SQL
        $sentencia = $dbh->prepare("SELECT * FROM usuarios WHERE id_usuario = :user");
        $sentencia->bindParam(':user', $uid);
        //Ejecutando la sentencia
        $sentencia->execute();
        //Obteniendo los datos
        $usuarios = $sentencia->fetch(PDO::FETCH_ASSOC);
        
        //Valiando si trae datos la búsqueda
        $cuenta = $sentencia->rowCount();
        
        if($cuenta >= 1){
            return $cuenta;
        } else {
            $result = false;
            return $result;
        }
    }

    //Función para validar si existe el producto dentro de la base de datos
    function pidExist($dbh, $pid){
        
            $result;
            //Preparando la sentencia SQL
            $sentencia = $dbh->prepare("SELECT * FROM inventario WHERE ID_producto = :producto");
            $sentencia->bindParam(':producto', $pid);
            //Ejecutando la sentencia
            $sentencia->execute();
            //Obteniendo los datos
            $usuarios = $sentencia->fetch(PDO::FETCH_ASSOC);
            
            //Valiando si trae datos la búsqueda
            $cuenta = $sentencia->rowCount();
            
            if($cuenta >= 1){
                return $cuenta;
            } else {
                $result = false;
                return $result;
            }
        }

    //Función para validar la conformación de la contraseña
    function invalidPwd($clave){
		$contar = 0;
		$error_clave ="";
	   if(strlen($clave) < 8){
		  $error_clave = $error_clave."La contraseña debe tener al menos 8 caracteres <br>";
	   }

	   if(strlen($clave) > 16){
		  $error_clave = $error_clave."La contraseña no puede tener más de 16 caracteres<br>";
	   }

	   if (!preg_match('`[a-zA-Z]`',$clave)){
		  $error_clave = $error_clave."La contraseña debe tener al menos una letra<br>";
		  $contar++;
	   }
	   
	   if (!preg_match('`[0-9]`',$clave)){
		  $error_clave = $error_clave."La contraseña debe tener al menos un caracter numérico<br>";
		  $contar++;
	   }
	   if ((strpos($clave, '$') !== false) || (strpos($clave, '#') !== false) || (strpos($clave, '-') !== false) || (strpos($clave, '_') !== false) || (strpos($clave, '&') !== false) || (strpos($clave, '%') !== false)) {
			echo 'true';
		} else {
			$error_clave = $error_clave."La contraseña debe tener al menos un caracter especial (#,$,-,_,&,%) <br>";
			$contar++;
		}
	   
	    $expresion = '/^[a-zA-Z0-9-_#$&%]{8,16}$$/i'; // Valida la longitud de 8 a 16 caracteres, los caracteres admitidos
		$resultado = preg_match($expresion, $clave);
		if(!$resultado) {
		  $contar++;
		} 

		if($contar > 0){
			return $error_clave;
		} else {
			$error_clave = false;
			return $error_clave;
		}
    }

    //Función para validar campos numéricos dentro de la forma de registro de productos
    function validateNumbers($pid, $pcosto, $pprecio, $pexist){
        $contar = 0;
		$error_clave ="";

        if (!is_numeric($pid)){
            $error_clave = $error_clave."El ID ingresado no es un valor numérico<br>";
            $contar++;
         }
         if (!is_numeric($pcosto)){
            $error_clave = $error_clave."El costo ingresado no es un valor numérico<br>";
            $contar++;
         }
         if (!is_numeric($pprecio)){
            $error_clave = $error_clave."El precio ingresado no es un valor numérico<br>";
            $contar++;
         }
         if (!is_numeric($pexist)){
            $error_clave = $error_clave."La existencia ingresada no es un valor numérico<br>";
            $contar++;
         }

         if($contar > 0){
			return $error_clave;
		} else {
			$error_clave = false;
			return $error_clave;
		}
    }
    
    //Función para realizar el proceso de login
    function loginUser($dbh, $username, $pwd){

        //Preparando la sentencia SQL
        $sentencia = $dbh->prepare("SELECT * FROM usuarios WHERE id_usuario = :user");
        $sentencia->bindParam(':user', $username);
        //Ejecutando la sentencia
        $sentencia->execute();
        //Obteniendo los datos
        $usuarios = $sentencia->fetch(PDO::FETCH_ASSOC);
        
        //Obteniendo la contraseña guardada en la base de datos
        $hashedPwd = $usuarios["Password"];
        $checkPwd = password_verify($pwd, $hashedPwd);
        //$pwd = $usuarios["Password"];
        //if($checkPwd === true){
        if( $checkPwd === true){
            session_start();
            $_SESSION["userid"] = $usuarios["Nombre_usuario"];

            if($usuarios["Tipo_usuario"] == 'C'){
                $_SESSION["typeu"] = 'Cliente'; 
            } else if ($usuarios["Tipo_usuario"] == 'A'){
                $_SESSION["typeu"] = 'Administrador'; 
            }

            header("location: ../Inicio.html");
            exit();
   
        } else if($checkPwd === false) {
            header("location: ../login.php?error=wronglogin");
            exit();
        }
    }

    //Función para crear el nuevo usuario
    function createUser($dbh, $uid, $name, $pwd){
        
        //Preparando la sentencia SQL
        $sentencia = $dbh->prepare("INSERT INTO usuarios (ID_Usuario, Nombre_usuario, Tipo_usuario, Password) VALUES (:userid, :fullname, :tuser, :pwd)");
        $sentencia->bindParam(':userid', $uid);
        $sentencia->bindParam(':fullname', $name);
        $usertype = 'A';
        $sentencia->bindParam(':tuser',$usertype);
        //Encriptando la contraseña
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); 
        $sentencia->bindParam(':pwd', $hashedPwd);
        try{
            //Ejecutando la sentencia
            $sentencia->execute();
        } catch (Exception $e){
            $sentencia->rollback();
            throw $e;
        }
        header("location: ../registro.php?error=none");
    }

    //Función para registrar el nuevo producto
    function recordProduct($dbh, $pid, $pname, $pdesc, $pcosto, $pprecio, $pexist){
        
            //Preparando la sentencia SQL
            $sentencia = $dbh->prepare("INSERT INTO inventario (ID_producto, Nombre_producto, Descripcion, Costo, Precio, Existencia) VALUES (:prodid, :prodname, :prodesc, :prodcost, :prodprecio, :prodexist)");
            $sentencia->bindParam(':prodid', $pid);
            $sentencia->bindParam(':prodname', $pname);
            $sentencia->bindParam(':prodesc', $pdesc);
            $sentencia->bindParam(':prodcost', $pcosto);
            $sentencia->bindParam(':prodprecio', $pprecio);
            $sentencia->bindParam(':prodexist', $pexist);

            try{
                //Ejecutando la sentencia
                $sentencia->execute();
            } catch (Exception $e){
                $sentencia->rollback();
                throw $e;
                header("location: ../registrarproducto.php?error=stmtfailed");
            }
            header("location: ../registrarproducto.php?error=none");
    }

    //Función para actualizar los datos del producto
    function updateProduct($dbh, $pid, $pname, $pdesc, $pcosto, $pprecio, $pexist){
        //Preparando la sentencia SQL
        $sentencia = $dbh->prepare("UPDATE inventario SET Nombre_producto = :prodname, Descripcion = :prodesc, Costo = :prodcost, Precio = :prodprecio, Existencia = :prodexist WHERE ID_producto = :prodid;");
        $sentencia->bindParam(':prodid', $pid);
        $sentencia->bindParam(':prodname', $pname);
        $sentencia->bindParam(':prodesc', $pdesc);
        $sentencia->bindParam(':prodcost', $pcosto);
        $sentencia->bindParam(':prodprecio', $pprecio);
        $sentencia->bindParam(':prodexist', $pexist);

        try{
            //Ejecutando la sentencia
            $sentencia->execute();
        } catch (Exception $e){
            $sentencia->rollback();
            throw $e;
            header("location: ../inventario.php?error=stmtfailed");
        }
        header("location: ../inventario.php?error=Unone");
    }

    //Función para eliminar los datos de un producto
    function deleteProduct($dbh, $pid, $pname, $pdesc, $pcosto, $pprecio, $pexist){
        //Preparando la sentencia SQL
        $sentencia = $dbh->prepare("DELETE FROM inventario WHERE ID_producto = :prodid AND Nombre_producto = :prodname AND Descripcion = :prodesc AND Costo = :prodcost AND Precio = :prodprecio AND Existencia = :prodexist;");
        $sentencia->bindParam(':prodid', $pid);
        $sentencia->bindParam(':prodname', $pname);
        $sentencia->bindParam(':prodesc', $pdesc);
        $sentencia->bindParam(':prodcost', $pcosto);
        $sentencia->bindParam(':prodprecio', $pprecio);
        $sentencia->bindParam(':prodexist', $pexist);

        try{
            //Ejecutando la sentencia
            $sentencia->execute();
        } catch (Exception $e){
            $sentencia->rollback();
            throw $e;
            header("location: ../inventario.php?error=stmtfailed");
        }
        header("location: ../inventario.php?error=Dnone");
    }
    
?>