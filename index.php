<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/inicio.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Sistema SIOV</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="/js/cargasenlaces.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Istok+Web' rel='stylesheet' type='text/css'> <!-- link de google.fonts --> 


</head>
<body>

 

<header>
    <div class="header"> 
    <div id="acceso">
      <div>
        <a href="paginas/login.php">Iniciar sesión</a>
      </div>
    </div>
    <?php include('php/encabezadoppal.php'); ?>
    <?php /*include('php/menu.php');*/ ?>
    <!-- end .header -->

  </div>
</header>




<div id="area_trabajo">
    <div id="enlaces">
      <div><a href="">BACHILLERATOS</a>
      
      </div>
      <div>
        <a href="">UNIVERSIDADES</a>
      </div>
      <div>
        <a href="">MANUALES</a>
      </div>
      <div>
        <a href="">VIDEOJUEGO</a>
      </div>
    </div>
    <div>
    <table id="tablacontenidos">
      

      <tr>
        <td>
          <img src="imagenes/bachilleratos.png">
        </td>
        <td>
          <img src="imagenes/universidades.png">
        </td>
        <td>
          <img src="imagenes/manuales.png">
        </td>

        <td>
          <img src="imagenes/videojuegos.png">
        </td>
      </tr>

      <tr>
        <td>
          Conoce las diferentes especialidades de bachillerato y las instituciones que las imparten
        </td>
        <td>
          Conoce las opciones de universidades y las carreras que ofrecen
        </td>
        <td>
          Descubre todas las bondades de SIOV
        </td>

        <td>
          Prueba nuestro demo de videojuego, es una opción divertida de conocer tu opción vocacional
        </td>
      </tr>
    </table> 
    </div>
</div>

<footer>
  <div class="footer1">
    <?php include('php/pie_pagina.php'); ?>

    <!-- end .footer --></div>
  <div class="footer2">
    Derechos reservados 2014
    <!-- end .footer --></div>  
</footer>
  
  
</body>
<!-- InstanceEnd --></html>
