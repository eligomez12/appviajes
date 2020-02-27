<?php
$conexion = mysqli_connect("localhost", "root", "", "appviajes");
if (!$conexion){
    echo 'ERROR EN LA CONECTAR LA BASE DE DATOS';
}
else {
    //echo 'CONEXION EXITOSA';
}

//<?php 
/*$usuario = "root";
$contraseña = "";
try {
    $conectarbd = new PDO('mysql:host=localhost:3306;dbname=travels;charset=utf8', $usuario, $contraseña);
    $conectarbd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 } catch (PDOException  $e) {
     echo '¡Error al conectar con la base de datos de la intranet!<br> ' . $e -> getMessage();
 }*/
 ?>
