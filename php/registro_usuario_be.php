<?php
include ('conexion_be.php');
$nombre_completo = $_POST['nombre_completo'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contrasena) 
          VALUES('$nombre_completo','$correo','$usuario','$contrasena')";

//verificar que el correo no se repita en BD


$verificar_correo = mysqli_query($conn,"SELECT*FROM usuarios WHERE correo='$correo'");

if(mysqli_num_rows($verificar_correo)>0){
    echo'
    <script>
    alert("Este correo ya esta registrado, intenta con otro diferente");
    window.location= "../registro.php"
    </script>
    ';
    exit();
}

//verificar que el nombre de usuario no se repita en BD


$verificar_usuario = mysqli_query($conn,"SELECT*FROM usuarios WHERE usuario='$usuario'");

if(mysqli_num_rows($verificar_usuario)>0){
    echo'
    <script>
    alert("Este Usuario ya esta registrado, intenta con otro diferente");
    window.location= "../registro.php"
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conn,$query);

?>