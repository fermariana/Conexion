<?php

include 'conexion.php';
//Se incluye el servicio que realiza la conexión con la base de datos
if($_SERVER['REQUEST_METHOD'] == 'POST'){ //Contiene el método de solicitud.

//Se declaran las variables de tipo POST con las que se registrara un cliente
//Tomando en cuenta que tiene que llamarse igual que en la base de datos	
$IDCliente=$_POST['IDCliente'];
$Nombre_C=$_POST['Nombre_C'];
$Numero_TelC=$_POST['Numero_TelC'];
$Direccion_C=$_POST['Direccion_C'];
$Ciudad_C=$_POST['Ciudad_C'];
$Estado_C=$_POST['Estado_C'];
$Contraseña=$_POST['Contraseña'];
$Email_C=$_POST['Email_C'];

$consulta="insert into cliente values('".$IDCliente."','".$Nombre_C."','".$Numero_TelC."','".$Direccion_C."','".$Ciudad_C."','".$Estado_C."','".$Contraseña."','".$Email_C."')";
//En la variable $consulta se insertan los datos en la base de datos que fueron ingresados desde la app

mysqli_query($conexion,$consulta) or die (mysqli_error()); //Se realiza la conexión mandando la variable $consulta
mysqli_close($conexion);
}
?>