<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/css/select2.min.css">
    <title>MANTENIMIENTO</title>
    <link rel="icon" type="image/x-icon" href="img/logobusqueda.jpg">
   <style>
      
        .js-select2 {
            width: 100%;
        }
   
      
        .select2-container--default .select2-selection--single {
         background-color: #fff;
         border: 1px solid #aaa;
        border-radius: 4px;
        padding: 15px;
        }

        .select2-container--default .select2-selection--single {
          background-color: #fff;
          border: 1px solid #aaa;
          border-radius: 3px;
          padding: 18px;
      }
      .select2-container--default .select2-selection--single .select2-selection__rendered {
          color: #444;
          line-height: 28px;
          margin: -14px;
    }
    .select2-container--default .select2-selection--single .select2-selection__clear {
    cursor: pointer;
    float: right;
    font-weight: bold;
    height: 30px;
    margin-right: 20px;
    padding-right: 0px;
    margin: -13px 10px;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #000;
    line-height: 28px;
    margin: -14px;
}
    </style>
</head>

<body>
    <form method="post" action="index.php">
        <div class="titulo">
            <h2> SKY S.A.S<br> MANTENIMIENTO</h2>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-select2').select2({
                placeholder: 'Selecciona una opción',
                allowClear: true,
                width: '100%',
            });
            
            // Floating labels animation
            $(".campos").on("focus", function() {
                $(this).siblings("label").addClass("active");
            }).on("blur", function() {
                if (!$(this).val()) {
                    $(this).siblings("label").removeClass("active");
                }
            });
        });
    </script>

        <DIV>
        

            <label for="EQUIPO" class="formulario__label">EQUIPO O AREA:</label> 
            <select type="text" name="EQUIPO" class="formulario__input js-select2" id="EQUIPO" required >
                <option value="">SELECCIONA</option>
                
          
              <option value="Enjuagadora">Enjuagadora</option>
              <option value="llenadora">llenadora</option>
              <option value="tapadora">tapadora</option>
<option value="etiquetadora  ELTE-25">etiquetadora  ELTE-25</option>
                <option value="Transformador elevador TF-03">Transformador elevador TF-03</option>
                <option value="Transformador elevador TF-04">Transformador elevador TF-04</option>
                <option value="Transformador elevador TF-05">Transformador elevador TF-05</option>
                <option value="Transformador elevador TF-06">Transformador elevador TF-06</option>
                <option value="Transformador elevador TF-07">Transformador elevador TF-07</option>
                <option value="Tanque Pulmon - TQP-01">Tanque Pulmon - TQP-01</option>
                <option value="Re-Orden">Re-Orden</option>
                <option value="Ruta Mantenimiento">Ruta Mantenimiento</option>
                <option value="Otro">Otro</option>
                <option value="Envp-2 Envasadora de piston 2">Envp-2 Envasadora de piston 2</option>
                <option value="Pla -2 Pulidora">Pla -2 Pulidora</option>
                <option value="aire acondicionados">aire acondicionados</option>
                <option value="Blisteadora -  BLI - 01">Blisteadora -  BLI - 01</option>
                <option value="Mmt- 5 marmita de preparacion">Mmt- 5 marmita de preparacion</option>
                
                <option value="Tmpo - 3 Tampo">Tmpo - 3 Tampo</option>
<option value="Tnq -1 Tanque de preparacion enjuegues ">Tnq -1 Tanque de preparacion enjuegues </option>
<option value="Tnq -2 Tanque de preparacion enjuegues ">Tnq -2 Tanque de preparacion enjuegues </option>
<option value="Tnq -3 Tanque de preparacion enjuegues ">Tnq -3 Tanque de preparacion enjuegues </option>
<option value="Tnq - 2 Tanque de preparacion  gel y jabon ">Tnq - 2 Tanque de preparacion  gel y jabon </option>
 <option value="Tnq -3 Tanque de preparacion  enjuagues ">Tnq -3 Tanque de preparacion  enjuagues </option>
 <option value="Dzr - 1  Desionizador de agua ">Dzr - 1  Desionizador de agua </option>
