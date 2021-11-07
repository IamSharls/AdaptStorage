<?php
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");

include "conectar.php";
$array = array();
$conn = conectarDB();

$sql = 'SELECT usuario, nombre, idTipoUsuario FROM usuarios';
$ejecutar = mysqli_query($conn,$sql);


while($fila = mysqli_fetch_assoc($ejecutar)) {
    $vector[] = array(
      "usuario" => $fila['usuario'],
      "nombre" => $fila['nombre'],
      "idTipoUsuario" => $fila['idTipoUsuario']
       ); }
      
$conn->close();
$json = json_encode($vector);

echo $json;


?>