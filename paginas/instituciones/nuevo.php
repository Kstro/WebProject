<script src="../../js/instituciones/nuevo.js"></script>

<?php
  include_once("../../clases/Conexion.php");
?>
<div class= "frame-forms">

<form action="" method="post">

  <div class="tabla-forms">
    <form action="testdescripcion.php" method="post" >
      <div class="header-tabla-forms">

      <div class="titulo">
        <label>Instituciones - Nuevo registro</label>
        
      </div>
      <div class="botones">
            
            <input id="guardar" type="submit" value="Guardar">
            <input href="instituciones/listado.php" id="cancelar" type="submit" value="Cancelar">
      </div>
    </div>
    <div class="contenido-tabla-forms">
      <?php
          $dbconn = new Conexion();/*@pg_connect("host=192.168.1.20 port=5432 dbname=siov user=siov password=siov2014");*/
        
          $result = $dbconn->consultar("SELECT * FROM institucion ORDER BY nombreinstitucion ASC");
            
      ?>
      <table>
      <tr>
        <td>
          Dirección:
        </td>
        <td>
          <input type="text" required name="direccion-ins" class="textos">
        </td>
      </tr>

      <tr>
        <td>
          Encargado:
        </td>
        <td>
          <input type="text" required name="encargado-ins" class="textos">
        </td>
      </tr>

      <tr>
        <td>
          Encargado suplente:
        </td>
        <td>
          <input type="text" required name="suplente-ins" class="textos">
        </td>
      </tr>

      <tr>
        <td>
          Nivel educación:
        </td>
        <td>
          <select class= "desplegable" "required" name="nvledu-ins">
            <option value="">Seleccione un nivel...</option>
            <option value="1">Nivel 1</option>
            <option value="2">Nivel 2</option>
            <option value="3">Nivel 3</option>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          Modalidad:
        </td>
        <td>
          <select class= "desplegable" name="modalidad-ins">
            <option value="">Seleccione una modalidad...</option>
            <option value="1">Modalidad 1</option>
            <option value="2">Modalidad 2</option>
            <option value="3">Modalidad 3</option>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          Zona:
        </td>
        <td>
          <select class= "desplegable" name="zona-ins">
            <option value="">Seleccione una zona...</option>
            <option value="1">Zona 1</option>
            <option value="2">Zona 2</option>
            <option value="3">Zona 3</option>
          </select>
        </td>
      </tr>

      <tr>
        <td>
          Logo:
        </td>
        <td>
          <input type="file" required name="logo-ins">
        </td>
      </tr>

      <tr>
        <td>
          Entidad (MINED):
        </td>
        <td>
          <input type="text" required name="entidad-ins" class="textos">
        </td>
      </tr>

      <tr>
        <td>
          Predeterminada:
        </td>
        <td>
          <input type="radio" name="predet-ins" required>Si
          <input type="radio" name="predet-ins" required>No
        </td>
      </tr>
    </table>
        
    </div>
  </form>
</div>

    

    
</form>
  

</div>
<br>