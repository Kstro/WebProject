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
<div>
<?php include('../../php/menu.php'); ?>
</div>
<br><br><br>
  <div class="contenido">

  
<div class= "frame-forms">
<form action="" method="post">

  <div class="tabla-forms">
    <form action="testdescripcion.php" method="post" >
    <div class="header-tabla-forms">

      <div class="titulo">
        <label>Instituciones - búsqueda</label>
        
      </div>
      <div class="botones">
            <!-- <input id="buscar" type="submit" value="Búsqueda"> -->
            <input href="nuevo.php" id="nuevo-listado" type="submit" value="Nuevo">
            <input href="modificar.php" id="modificar" type="submit" value="Modificar">
            <input id="eliminar" type="submit" value="Eliminar">
            <input id="limpiar" type="submit" value="Limpiar">
      </div>
    </div>
    <div class="contenido-tabla-forms">
      <?php
          $dbconn = new Conexion();/*@pg_connect("host=192.168.1.20 port=5432 dbname=siov user=siov password=siov2014");*/
        
          $result = $dbconn->consultar("SELECT * FROM institucion ORDER BY nombreinstitucion ASC");
            
      ?>
        <br>
        <table class= "tabla-registros" >      
          <thead>
            <tr>
              <th>
                Selección
              </th>

              <th>
                Nombre institución
              </th>
              <th>
                Dirección
              </th>
              <th>
                Encargado suplente
              </th>
              <th>
                Modalidad
              </th>
              <th>
                Zona
              </th>
              <th>
                Entidad (MINED)
              </th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>
                Selección
              </th>

              <th>
                Nombre institución
              </th>
              <th>
                Dirección
              </th>
              <th>
                Encargado suplente
              </th>
              <th>
                Modalidad
              </th>
              <th>
                Zona
              </th>
              <th>
                Entidad (MINED)
              </th>
            </tr>
          </tfoot>
          <tbody>
          <?php
                /*$arr = pg_fetch_all($result);*/
                while ($registro=pg_fetch_array($result)) {
                  ?>

                  <tr>
                    <td>          
                      <input type="checkbox" class="seleccion-ins" id=<?php echo "'".$registro['codinstitucion']."'" ?>>   
                    </td>
                    <td>
                      <?php
                        echo $registro['nombreinstitucion'];
                      ?>
                    </td>
                      
                    
                    <td>             
                      <?php
                        echo $registro['direccioninstitucion'];
                      ?>
                    </td>
                    <td>             
                      <?php
                        echo $registro['encargadoinstitucion'];
                      ?>
                    </td>
                    <td>             
                      <?php
                        echo $registro['modalidadinstitucion'];
                      ?>
                    </td>
                    <td>             
                      <?php
                        echo $registro['zonainstitucion'];
                      ?>
                    </td>
                    <td>             
                      <?php
                        echo $registro['entidadinstitucion'];
                      ?>
                    </td>
                  </tr>
                  
                  <?php
                
                } 
               
            
                
              ?>
          </tbody>
        </table>    
        <br>
    </div>
  </form>
</div>

</form>
</div>
</div>
<br>
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
