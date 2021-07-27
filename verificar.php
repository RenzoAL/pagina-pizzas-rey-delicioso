<?php
include_once 'cone.php';
$usuario= $_POST['usuario'];
$contra= $_POST['password'];


$consulta = "SELECT * FROM logindb WHERE usuario ='$usuario' and password ='$contra'";

$resultado= mysqli_query($conexion, $consulta);
$filas= mysqli_num_rows($resultado);

if ($filas>0){
    header("location:mostrar.php");
}else{
    echo '<script>alert("Usuario o contraseña incorrecto");</script>';
}


mysqli_free_result($resultado);
mysqli_close($conexion);