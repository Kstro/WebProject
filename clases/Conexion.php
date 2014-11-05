<?php

class Conexion
{
    var $host;//direccion ip del host donde nos conectamos a la bd
    var $bd;//nombre de la base de datos
    var $usuario;//usuario de conexion
    var $password;//clave del usuario de conexion
    var $link;//almacenamos el link para luego destruirlo
 
        //constructor en el constructor colocamos los datos por defecto, a fin de recibir de manera opcional
    function __construct($host='192.168.1.20', $bd='siov', $user='siov', $pass='siov2014')
    {
            //asigno valores para ensamblar el string de conexion
            $this->host=$host;
            $this->bd=$bd;
            $this->usuario=$user;
            $this->password=$pass;
    }
 
        //funcion que ejecuta la consulta en la base de datos
    //en esta funcion envio el sql puede ser insert, update, select
    function consultar($sql)
        {
        //emsamblamos el string de conexion
        $datos_bd="host='$this->host' dbname='$this->bd' user='$this->usuario' password='$this->password'";
        //establecemos el link
        $link=@pg_connect($datos_bd);
        if (!$link) {
            die("Error de conexión con el servidor de datos.");
        }
        
        //cargamos la variable para el destructor el cual elimina la conexion
        $this->link = $link;
        //ejecutamos la consulta
        $result = pg_query($link,$sql);
        if(!$result) echo $sql;//si no ejecuta la consulta imprimo el sql que llega solo cuando hacemos pruebas
        return $result;
    }
 
        //destructor: aca elimino la conexion con postgres
        function __destruct()
        {
            if ($this->link) {
                # code...
                pg_close($this->link);
            }
           
        }
}
?>
