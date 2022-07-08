<?php

include 'conexion.php'; 
//Se incluye en servicio que realiza la conexión con la base de datos


//Se declaran dos variables de tipo POST donde se envia la contraseña y el email
$Contraseña=$_POST['Contraseña']; 
$Email_C=$_POST['Email_C'];



//Se hace uso de una sentencia preparada se ocupan la ? para evitar un ataque de inyección de sql
$sentencia=$conexion->prepare("SELECT * FROM cliente WHERE  Contraseña=? AND Email_C=?");

$sentencia->bind_param('ss',$Contraseña, $Email_C); //Parametros que se envian en la sentencia
//'ss'-->Hacen referencia al inicio de cada tipo de dato en este caso ambos son String
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         echo json_encode($fila,JSON_UNESCAPED_UNICODE); 
         //En esta condición verificamos si encontro los registros enviados    
}
$sentencia->close();
$conexion->close();

?>