<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>MANTENIMIENTO</title>
    <link rel="icon" type="image/x-icon" href="img/logobusqueda.jpg">
   
</head>

<body>
    <form method="post" action="index2.php">
        <div class="titulo">
            <h2> SKY S.A.S<br> MANTENIMIENTO</h2>
        </div>


        <DIV class='fondo'>
            <label for="ORDEN" class="formulario__label">ORDEN:</label>
           <center> <input type="text" id="ORDEN" value="" name="ORDEN"> </center>

            
            <center>
     
      <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
    </center>
        </DIV>

</form>
    <?php

if(isset($_POST['btn1']))
{
    $serverName ="HERCULES";
    $connectionInfo = array( "Database"=>"calidad", "UID"=>"sa", "PWD"=>"Sky2022*!");
    $conexion =sqlsrv_connect ($serverName, $connectionInfo);

  $ORDEN = $_POST['ORDEN'];
  $EQUIPO = $_POST['EQUIPO'];
 
  $TIPO_DE_MANTENIMIENTO = $_POST['TIPO_DE_MANTENIMIENTO'];
  $FECHA = $_POST['FECHA'];
  $SERVICIO = $_POST['SERVICIO'];
  $TIEMPO_EMPLEADO = $_POST['TIEMPO_EMPLEADO'];  
  $RESPONSABLE = $_POST['RESPONSABLE'];
  $FECHA_PROGRAMACION = $_POST['FECHA_PROGRAMACION'];
  $FECHA_DE_ENTREGA = $_POST['FECHA_DE_ENTREGA'];
  $TRABAJO_EJECUTADO = $_POST['TRABAJO_EJECUTADO'];  
  $TIEMPO_EMPLEADO_FIN = $_POST['TIEMPO_EMPLEADO_FIN']; 
  $OBSERVACION = $_POST['OBSERVACION']; 
  $VALOR_REPUESTO = $_POST['VALOR_REPUESTO']; 
 

  sqlsrv_query($conexion, "INSERT INTO MANTENIMIENTO (ORDEN,EQUIPO,TIPO_DE_MANTENIMIENTO,FECHA,SERVICIO,TIEMPO_EMPLEADO,RESPONSABLE,FECHA_PROGRAMACION,FECHA_DE_ENTREGA,TRABAJO_EJECUTADO,TIEMPO_EMPLEADO_FIN,OBSERVACION,VALOR_REPUESTO)
   values ('$ORDEN','$EQUIPO','$TIPO_DE_MANTENIMIENTO','$FECHA','$SERVICIO','$TIEMPO_EMPLEADO','$RESPONSABLE','$FECHA_PROGRAMACION','$FECHA_DE_ENTREGA','$TRABAJO_EJECUTADO','$TIEMPO_EMPLEADO_FIN','$OBSERVACION','$VALOR_REPUESTO')");
  //La variable $Conexion viene del archivo "Abrir_Conexion", la cual nos conectara a la base de datos
  //y de paso hacemos el registro de datos.
  
  include("cerrar_conexion.php");

  echo "<SCRIPT >
alert('Se insertaron Correctamente');
document.location=('index.php');
</SCRIPT>";
}

if(isset($_POST['btn2']))
{
    $serverName ="HERCULES";
    $connectionInfo = array( "Database"=>"calidad", "UID"=>"sa", "PWD"=>"Sky2022*!");
    $conexion =sqlsrv_connect ($serverName, $connectionInfo);


    $ORDEN = $_POST['ORDEN'];
    if($ORDEN=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
      {echo "Digita un documento por favor. (Ej: 123)";}
    else
    {  
      $resultados = sqlsrv_query($conexion,"SELECT * FROM MANTENIMIENTO WHERE ORDEN = $ORDEN");
      ?>
     </div>
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                   
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=sqlsrv_fetch_array($resultados)){
                                        ?>
                                  <tr><th>ORDEN</th> <th><?php  echo $row['ORDEN']?></th></tr>

                                               <tr>   <th>EQUIPO</th> <th><?php  echo $row['EQUIPO']?></th></tr>

                                               <tr>    <th>TIPO_DE_MANTENIMIENTO</th>
                                               <th>  <?php  echo $row['TIPO_DE_MANTENIMIENTO']?></th></tr>


                                               <tr>   <th>FECHA</th><th> <?php  echo $row['FECHA']?></th></tr>
                                               <tr>   <th>SERVICIO</th><th><?php  echo $row['SERVICIO']?></th></tr>
                                               <tr>  <th>TIEMPO_EMPLEADO</th><th><?php  echo $row['TIEMPO_EMPLEADO']?></th></tr>
                                               <tr>     <th>RESPONSABLE</th><th><?php  echo $row['RESPONSABLE']?></th></tr>
                                               <tr>   <th>FECHA_PROGRAMACION</th><th><?php  echo $row['FECHA_PROGRAMACION']?></th></tr>
                                               <tr>   <th>FECHA_DE_ENTREGA</th><th><?php  echo $row['FECHA_DE_ENTREGA']?></th></tr>
                                               
                                               <tr>   <th>TRABAJO_EJECUTADO</th><th><?php  echo $row['TRABAJO_EJECUTADO']?></th></tr>
                                               <tr>   <th>TIEMPO_EMPLEADO_FIN</th><th><?php  echo $row['TIEMPO_EMPLEADO_FIN']?></th></tr>
                                               <tr>   <th>OBSERVACION</th><th><?php  echo $row['OBSERVACION']?></th></tr>
                                               <tr>   <th>VALOR_REPUESTO</th><th><?php  echo $row['VALOR_REPUESTO']?></th></tr>
                                       <center>        <tr>   <th><a href="actualizar.php?id=<?php echo $row['ORDEN'] ?>" class="btn btn-info">Editar</a></th></tr>  </center>  
                                            <!--  <tr>    <th><a href="delete.php?id=<?php echo $row['ORDEN'] ?>" class="btn btn-danger">Eliminar</a></th>     -->                                    
                                            </tr>
                                            </table>
                                        <?php 
                                            }
                                        
    }

  include("cerrar_conexion.php");
}
?>
 

</body>

</html>