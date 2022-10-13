<?php 
$tipoDoc = $_GET['tipoDoc'];
$documento = $_GET['documento'];
$nombre = $_GET['nombre'];
$direccion = $_GET['direccion'];
$correo = $_GET['correo'];
$contraseña = $_GET['contraseña'];
include_once "conexion.php";
$conexion = conexion();
if ($documento == "" ||$nombre == ""||$direccion == "" ||
$correo == "") {
    header("refresh:0;url=registroEstudiantes.php");
    echo "<script> alert('Campos vacios!!!') </script>";
    return;
}
$sql = "INSERT INTO estudiantes(tipoDoc,documento,nombre,direccion,correo,contraseña) VALUES ('$tipoDoc','$documento','$nombre','$direccion','$correo','$contraseña')";
$query=mysqli_query($conexion, $sql);
if($query){
    echo "<script> alert('registro exitoso!!!') </script>";
    header("refresh:0;url=inicioSesion.php");
}
?>
