<?php
    include('conexion.php');

    $con = conbd();
    
    $id = null;
    $name = $_POST['nombre'];
    $last = $_POST['apellido'];
    $dni = $_POST['dni'];
    $zone = $_POST['zona'];
    $date = $_POST['fecha'];
    $cel = $_POST['tel'];

    $sql = "INSERT INTO registros VALUES('$id', '$name', '$last', '$dni', '$zone', '$date', '$cel')";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: index.php");
    }
?>