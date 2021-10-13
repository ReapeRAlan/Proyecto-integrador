<?php
//Destruye la sesión y regresa a la página inicial
session_start();
session_unset();
session_destroy();
header("location: ../index.php");
exit();

?>