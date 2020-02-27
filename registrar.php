<?php

include('cn.php');
$usuario = $_POST['usuario'];
$inicio = $_POST['inicio'];
$destino = $_POST['destino'];
$medio_transporte = $_POST['medio_transporte'];
$ruta = $_POST['ruta'];
$precio = $_POST['precio'];
$insertar = "INSERT INTO viajes(usuario, inicio, destino, medio_transporte, ruta, precio) VALUES ('$usuario','$inicio', '$destino', '$medio_transporte', '$ruta', '$precio')";

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
  echo mysqli_error($resultado);
}else {
  echo '<script>
          alert("Viaje registrado correctamente");
          window.history.go(-1);
        </script>';
}

  /*$_SESSION['message'] = 'Viaje Guardado Correctamente';
  $_SESSION['message_type'] = 'Guardado Correctamente';
  header('Location: ingresar_viaje.php');*/


?>

