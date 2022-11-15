<?php
    include('./conexion.php');

    $con = conbd();
    
    $id = $_POST['id'];
    $name = $_POST['nombre'];
    $last = $_POST['apellido'];
    $dni = $_POST['dni'];
    $zone = $_POST['zona'];
    $date = $_POST['fecha'];
    $cel = $_POST['tel'];

    $sql = "UPDATE registros SET name='$name', last='$last', dni='$dni', zone='$zone', date='$date', phone='$cel' WHERE id='$id'";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../index.php");
    }
?>