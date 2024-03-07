<?php
session_start();
require_once('conexion.php');

$correo= $_POST["correo"];

$sql="SELECT * FROM usuario WHERE correo='$correo'";
$consulta= mysqli_query($conn,$sql);

if(mysqli_num_rows($consulta)>0){
    $datos= mysqli_fetch_array($consulta);
   /* $nombreCompleto = $datos['nombre'];

    $partesDelNombre = explode(' ', $nombreCompleto); // Divide la cadena en un array usando el espacio como delimitador
    $primerNombre = $partesDelNombre[0];     // Accede al primer elemento del array, que sería el primer nombre
    $_SESSION['nombre'] = $primerNombre;*/
    $_SESSION['nombre']= $datos['nombre'];
    $_SESSION['id']=$datos['id_usuario'];
    $_SESSION['edad']=$datos['edad'];
    $_SESSION['telefono']=$datos['telefono'];
    $_SESSION['tipo_documento']=$datos['tipo_documento'];

    $_SESSION['autenticado']=true;

    echo "<script> window.location='../index.php'</script>";
}else{
    echo "<script>console.log('error inicio')</script>";

    echo "<script> window.location='../index.php'</script>";
}

?>