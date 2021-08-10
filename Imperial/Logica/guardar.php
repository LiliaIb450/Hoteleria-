<?php
require "conexion.php";

$nombre = $_POST['nombre'];
$apellidos =$_POST['apellidos'];
$habitacion = $_POST['habitacion'] ;

$insertar = "INSERT INTO reservas (nombre,apellidos,habitacion) VALUES ('$nombre','$apellidos','$habitacion') ";

$consultas = mysqli_query($conexion, $insertar) ;

if($consultas){
    echo
    "<script> alert('Habitacion registrada');
    location.href = '../index.html';
   </script>";


}else{
    echo
    "<script> alert('Error al registrar habitacion');
    location.href = '../index.html';
   </script>";
}
?>