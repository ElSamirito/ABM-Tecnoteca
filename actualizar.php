<?php
    include('conexion.php');

    $con = conbd();

    $id = $_GET['id'];

    $sql = "SELECT * FROM registros WHERE id='$id'";

    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" type="text/css">
    <title>Editar Registro - Tecno ABM</title>
</head>
<body>
    <header>
        <h1 id="tecnoteca">TECNOTECA</h1> 
        <h1 id="sanfco">San Francisco - Gestión</h1>
    </header>
    <div id="box-campos">
        <form action="edit-registro.php" method="POST">
            <h2>EDITAR DATOS</h2>
            <input class="campos" type="hidden" name="id" value="<?= $row['id'] ?>">
            <input class="campos" type="text" name="nombre" placeholder="Nombre" value="<?= $row['name'] ?>">
            <input class="campos" type="text" name="apellido" placeholder="Apellido" value="<?= $row['last'] ?>">
            <input class="campos" type="text" name="dni" placeholder="DNI" value="<?= $row['dni'] ?>">
            <select class="campos" name="zona" placeholder="Zona a Utilizar" value="<?= $row['zone'] ?>">
                <option value="Compus">Computadoras</option>
                <option value="Audi">Auditorio</option>
                <option value="VR">Lentes VR</option>
            </select>
            <input class="campos" type="datetime-local" name="fecha" placeholder="Fecha y Hora" value="<?= $row['date'] ?>">
            <input class="campos" type="tel" name="tel" pattern="[0-9]{4}-[0-9]{6}" placeholder="Teléfono" value="<?= $row['phone'] ?>">

            <input id="boton-registro" type="submit" value="ACTUALIZAR">
        </form>
    </div>
</body>
</html>