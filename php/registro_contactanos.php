<?php

include ('conexion_be.php');

$usuario=$_POST['usuario'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$query= "INSERT INTO reserva(usuario,email,mensaje) 
          VALUES('$usuario','$email','$mensaje')";

$ejecutar = mysqli_query($conn,$query);
?>