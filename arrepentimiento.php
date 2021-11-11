<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="floatingInput" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrepentimiento</title>
    <link href="css/style-bot copy.css" rel="stylesheet">
    <!-- Vinculacion a boostrap css-->
    <link href="bootstrap/bootstrap-5.1.2-dist/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/bootstrap-5.1.2/scss/bootstrap.scss" rel="stylesheet">

</head>

<body>
    <!-- Vinculacion a js -->
    <script src="bootstrap/bootstrap-5.1.2-dist/js/bootstrap.bundle.js"></script>
    <!-- ---------------- -->
    <?php include('www/conexion-BD.php')?>

    <div class="container border">
        <form action="#" method="post">

            <br>
            <div class="col p-3 border mb-3 mx-auto">
                <H1 class="text-center">Formulario de Arrepentimiento</h1>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">

                        <input class="form-control mb-3" type="text" id="floatingInput" name="nombre" required />
                        <label for="floatingInput">Nombre: </label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input class="form-control mb-3" type="text" id="floatingInput" name="Apellido" required />
                        <label for="floatingInput">Apellido: </label>
                    </div>

                </div>
            </div>
            <div class="form-floating">
                <input class="form-control mb-3 border " type="number" id="floatingInput" name="doc" required />
                <label for="floatingInput">Número de DNI: </label>
            </div>
            <div class="form-floating">
                <input class="form-control mb-3 border " type="email" id="floatingInput" name="Email" size="auto"
                    required aria-describedby="emailHelp" />
                <label for="floatingInput">Correo Electrónico: </label>
            </div>
            <div class="form-floating">
                <input class="form-control mb-3 border " type="tel" id="floatingInput" name="telefono" />
                <label for="floatingInput">Número de Telefono: </label>
            </div>
            <div class="form-floating">
                <input class="form-control mb-3 border" type="num" id="floatingInput" name="orden" required></input>
                <label for="floatingInput">Número de Orden: </label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" name="textarea" id="floatingTextarea"></textarea>
                <!-- para que funcione no tiene que haber espacio entre ></ -->
                <label for="floatingTextarea">Motivo de la revocacion de la compra: </label>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mb-3">




                <input type="submit" style="text-decoration: none" name="Enviar" value="Arrepentirse de la Compra"
                    class="btn btn btn-outline-danger me-md-2" id="liveAlertBtn"></input>

            </div>
            <?php include('www/Formulario-gen.php') ?>
        </form>
    </div>

</body>

</html>