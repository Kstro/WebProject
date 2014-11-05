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
<script src="../../js/datatable/jquery.dataTables.js"></script>
<script src="../../js/instituciones/listado.js"></script>
<script src="../../js/sticky/jquery.sticky.js"></script>
<script src="../../js/test/test.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'> <!-- link de google.fonts --> 



</head>

<body>

  <header>
    <div class="header"> 
    
    <?php include('../../php/encabezadootros.php'); 
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
    <form action="testdescripcion.php" method="post" >
    <div class="header-tabla-test">

      <div class="titulo">
        <label>Perfil de test habilitados</label>
        
      </div>
      <div class="botones">   
         
        <input id="escoger-test" type="submit" name="escoger-test" value="Comenzar test">
            <!-- <input id="buscar" type="submit" value="Búsqueda"> -->
      </div>
    </div>
    <div class="contenido-tabla-forms">
      <?php
          /*$dbconn = @pg_connect("host=192.168.1.20 port=5432 dbname=siov user=siov password=siov2014");*/
          $dbconn = new Conexion();
        
        
          
          
            echo "<td style='text-align:left; padding-left:40px;' colspan=\"2\">";
            $result = $dbconn->consultar("SELECT * FROM usuario NATURAL JOIN alumno NATURAL JOIN asocia_distintos NATURAL JOIN perfiltest NATURAL JOIN test ORDER BY nombretest ASC");
            /*pg_query($dbconn, "SELECT * FROM usuario NATURAL JOIN alumno NATURAL JOIN asocia_distintos NATURAL JOIN perfiltest NATURAL JOIN test ORDER BY nombretest ASC") or die("No se puede recuperar los dastos en este momento");*/
          ?>
      
        <table class= "tabla-registros-alt">      
          <thead>
            <tr>
              <th colspan="2">
                Listado de test por perfil
              </th>
            </tr>
          </thead>
          
          <tbody>
          <?php
                /*$arr = pg_fetch_all($result);*/
                while ($registro=pg_fetch_array($result)) {
                  ?>
                  <tr>
                    <td>
                      <?php
                        echo $registro['nombretest'];
                      ?>
                    </td>
                    <td>
                        <input name="seleccion-test" value=<?php echo "'".$registro['codtest']."'" ?> type="checkbox" class="seleccion-test" id=<?php echo "'".$registro['codtest']."'" ?>>   
                    </td>
                  </tr>
                  <?php
                  } 
                    
                
              ?>
          </tbody>
        </table>

      </div>
      </form>
    </div>
  </div>
  

  

    
<!-- </form> -->

</div>
<br>
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