<option value="Rct - 1 Mezclador de semisolidos - Reactor ">Rct - 1 Mezclador de semisolidos - Reactor </option>
 <option value="Clp -1 Envasadora y selladora de colapsible ">Clp -1 Envasadora y selladora de colapsible </option>
 <option value="Clp-2 Envasadora y selladora de colapsible ">Clp-2 Envasadora y selladora de colapsible </option>
 <option value="Dvc - 1 Devanadora de carrete x 4">Dvc - 1 Devanadora de carrete x 4</option>
 <option value="Dvc - 2 Devanadora de carrete x 2">Dvc - 2 Devanadora de carrete x 2</option>
 <option value="Dvc - 3 Devanadora de carrete x 2">Dvc - 3 Devanadora de carrete x 2</option>
 <option value="Dvc - 4 Devanadora de carrete x 8">Dvc - 4 Devanadora de carrete x 8</option>
 <option value="Dvb - 1 Devanadora de bobina x 10">Dvb - 1 Devanadora de bobina x 10</option>
 <option value="Dvb - 3 Devanadora de bobina x 6">Dvb - 3 Devanadora de bobina x 6</option>
 <option value="Ext - 1 Cortadora para cera de brackets ">Ext - 1 Cortadora para cera de brackets </option>
 <option value="Tsll - 01 Termoselladora ">Tsll - 01 Termoselladora </option>
 <option value="Tsll - 04 Termoselladora ">Tsll - 04 Termoselladora </option>
 <option value="Tnt-1 Tunel de termoencogido">Tnt-1 Tunel de termoencogido</option>

 <option value="Cda-1 Codificadora zanazi">Cda-1 Codificadora zanazi</option>
 <option value="Cda-2 Codificadora  smart ( int jet)">Cda-2 Codificadora  smart ( int jet)</option>
 <option value="Cda-3 Codificadora laser">Cda-3 Codificadora laser</option>
 <option value="Iny - 1 Inyectora">Iny - 1 Inyectora</option>
 <option value="iny-2 Inyectora Demand ">iny-2 Inyectora Demand </option>
 <option value="Mln-1 Molino">Mln-1 Molino</option>
 <option value="Mzd-1 Mezcladora  de pigmentos">Mzd-1 Mezcladora  de pigmentos</option>
 <option value="Cmp- 1 Compresor Tornillo ">Cmp- 1 Compresor Tornillo </option>
 <option value="Cmp- 2 Compresor Tornillo ">Cmp- 2 Compresor Tornillo </option>
 <option value="Chr-1 Chiller">Chr-1 Chiller</option>
 <option value="Trre-1 Torre de enfriamiento">Trre-1 Torre de enfriamiento</option>
 <option value="Cld -1 Caldera">Cld -1 Caldera</option>
 <option value="Mlt-1 Malacate">Mlt-1 Malacate</option>
 <option value="Env- 1 Envasadora de piston pequeña - Envasadora de jabon - 2 boquilla ">Env- 1 Envasadora de piston pequeña - Envasadora de jabon - 2 boquilla </option>
 <option value="Env-2 Envasadora de piston pequeña  - Enavasadora de enjuegue - 6 boquillas">Env-2 Envasadora de piston pequeña  - Enavasadora de enjuegue - 6 boquillas</option>
 <option value="Scd-1 Secador de aire">Scd-1 Secador de aire</option>
 <option value="Scd-2 Secador de aire">Scd-2 Secador de aire</option>
 <option value="Bma-1 Bomba neumatica ">Bma-1 Bomba neumatica </option>
 <option value="Bma-2 Bomba neumatica ">Bma-2 Bomba neumatica </option>
 <option value="Bma-3 Bomba neumatica ">Bma-3 Bomba neumatica </option>
 <option value="Bma-4 Bomba neumatica ">Bma-4 Bomba neumatica </option>
 <option value="Tmpo-1 Tampo">Tmpo-1 Tampo</option>
 <option value="Tmpo-2 Tampo">Tmpo-2 Tampo</option>
 <option value="Zna-1 Zunchadora">Zna-1 Zunchadora</option>
 <option value="Zna-2 Zunchadora">Zna-2 Zunchadora</option>
 <option value="Enc -1  Encerdadora">Enc -1  Encerdadora</option>
 <option value="Pla-1 Pulidora ">Pla-1 Pulidora </option>
 <option value="Enc-2 Encerdadora  brazo robotico">Enc-2 Encerdadora  brazo robotico</option>
 <option value="Mmt-1 Marmita de preparacion">Mmt-1 Marmita de preparacion</option>
 <option value="Mmt-2 Marmita de preparacion">Mmt-2 Marmita de preparacion</option>
 <option value="N.A Montacargas">N.A Montacargas</option>
 <option value="LTE-25 Llenadora, tapadora y etiquetadora ">LTE-25 Llenadora, tapadora y etiquetadora </option>
 <option value="Ban-01  Banda codificadora ">Ban-01  Banda codificadora </option>
 <option value="Ban -02 Banda codificadora ">Ban -02 Banda codificadora </option>
 <option value="Rvl-1 Revelador ">Rvl-1 Revelador </option>
 <option value="Trvl-1 Tanque de revelador">Trvl-1 Tanque de revelador</option>
 <option value="Vnt- 1 Vnt- 2 ventiladores industriales ">Vnt- 1 Vnt- 2 ventiladores industriales </option>
