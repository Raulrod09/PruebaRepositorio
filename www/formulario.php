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
 $name=$_POST["nombre"];
$tel=$_POST["telefono"];
$email=$_POST["Email"];
$text=$_POST["textarea"];

 
  echo "El Nombre ingresado es: ".$name; ?> <br>
  <?php echo "El Número de Telefono ingresado es: ".$tel; ?> <br>
  <?php echo "El Correo ingresado es: ".$email; ?> <br>
  <?php echo "El Mensaje ingresado es: ".$text;?> <br>

</body>
</html>