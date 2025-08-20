<?php
$serverName ="HERCULES";
$connectionInfo = array( "Database"=>"calidad", "UID"=>"sa", "PWD"=>"Sky2022*!");
$conexion =sqlsrv_connect ($serverName, $connectionInfo);

if($conn){
echo "Conexion establecidad.<br />";
exit();
} else{
    echo "Conexion Fallida.<br />";
    die( print_r (sqlsrv_errors(), true));
}

?>