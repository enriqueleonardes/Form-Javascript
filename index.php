
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link rel="stylesheet" href="librerary/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
    <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale-1.0, maximum-scale-1.0, minimum-scale-1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">


</head>
<body>

<!----------------------------------------FORM-------------------------------------------->

<div class="container col-md-6 mt-4">
    <div class="raw text-center text-light centrar">

        <form action="" class=" col-md-8 form" name="form" method="post" id="form">
        <h2><i class="fas fa-user-circle"></i><br><strong>Sign</strong> Up</h2>

        <!--------Name-------->

        <div name="Name">
        <br>
        <label class="float-left">Nombre</label>
        <br>
            <input type="text" class="form-control" placeholder="Ingrese Nombre" id="name" name="name">
        <div class="alert-light" id="alerta2" name="alerta2"></div>
        </div>

        <!--------Suname-------->

        <div name="Suname">
        <label class="float-left mt-3">Apellido</label>
        <br>
            <input type="text" class="form-control" placeholder="Ingrese Apellido" id="suname" name="suname">
        <div class="alert-light" id="alerta3" name="alerta3"></div>
        </div>

        <!-------Identification-------->

        <div name="Identification">
        <label class="float-left mt-3">Identificación</label>
        <br>
            <input type="text" class="form-control" placeholder="Ingrese Cedula" id="identification" name="identification" maxlength="8">
        <div class="alert-light" id="alerta4" name="alerta4"></div>
        </div>

         <!-------Mail-------->

        <div name="Mail">
        <label class="float-left mt-3">Correo Electronico</label>
        <br>
            <input type="text" class="form-control" placeholder="Example@gmail.com" id="mail" name="mail">
        <div class="alert-light" id="alerta5" name="alerta5"></div>
        </div>

        <!-------Password-------->

        <div name="Password">
        <label class="float-left mt-3">contrasena</label>
        <br>
            <input type="text" class="form-control" placeholder="Ingrese Contrasena" id="password" name="password">
        <div class="alert-light" id="alerta6" name="alerta6"></div>
        </div>

         <!-------btn-Submit-------->

        <br>
        <div class="form-group form-group-lg">
            <input type="submit" name="Enviar1" class="btn btn-light btn-block" id="btn" value="Sign Up">
        </div>

</form>
</div>
</div>
<?php 
$id ="";
$name = $_POST['name'];
$suname = $_POST['suname'];
$identification = $_POST['identification'];
$mail = $_POST['mail'];
$password = $_POST['password'];



 ?>

<?php include"database.php"; ?>
</body>
    <script src="js/validacion.js"></script>
        <script src="library/bootstrap/js/bootstrap.min.js"></script>
        <script src="library/bootstrap/js/popper.min.js"></script>
        <script src="library/bootstrap/js/jquery-3.3.1.slim.min.js"></script>
        <script src="librerary/fontwesome-icon/js/all.js"></script>

    </body>
</html>