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
<script src="../../js/test/test.js"></script>
<script src="../../js/sticky/jquery.sticky.js"></script>
<script src="../../js/instituciones/listado.js"></script>
<script src="../../js/countdown/jquery.plugin.js"></script>
<script src="../../js/countdown/jquery.countdown.js"></script>
<script src="../../js/countdown/reloj.js"></script>


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


<div class="tabla-forms">
  <form action="testcontenido.php" method="post" >
    <div class="header-tabla-test">

      <div class="titulo">
        <label>
        <?php
            $codtest = $_POST['continuar-test'];          
            $dbconn = new Conexion();
            /*$dbconn = @pg_connect("host=192.168.1.20 port=5432 dbname=siov user=siov password=siov2014");*/              
            $result_pregunta = $dbconn->consultar("SELECT * FROM test NATURAL JOIN secciones NATURAL JOIN lo_forman_varias NATURAL JOIN pregunta WHERE codtest=$codtest"); /*pg_query($dbconn, "SELECT * FROM usuario NATURAL JOIN alumno NATURAL JOIN asocia_distintos NATURAL JOIN perfiltest NATURAL JOIN test WHERE codtest=$codtest ORDER BY nombretest ASC") or die("No se puede recuperar los dastos en este momento");*/
            $nombretest = $dbconn->consultar("SELECT * FROM test WHERE codtest=$codtest");
            $nombretest  = pg_fetch_array($nombretest);
            echo $nombretest['nombretest'];  
      ?>
      </label>
      </div>
      <div class="botones">        
        <div id="reloj">
        </div>   
              <input name="enviar-test" value=<?php echo $codtest ?> style="display:none;">
              <input href="" id="enviar-test" type="submit" value="Enviar test"> 


            <!-- <input id="buscar" type="submit" value="Búsqueda"> -->
      </div>
    </div>
    <div class="contenido-tabla-forms">
    
          <table class="tabla-test" style="width: 55%">
            <thead>
              <tr>
                <td>
                </td>
                <td>
                </td>
              </tr>
            </thead>
            <tbody>
              <?php
                while ($registro_pregunta=pg_fetch_array($result_pregunta)) {
              ?>
              <tr>
                <td>
                  <?php
                    echo $registro_pregunta['enunciadopregunta'];
                  ?>
                </td>
                <td>
                  <?php
                    $codpregunta=$registro_pregunta['codpregunta'];
                    $result_solucion = $dbconn->consultar("SELECT * FROM pregunta NATURAL JOIN solucion WHERE codpregunta=$codpregunta"); 
                    switch ($registro_pregunta['codtipopregunta']) {
                      case '1': //Selección Múltiple respuesta única
                          while ($registro_solucion=pg_fetch_array($result_solucion)) {            
                            echo "<input type='radio' name='". $codpregunta ."' required value='".$registro_solucion['puntuacionsolucion'] ."'>".$registro_solucion['alternativasolucion'];
                          }
                        break;
                      case '2': //Selección de múltiples imágenes con varias respuestas
                        
                        break;
                      case '3': //Complementar. Verificar ortografía\r\n
                          while ($registro_solucion=pg_fetch_array($result_solucion)) {            
                            echo "<input type='text' name='". $codpregunta ."' required value='".$registro_solucion['puntuacionsolucion'] ."'>".$registro_solucion['alternativasolucion'];
                          }
                        break;
                      case '4': //Selección Múltiple con escala de valores selección única
                          while ($registro_solucion=pg_fetch_array($result_solucion)) {            
                            echo "<input type='radio' name='". $codpregunta ."' required value='".$registro_solucion['puntuacionsolucion'] ."'>".$registro_solucion['alternativasolucion'];
                          }
                        break;
                      case '5': //Selección Múltiple con escala de valores selección única con imágenes
                        break;
                      case '6': // Falso y verdadero
                        
                          while ($registro_solucion=pg_fetch_array($result_solucion)) {            
                            echo "<input type='radio' name='". $codpregunta ."' required value='".$registro_solucion['puntuacionsolucion'] ."'>".$registro_solucion['alternativasolucion'];
                          }
                        break;
                      default:
                        echo "Esto no se muestra";
                        break;
                    }                  
            ?>
                </td>
                <?php
                  }
                ?>                
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="2">
                     
                </td>
            
              </tr>
            </tfoot>
          </table>
          <br>
    </div>
  </form>
</div>



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