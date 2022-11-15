<?php
    include('./Funciones/conexion.php');

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Css/styles.css">
    <title>Tecnoteca ABM</title>
</head>
<body>
    <header>
        <h1>tecnoteca</h1> 
        <h1>san francisco</h1>
    </header>
    <div id="box-campos"> 
        <form action="./Funciones/add-registro.php" method="POST">
            <h2>añadir usuario</h2>

            <input type="text" name="nombre" placeholder="Nombre" class="campos">
            <input type="text" name="apellido" placeholder="Apellido" class="campos">
            <input type="text" name="dni" placeholder="DNI" class="campos">
            <select name="zona" class="campos">
                <option value="Compus">Computadoras</option>
                <option value="Audi">Auditorio</option>
                <option value="VR">Lentes VR</option>
            </select>
            <input type="datetime-local" name="fecha" placeholder="Fecha y Hora" class="campos">
            <input type="tel" name="tel" pattern="[0-9]{4}-[0-9]{6}" placeholder="Teléfono" class="campos">

            <input type="submit" value="Registrar" class="campos btn">
        </form>
    </div>

    <div>
        <h2>usuarios registrados</h2>
        
        <table id="colum-box">

            <tbody>
                <tr>
                    <th class="column-id">id</th>
                    <th class="column-id">nombre</th>
                    <th class="column-id">apellido</th>
                    <th class="column-id">dni</th>
                    <th class="column-id">zona</th>
                    <th class="column-id">fecha y hora</th>
                    <th class="column-id">teléfono</th>
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
                    <th><a class="btn" href="./Funciones/actualizar.php?id=<?= $row['id'] ?>" >editar</a></th>
                    <th><a class="btn" href="./Funciones/eliminar.php?id=<?= $row['id'] ?>" >eliminar</a></th>
                </tr>
                
                <?php endwhile; ?>
            </tbody>
        </table>
    
    </div>

    <footer> &copy; ABM realizada por alumnos de ProA Técnica</footer>

</body>
</html>