<?php

$host = 'localhost';
$clave = '';
$usuario = 'root';
$bd = 'enfoque';

$conexion = mysqli_connect($host,$usuario,$clave,$bd);


if($conexion){
    echo("Se hizo la conexion exitosamente");


}else{
    echo("error al conectarse");
}



?>