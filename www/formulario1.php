<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
  <?php
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="formulario1";
    
    $enlace=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

    if(!$enlace){

      echo "Error en la conexion del Servidor";

    }
    ?><br>
<?php

      if(isset($_POST['Enviar'])){

                  
          $name=$_POST["nombre"];
          $tel=$_POST["telefono"];
          $email=$_POST["Email"];
          $text=$_POST["textarea"];
          $id=rand(1,99);

          $insertarDatos="INSERT INTO formulario10 VALUES('$id',
                                                          '$name',
                                                          '$tel',
                                                          '$email',
                                                          '$text')";
          $ejecutarInsertar=mysqli_query($enlace,$insertarDatos);

          if(!$ejecutarInsertar){
            echo "Error en la linea SQL";
          }
        }
?>
<?php
$name=$_POST["nombre"];
$tel=$_POST["telefono"];
$email=$_POST["Email"];
$text=$_POST["textarea"];
$id=rand(1,99);
?>
<?php echo "El Nombre ingresado es: ".$name; ?> <br> 
  <?php echo "El Número de Telefono ingresado es: ".$tel; ?> <br>
   <?php echo "El Correo ingresado es: ".$email; ?> <br>
   <?php echo "El Mensaje ingresado es: ".$text;?> <br> 

</body>
</html>

