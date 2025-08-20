<html>
<head>
  <title>Consulta tu cartera</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
 </head>
<body>

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">



    <center><h1>PROPIETARIO</h1></center>

    <form method="POST" action="registro.php" >

    <div class="form-group">
      <label for="CardCode">CardCode</label>
      <input type="text" name="CardCode" class="form-control" id="CardCode">
  </div>

  <div class="form-group">
      <label for="CLIENTE">CLIENTE</label>
      <input type="text" name="CLIENTE" class="form-control" id="CLIENTE" >
  </div>
  <div class="form-group">
      <label for="VALOR">VALOR</label>
      <input type="text" name="VALOR" class="form-control" id="VALOR" >
  </div>
   
    
    <center>
      <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
      <input type="submit" value="Consultar" class="btn btn-info" name="btn2">
    </center>

  </form>



  <?php

    if(isset($_POST['btn1']))
    {
      $serverName ="MERCURY";
      $connectionInfo = array( "Database"=>"SKY_SAP", "UID"=>"sa", "PWD"=>"SAPB1Admin");
      $conexion =sqlsrv_connect ($serverName, $connectionInfo);

      $CODIGO = $_POST['CardCode'];
      $CLIENTE = $_POST['CLIENTE'];
      $VALOR = $_POST['VALOR'];
     

      sqlsrv_query($conexion, "INSERT INTO CARTERA (CardCode,CardName,Balance) values ('$CODIGO','$CLIENTE','$VALOR')");
      //La variable $Conexion viene del archivo "Abrir_Conexion", la cual nos conectara a la base de datos
      //y de paso hacemos el registro de datos.
      
      include("cerrar_conexion.php");
      echo "Se insertaron Correctamente";
    }

    if(isset($_POST['btn2']))
    {
      $serverName ="MERCURY";
      $connectionInfo = array( "Database"=>"SKY_SAP", "UID"=>"sa", "PWD"=>"SAPB1Admin");
      $conexion =sqlsrv_connect ($serverName, $connectionInfo);


        $CODIGO = $_POST['CardCode'];
        if($CODIGO=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
          {echo "Digita un documento por favor. (Ej: 123)";}
        else
        {  
          $resultados = sqlsrv_query($conexion,"SELECT * FROM CARTERA WHERE CardCode = $CODIGO");
          while($consulta = sqlsrv_fetch_array($resultados))
          {
            echo 
            "
              <table width=\"100%\" border=\"1\">
                <tr>
                  <td><b><center>CODIGO</center></b></td>
                  <td><b><center>CLIENTE</center></b></td>
                  <td><b><center>VALOR</center></b></td>
                 
                </tr>
                <tr>
                  <td>".$consulta['CardCode']."</td>
                  <td>".$consulta['CardName']."</td>
                  <td>".$consulta['Balance']."</td>
                  
                </tr>
              </table>
            ";
          }
        }

      include("cerrar_conexion.php");
    }
  ?>



  </div>
  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>