<?php
//Destruye la sesión y regresa a la página inicial
session_start();
session_unset();
session_destroy();
header("location: /pagina_final/Proyecto-integrador/Pagina/Index.php");
exit();

?>