<option value="TST-01 Termoformadora, selladora y troqueladora ">TST-01 Termoformadora, selladora y troqueladora </option>
 <option value="TST-02 Termoformadora, selladora y troqueladora ">TST-02 Termoformadora, selladora y troqueladora </option>
 <option value="TF-01  Transformador elevador">TF-01  Transformador elevador</option>
 <option value="TF-02 Transformador elevador">TF-02 Transformador elevador</option>
 <option value="SCD -01 Secador de aire industrial ">SCD -01 Secador de aire industrial </option>
 <option value="LVN - 17 Llenadora volumetrica neumatica con dos boquillas ">LVN - 17 Llenadora volumetrica neumatica con dos boquillas </option>
 <option value="SDP-01 Selladora de pedal">SDP-01 Selladora de pedal</option>
 <option value="ENC-01 Encintadora de cajas ">ENC-01 Encintadora de cajas </option>
 <option value="OSMOSIS-01 Omosis inversa ">OSMOSIS-01 Omosis inversa </option>
 <option value=" ENVASADORA "> ENVASADORA </option>
 <option value="APE -01  Apilador electrico 1.2 TON ">APE -01  Apilador electrico 1.2 TON </option>
 <option value="APE -02 Apilador electrico 1.5 TON">APE -02 Apilador electrico 1.5 TON</option>
 <option value="  ENCT-01 Encartonadora ">  ENCT-01 Encartonadora </option>
 <option value="Dvc - 5 Devanadora de carrete x 8">Dvc - 5 Devanadora de carrete x 8</option>
 <option value="Dvb - 4 Devanadora de bobina x 10">Dvb - 4 Devanadora de bobina x 10</option>
 <option value="Eci -1 Entorchadora  de cepillos interproximales">Eci -1 Entorchadora  de cepillos interproximales</option>
 <option value="PS -01 Paneles solares ">PS -01 Paneles solares </option>
 <option value="AAI -01  Aires acondicionados industriales ">AAI -01  Aires acondicionados industriales </option>
 <option value="Tro -01 Troqueladora SE-20">Tro -01 Troqueladora SE-20</option>
 <option value="Mmt-3 Marmita de preparacion">Mmt-3 Marmita de preparacion</option>
 <option value="Mmt-4 Marmita de preparacion">Mmt-4 Marmita de preparacion</option>
 <option value="Cdf - 01 Cortadora de fibra ">Cdf - 01 Cortadora de fibra </option>
 <option value="Usc-01 Ultra sonido ">Usc-01 Ultra sonido </option>
 <option value="Envp-1 Envasadora de piston 1">Envp-1 Envasadora de piston 1</option>
 <option value="Prensadora- Litografica - MPL-01">Prensadora- Litografica - MPL-01</option>
 <option value="Guillotina - MG-01">Guillotina - MG-01</option>
 <option value="Troqueladora MT-01">Troqueladora MT-01</option>
 <option value="Envp-1 Envasadora de piston 1">Envp-1 Envasadora de piston 1</option>
 <option value="ENGOMADORA ENG -01">ENGOMADORA ENG -01</option>
 <option value="COMPRESOR DE PISTON - PRENSA - Cmp- 3">COMPRESOR DE PISTON - PRENSA - Cmp- 3</option>
 <option value="Mlt-2 Malacate">Mlt-2 Malacate</option>
 <option value="Desionizador de agua Dzr - 2">Desionizador de agua Dzr - 2</option>
 <option value="Maquina  Troqueladora cuchillas MT-02">Maquina  Troqueladora cuchillas MT-02</option>
 <option value="ENGOMADORA ENG -01">ENGOMADORA ENG -01</option>
 <option value="ENGOMADORA UV - ENG -02">ENGOMADORA UV - ENG -02</option>
 <option value="COMPRESOR DE PISTON - PRENSA Cmp- 3">COMPRESOR DE PISTON - PRENSA Cmp- 3</option>
 <option value="compras generales">compras generales</option>
 <option value="Codificadora laser	Cda-4">Codificadora laser	Cda-4</option>
 <option value="ARMADORA DE CAJAS - AMC-01">ARMADORA DE CAJAS - AMC-01</option>
 <option value="SECADOR REFRIGERATIVO - SCD -02">SECADOR REFRIGERATIVO - SCD -02    </option>
 <option value="Secador industrial">Secador industrial</option>
 <option value="Maquina laminadora de tubos colapsibles - LTC-01">Maquina laminadora de tubos colapsibles - LTC-01</option>
 <option value="aires mini split general SKY  - AMS -00">aires mini split general SKY  - AMS -00</option>
 <option value="Ultra sonido Usc-02">Ultra sonido Usc-02</option>
 <option value="Troqueladora SE-20 Tro -02">Troqueladora SE-20 Tro -02</option>
 <option value="Chiller Chr-2">Chiller Chr-2</option>

