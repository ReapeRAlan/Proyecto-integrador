<?php

    $serverName="localhost";
    $dBUsername="root";
    $dBPassword="";
    $dBName="crowley";
/*
    $serverName="sql105.epizy.com";
    $dBUsername="epiz_29398801";
    $dBPassword="T4Tb0q8CoTU2WN";
    $dBName="epiz_29398801_dpw2a2";
*/
try{
    $dbh = new PDO(
        'mysql:host=localhost;
        dbname='.$dBName,
        $dBUsername,
        $dBPassword
    );
} catch (Exception $e) {
    echo "Error de conexión ".$e->getMessage();
}

?>