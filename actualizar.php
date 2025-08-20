<?php 
$serverName ="HERCULES";
$connectionInfo = array( "Database"=>"calidad", "UID"=>"sa", "PWD"=>"Sky2022*!");
$conexion =sqlsrv_connect ($serverName, $connectionInfo);

$id=$_GET['id'];


$sql="SELECT * FROM MANTENIMIENTO WHERE ORDEN='$id'";
$query=sqlsrv_query($conexion,$sql);

$row=sqlsrv_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="ORDEN" value="<?php echo $row['ORDEN']  ?>">
                                
                                <label for="FECHA_DE_ENTREGA" class="formulario__label">FECHA DE ENTREGA:</label>
                                <input type="date" class="form-control mb-3" name="FECHA_DE_ENTREGA"  placeholder="FECHA_DE_ENTREGA" value="<?php echo $row['FECHA_DE_ENTREGA']  ?>">
                                <label for="TIEMPO_EMPLEADO" class="formulario__label">TIEMPO_EMPLEADO INICIO:</label>
                                <input type="time" class="form-control mb-3" name="TIEMPO_EMPLEADO" placeholder="TIEMPO_EMPLEADO" value="<?php echo $row['TIEMPO_EMPLEADO']  ?>">
                                <label for="TIEMPO_EMPLEADO_FIN" class="formulario__label">TIEMPO_EMPLEADO FIN:</label>
                                <input type="time" class="form-control mb-3" name="TIEMPO_EMPLEADO_FIN" placeholder="TIEMPO_EMPLEADO_FIN" value="<?php echo $row['TIEMPO_EMPLEADO_FIN']  ?>">
                                <label for="TRABAJO_EJECUTADO" class="formulario__label">FECHA TRABAJO_EJECUTADO:</label>
                                <input type="date" class="form-control mb-3" name="TRABAJO_EJECUTADO" placeholder="TRABAJO_EJECUTADO" value="<?php echo $row['TRABAJO_EJECUTADO']  ?>">
                                <label for="OBSERVACION" class="formulario__label">OBSERVACION:</label>
                                <input type="text" class="form-control mb-3" name="OBSERVACION" placeholder="OBSERVACION" value="<?php echo $row['OBSERVACION']  ?>"> 
                                <label for="OBSERVACION" class="formulario__label">VALOR DEL REPUESTO:</label>
                                <input type="number" class="form-control mb-3" name="VALOR_REPUESTO" placeholder="VALOR_REPUESTO" value="<?php echo $row['VALOR_REPUESTO']  ?>">
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>