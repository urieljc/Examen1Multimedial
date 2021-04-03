<?php
    include "../config.php";
    session_start();
    $values =$_POST['colores'];
    echo $values;
    echo $_SESSION['ci'];
    $ci= $_SESSION["ci"]  ;
    $datos= "UPDATE USUARIO SET APARIENCIA = '$values'WHERE CI='$ci'";
    $resultado = mysqli_query($con, $datos);
    header("location:principal.php");
?>