</select>

            <label for="TIPO_DE_MANTENIMIENTO" class="formulario__label">TIPO DE MANTENIMIENTO:</label>
            <select type="text" name="TIPO_DE_MANTENIMIENTO" class="formulario__input" id="TIPO_DE_MANTENIMIENTO" required >

<option value="">SELECCIONA</option>
<option value="PREVENTIVO">PREVENTIVO</option>
<option value="CORRECTIVO">CORRECTIVO</option>
<option value="ARRANQUES">ARRANQUES</option>
<option value="ALIMENTACION DE MAQUINA">ALIMENTACION DE MAQUINA</option>
<option value="AJUSTE DE LA SECUENCIA">AJUSTE DE LA SECUENCIA</option>
<option value="MONTAJES">MONTAJES</option>
<option value="OTROS">OTROS</option>


</select>
            <label for="FECHA" class="formulario__label">FECHA:</label>
            <input type="date" id="FECHA" value="" name="FECHA">

            <label for="SERVICIO" class="formulario__label">DESCRIPCION DEL SERVICIO SOLICITADO:</label>
            <input type="text" id="SERVICIO" value="" name="SERVICIO">

            <label for="TIEMPO_EMPLEADO" class="formulario__label">TIEMPO EMPLEADO EN EL MMTTO INICIO:</label>
            <input type="time" id="TIEMPO_EMPLEADO" value="" name="TIEMPO_EMPLEADO" style="background-color: rgb(232, 235, 101);">

            <label for="TIEMPO_EMPLEADO_FIN" class="formulario__label">TIEMPO EMPLEADO EN EL MMTTO FIN:</label>
      <input type="time" id="TIEMPO_EMPLEADO_FIN" value="" name="TIEMPO_EMPLEADO_FIN" style="background-color: rgb(232, 235, 101);">
         

            <label for="RESPONSABLE" class="formulario__label">RESPONSABLE:</label>
            <select type="text" name="RESPONSABLE" class="formulario__input" id="RESPONSABLE" >

        <option value="">SELECCIONA</option>
        <option value="DIEGO CANO">DIEGO CANO</option>
        <option value="YEFRY LUJAN">YEFRY LUJAN</option>
        <option value="JHON QUINTERO">JHON QUINTERO</option>
        <option value="CONTRATISTA">CONTRATISTA</option>
        <option value="JHONATAN ANDRES GARCIA">JHONATAN ANDRES GARCIA</option>
        <option value="EDUARDO LEON RAMIREZ">EDUARDO LEON RAMIREZ</option>
        <option value="JUAN PABLO OSORIO">JUAN PABLO OSORIO</option>
        <option value="ANDERSON VILLA">ANDERSON VILLA</option>
        <option value="DARIO CAYAMA RAMIREZ">DARIO CAYAMA RAMIREZ</option>
        <option value="WALTER GOMEZ">WALTER GOMEZ</option>
        <option value="ISAAC VELASQUEZ">ISAAC VELASQUEZ</option>
        <option value="IVAN DAVID RUIZ ">IVAN DAVID RUIZ</option>
      
    </select>


            <label for="FECHA_PROGRAMACION" class="formulario__label">FECHA PROGRAMACION:</label>
            <input type="date" id="FECHA_PROGRAMACION" value="" name="FECHA_PROGRAMACION">

            <label for="FECHA_DE_ENTREGA" class="formulario__label">FECHA DE ENTREGA:</label>
            <input type="date" id="FECHA_DE_ENTREGA" value="" name="FECHA_DE_ENTREGA">

            <label for="TRABAJO_EJECUTADO" class="formulario__label">FECHA TRABAJO EJECUTADO:</label>
            <input type="date" id="TRABAJO_EJECUTADO" value="" name="TRABAJO_EJECUTADO" style="background-color:rgb(232, 235, 101);">
 
            <label for="OBSERVACION" class="formulario__label">OBSERVACION :</label>
            <input type="text" id="OBSERVACION" value="" name="OBSERVACION" style="background-color:rgb(232, 235, 101);">

            <label for="VALOR_REPUESTO" class="formulario__label">VALOR DEL REPUESTO :</label>
            <input type="number" id="VALOR_REPUESTO" value="" name="VALOR_REPUESTO" >
 
            <center>
      <input type="submit" value="Enviar" class="btn btn-success" name="btn1">
    <a href="index2.php">  <input type="button" value="Consultar" class="btn btn-info" ></a>
    </center>
        </DIV>

