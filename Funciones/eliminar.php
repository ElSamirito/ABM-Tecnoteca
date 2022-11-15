<?php
    include('./conexion.php');

    $con = conbd();

    $id = $_GET['id'];

    $sql = "DELETE FROM registros WHERE id='$id'";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: ../index.php");
    }
?>