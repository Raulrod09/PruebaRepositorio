<?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="cursom3";
    
    $enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$enlace){

      echo "Error en la conexion del Servidor";

    }
    ?><br>