</form>
    <?php


    // Check for a successful connection
    if (isset($_POST['btn1'])) {
        $serverName = "HERCULES";
        $connectionInfo = array("Database" => "calidad", "UID" => "sa", "PWD" => "Sky2022*!");
        $conexion = sqlsrv_connect($serverName, $connectionInfo);
    
        // Check for a successful connection
        if ($conexion === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
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
    
        $sql = "INSERT INTO MANTENIMIENTO (EQUIPO, TIPO_DE_MANTENIMIENTO, FECHA, SERVICIO, TIEMPO_EMPLEADO, RESPONSABLE, FECHA_PROGRAMACION, FECHA_DE_ENTREGA, TRABAJO_EJECUTADO, TIEMPO_EMPLEADO_FIN, OBSERVACION, VALOR_REPUESTO)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
        $params = array(
            $EQUIPO, $TIPO_DE_MANTENIMIENTO, $FECHA, $SERVICIO, $TIEMPO_EMPLEADO,
            $RESPONSABLE, $FECHA_PROGRAMACION, $FECHA_DE_ENTREGA, $TRABAJO_EJECUTADO,
            $TIEMPO_EMPLEADO_FIN, $OBSERVACION, $VALOR_REPUESTO
        );
    
        $stmt = sqlsrv_prepare($conexion, $sql, $params);
    
        // Check for errors in query preparation
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        // Execute the query
        $result = sqlsrv_execute($stmt);
    
        // Check for errors in query execution
        if ($result === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        // Close the connection
        sqlsrv_close($conexion);
    
        echo "<SCRIPT > alert('Se insertaron Correctamente'); document.location=('index.php'); </SCRIPT>";
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
      <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ORDEN</th>
                                        <th>EQUIPO</th>
                                        <th>TIPO_DE_MANTENIMIENTO</th>
                                        <th>FECHA</th>
                                        <th>SERVICIO</th>
                                        <th>TIEMPO_EMPLEADO</th>
                                        <th>RESPONSABLE</th>
                                        <th>FECHA_PROGRAMACION</th>
                                        <th>FECHA_DE_ENTREGA</th>
                                        <th>TRABAJO_EJECUTADO</th>
                                     
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=sqlsrv_fetch_array($resultados)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['ORDEN']?></th>
                                                <th><?php  echo $row['EQUIPO']?></th>
                                                <th><?php  echo $row['TIPO_DE_MANTENIMIENTO']?></th>
                                                <th><?php  echo $row['FECHA']?></th>
                                                <th><?php  echo $row['SERVICIO']?></th>
                                                <th><?php  echo $row['TIEMPO_EMPLEADO']?></th>
                                                <th><?php  echo $row['RESPONSABLE']?></th>
                                                <th><?php  echo $row['FECHA_PROGRAMACION']?></th>
                                                <th><?php  echo $row['FECHA_DE_ENTREGA']?></th>
                                                <th><?php  echo $row['TRABAJO_EJECUTADO']?></th>
                                           
                                                <th><a href="actualizar.php?id=<?php echo $row['ORDEN'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['ORDEN'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        
    }

  include("cerrar_conexion.php");
}
?>
 

</body>

</html>