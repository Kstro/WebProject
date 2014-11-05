<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/inicio.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Sistema SIOV</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/login.js"></script>
<script src="../js/validaciones.js"></script>
<script src="../js/alertify/alertify.min.js"></script>
<script src="../js/alertify/mensajes.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'> <!-- link de google.fonts --> 


</head>

<body>

  <header>
    <div class="header"> 
    
    <?php include('../php/encabezado.php'); ?>
    <?php /*include('php/menu.php');*/ ?>
    <!-- end .header -->

  </div>
</header>



<div id="area_trabajo">
<!-- Inicia el login y las div necesarias para hacer el estilo -->
    <div id="login">
      <div>
        <label>Iniciar sesión</label>
      </div>
      <!-- Inicio del formulario -->
      <form id="slick-login" method="POST" action="lobby.php"> 
        <label for="username">username</label><input id="inputuser" type="text" name="username" class="placeholder" placeholder="Usuario">
        <label for="password">password</label><input id="inputpass" type="password" name="password" class="placeholder" placeholder="Contraseña">
        <div>
          <input id="acceder" type="submit" value="Acceder">
        </div>
      </form><!-- Fin del formulario -->

    </div>    
<!-- Fin del login -->
</div>

<footer>
  <div class="footer1">
    <?php include('../php/pie_pagina.php'); ?>

    <!-- end .footer --></div>
  <div class="footer2">
  Derechos reservados 2014
    <!-- end .footer --></div>  
</footer>
  
  
  
    <!-- end .content -->
 
  
    

</body>
<!-- InstanceEnd --></html>
