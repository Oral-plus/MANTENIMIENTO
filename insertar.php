<?php
$serverName ="HERCULES";
$connectionInfo = array( "Database"=>"calidad", "UID"=>"sa", "PWD"=>"Sky2022*!");
$conexion =sqlsrv_connect ($serverName, $connectionInfo);



 $EQUIPO = $_POST['EQUIPO'];

 $TIPO_DE_MANTENIMIENTO = $_POST['TIPO_DE_MANTENIMIENTO'];
 $FECHA = $_POST['FECHA'];
 $SERVICIO = $_POST['SERVICIO'];
 $TIEMPO_EMPLEADO = $_POST['TIEMPO_EMPLEADO'];  
 $RESPONSABLE = $_POST['RESPONSABLE'];
 $FECHA_PROGRAMACION = $_POST['FECHA_PROGRAMACION'];
 $FECHA_DE_ENTREGA = $_POST['FECHA_DE_ENTREGA'];
 $TRABAJO_EJECUTADO = $_POST['TRABAJO_EJECUTADO']; 


 $sql="INSERT INTO MANTENIMIENTO VALUES ('$EQUIPO','$TIPO_DE_MANTENIMIENTO','$FECHA','$SERVICIO','$TIEMPO_EMPLEADO','$RESPONSABLE','$FECHA_PROGRAMACION','$FECHA_DE_ENTREGA','$TRABAJO_EJECUTADO')";
 $query=sqlsrv_query($conexion,$sql);
 if($query){
    Header("Location: index.php");
    
 }else {
 }
 
 ?>