<?php
    function conbd(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        
        $bd = "tecnoteca";

        $connect = mysqli_connect($host, $user, $pass);

        mysqli_select_db($connect, $bd);

        return $connect;
    }
?>