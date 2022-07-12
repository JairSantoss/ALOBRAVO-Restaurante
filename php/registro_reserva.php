<?php
include('conexion_be.php');
//recibo todos los datos del formulario
 $dia=$_POST['dia'];
 $hora=$_POST['hora'];
 $nombre=$_POST['nombre'];
 $telefono=$_POST['telefono'];
 $correo=$_POST['correo'];
 $personas=$_POST['personas'];

echo "Los datos son los siguientes: <br>";
echo "$dia,$hora,$nombre,$telefono,$correo, $personas";
 $query="INSERT INTO reservaciones_mesa (dia, id, hora, nombres, telefono, correo, personas)
        VALUES ('$dia', '$hora', '$nombre', '$telefono', '$correo', '$personas')";
 $ejecutar =mysqli_query($conn , $query)
             


?>