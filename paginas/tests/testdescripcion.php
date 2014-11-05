<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/inicio.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Sistema SIOV</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<script src="../../js/jquery-1.11.1.min.js"></script>
<script src="../../js/login.js"></script>
<script src="../../js/validaciones.js"></script>
<script src="../../js/alertify/alertify.min.js"></script>
<script src="../../js/alertify/mensajes.js"></script>
<script src="../../js/instituciones/listado.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'> <!-- link de google.fonts --> 


</head>

<body>

  <header>
    <div class="header"> 
    
    <?php 
    include('../../php/encabezadootros.php'); 
    include_once("../../clases/Conexion.php");
    ?>
    <?php /*include('php/menu.php');*/ ?>
    <!-- end .header -->

  </div>
</header>



<div id="area_trabajo">
<div class= "frame-forms">
<!-- <form action="" method="post"> -->

<div class="tabla-forms">
    <form action="testcontenido.php" method="post" >
    <div class="header-tabla-test">

      <div class="titulo">
        <label>
        <?php
            $codtest = $_POST['seleccion-test'];
            $dbconn = new Conexion();
            /*$dbconn = @pg_connect("host=192.168.1.20 port=5432 dbname=siov user=siov password=siov2014");*/
            $result = $dbconn->consultar("SELECT * FROM usuario NATURAL JOIN alumno NATURAL JOIN asocia_distintos NATURAL JOIN perfiltest NATURAL JOIN test WHERE codtest=$codtest ORDER BY nombretest ASC");
              /*pg_query($dbconn, "SELECT * FROM usuario NATURAL JOIN alumno NATURAL JOIN asocia_distintos NATURAL JOIN perfiltest NATURAL JOIN test WHERE codtest=$codtest ORDER BY nombretest ASC") or die("No se puede recuperar los dastos en este momento");*/
            
            $registro=pg_fetch_array($result);
            echo $registro['nombretest'] ." - Indicaciones generales";
            $_POST['seleccion-test']=$codtest;
          
      ?>
      </label>
      </div>
      <div class="botones">        
          <form action="testcontenido.php" method="post">
              <input name="continuar-test" value=<?php echo $codtest ?> style="display:none;">
              <input href="" id="continuar-test" type="submit" value="Iniciar test"> 

            </form>
            <!-- <input id="buscar" type="submit" value="Búsqueda"> -->
      </div>
    </div>
    <div class="contenido-tabla-forms">
      <?php
        echo "<br>".$registro['indicacionestest']."<br><br>" ;
      ?>
      


      </div>
      </form>
</div>
<?php

  if (!isset($_POST['seleccion-test'])) {
    echo "Acceso denegado";
    die;
  }    
  
?>
    
    
<!-- </form> -->

</div>

</div>

<footer>
  <div class="footer1">
    <?php include('../../php/pie_paginaotros.php'); ?>

    <!-- end .footer --></div>
  <div class="footer2">
  Derechos reservados 2014
    <!-- end .footer --></div>  
</footer>
  
  
  
    <!-- end .content -->
 
  
    

</body>
<!-- InstanceEnd --></html>