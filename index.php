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
    <title>Tecnoteca - ABM</title>
</head>
<body>
    <header>
        <h1>TECNOTECA San Francisco - Gestión</h1>
    </header>
    <div>
        <form action="add-registro.php" method="POST">
            <h1>Añadir Usuario</h1>

            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <input type="text" name="dni" placeholder="DNI">
            <select name="zona" placeholder="Zona a Utilizar">
                <option value="Compus">Computadoras</option>
                <option value="Audi">Auditorio</option>
                <option value="VR">Lentes VR</option>
            </select>
            <input type="datetime-local" name="fecha" placeholder="Fecha y Hora">
            <input type="tel" name="tel" pattern="[0-9]{4}-[0-9]{6}" placeholder="Teléfono">

            <input type="submit" value="Añadir Registro">
        </form>
    </div>

    <div>
        <h2>Usuarios Registrados</h2>
        
        <table>
            <thead>
            
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Zona</th>
                    <th>Fecha y Hora</th>
                    <th>Teléfono</th>
                    <th></th>
                    <th></th>
                </tr>
            
            </thead>
            
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                
                <tr>
                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['name'] ?> </th>
                    <th> <?= $row['lastname'] ?> </th>
                    <th> <?= $row['dni'] ?> </th>
                    <th> <?= $row['zone'] ?> </th>
                    <th> <?= $row['date'] ?> </th>
                    <th> <?= $row['phone'] ?> </th>
                    <th><a href="">Editar</a></th>
                    <th><a href="">Eliminar</a></th>
                </tr>
                
                <?php endwhile; ?>
            </tbody>
        </table>
    
    </div>

</body>
</html>