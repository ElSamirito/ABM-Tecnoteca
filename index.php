<?php
    include('conexion.php');

    $con = conbd();

    $sql = "SELECT * FROM registros";

    $query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css" type="text/css">

    <title>Tecnoteca - ABM</title>
</head>
<body>
    <header>
        <h1 id="tecnoteca">TECNOTECA</h1> 
        <h1 id="sanfco">San Francisco - Gestión</h1>
    </header>
    <div id="box-campos"> 
        <form action="add-registro.php" method="POST">
            <h2>AÑADIR USUARIO</h2>

            <input type="text" name="nombre" placeholder="Nombre" class="campos">
            <input type="text" name="apellido" placeholder="Apellido" class="campos">
            <input type="text" name="dni" placeholder="DNI" class="campos">
            <select name="zona" placeholder="Zona a Utilizar" class="campos">
                <option value="Compus">Computadoras</option>
                <option value="Audi">Auditorio</option>
                <option value="VR">Lentes VR</option>
            </select>
            <input type="datetime-local" name="fecha" placeholder="Fecha y Hora" class="campos">
            <input type="tel" name="tel" pattern="[0-9]{4}-[0-9]{6}" placeholder="Teléfono" class="campos">

            <input type="submit" value="REGISTRAR" id="boton-registro">
        </form>
    </div>

    <div>
        <h2>USUARIOS REGISTRADOS</h2>
        
        <table id="box-columnas-id">
            
            <tbody>
                <tr>
                    <th class="columnas-id">ID</th>
                    <th class="columnas-id">Nombre</th>
                    <th class="columnas-id">Apellido</th>
                    <th class="columnas-id">DNI</th>
                    <th class="columnas-id">Zona</th>
                    <th class="columnas-id">Fecha y Hora</th>
                    <th class="columnas-id">Teléfono</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['name'] ?> </th>
                    <th> <?= $row['last'] ?> </th>
                    <th> <?= $row['dni'] ?> </th>
                    <th> <?= $row['zone'] ?> </th>
                    <th> <?= $row['date'] ?> </th>
                    <th> <?= $row['phone'] ?> </th>
                    <th class="boton-tabla"><a href="actualizar.php?id=<?= $row['id'] ?>" style="text-decoration:none">editar</a></th>
                    <th class="boton-tabla"><a href="eliminar.php?id=<?= $row['id'] ?>" style="text-decoration:none">eliminar</a></th>
                </tr>
                
                <?php endwhile; ?>
            </tbody>
        </table>
    
    </div>

    <footer> &copy; ABM realizada por alumnos de ProA Técnica</footer>

</body>
</html>