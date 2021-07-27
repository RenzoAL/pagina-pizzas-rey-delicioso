<?php
include 'cone.php';

$dni=$_POST['txtdni'];
$nombre=$_POST['txtnombre'];             
$apellido=$_POST['txtapellido'];
$celular=$_POST['txtcelular'];
$tipo=$_POST['txttipo'];
$precio=$_POST['txtprecio'];

$insertarDatos = "INSERT INTO pizza VALUES(
'$dni',
'$nombre',
'$apellido',
'$celular',
'$tipo',
'$precio')";


$resultado=mysqli_query($conexion,$insertarDatos);
if(!$resultado){
echo"Error En la linea de sql";
}else{
    echo "<script>
                alert('Su número de orden es #215');
                window.location= 'pizzas.php'
    </script>";
}


mysqli_close($conexion);
  