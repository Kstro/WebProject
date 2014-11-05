<script src="../../js/instituciones/nuevo.js"></script>

<div class= "frame-forms">
<form action="" method="post">

    <table class= "tabla-forms">
      <tr>
        <th>
          Instituciones - Modificar registro
        </th>
          <th>
          <div class="botones">
            <!-- <input id="nuevo" type="submit" value="Nuevo"> -->
            <input id="guardar" type="submit" value="Guardar">
            <input href="instituciones/listado.php" id="cancelar" type="submit" value="Cancelar">
          </div>
        </th>            
      </tr>    
      <tr>
        <td>
          Nombre institución:
        </td>
        <td>
          <input type="text" required class="textos"d>
        </td>
      </tr>

      <tr>
        <td>
          Dirección:
        </td>
        <td>
          <input type="text" required class="textos">
        </td>
      </tr>

      <tr>
        <td>
          Encargado:
        </td>
        <td>
          <input type="text" required class="textos">
        </td>
      </tr>

      <tr>
        <td>
          Encargado suplente:
        </td>
        <td>
          <input type="text" required class="textos">
        </td>
      </tr>

      <tr>
        <td>
          Nivel educación:
        </td>
        <td>
          <select class="desplegable">
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
          <select class="desplegable">
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
          <select class="desplegable">
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
          <input type="file" required>
        </td>
      </tr>

      <tr>
        <td>
          Entidad (MINED):
        </td>
        <td>
          <input type="text" required class="textos">
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
</form>

</div>
<br>