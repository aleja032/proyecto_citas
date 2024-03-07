<?php
$host='localhost';
$root='root';
$contraseña='';
$nombrebd='medpriority';
$conn= new mysqli($host,$root,$contraseña,$nombrebd);
if(!$conn){
    die("No es posible conectar a la base de datos");
}
?>