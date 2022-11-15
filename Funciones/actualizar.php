<?php
    include('./conexion.php');

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Css/styles.css">
    <title>Editar Registro - Tecnoteca ABM</title>
</head>
<body>
    <header>
        <h1>tecnoteca</h1> 
        <h1>san francisco</h1>
    </header>
    <div id="box-campos">
        <form action="./edit-registro.php" method="POST">
            <h2>editar datos</h2>
            <input class="campos" type="hidden" name="id" value="<?= $row['id'] ?>">
            <input class="campos" type="text" name="nombre" placeholder="nombre" value="<?= $row['name'] ?>">
            <input class="campos" type="text" name="apellido" placeholder="apellido" value="<?= $row['last'] ?>">
            <input class="campos" type="text" name="dni" placeholder="dni" value="<?= $row['dni'] ?>">
            <select class="campos" name="zona" value="<?= $row['zone'] ?>">
                <option value="Compus">Computadoras</option>
                <option value="Audi">Auditorio</option>
                <option value="VR">Lentes VR</option>
            </select>
            <input class="campos" type="datetime-local" name="fecha" placeholder="fecha y hora" value="<?= $row['date'] ?>">
            <input class="campos" type="tel" name="tel" pattern="[0-9]{4}-[0-9]{6}" placeholder="teléfono" value="<?= $row['phone'] ?>">

            <input class="btn campos" type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>