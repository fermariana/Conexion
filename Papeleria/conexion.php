<?php

$hostname='localhost'; //Variable del servidor
$database='papeleria'; //Variable de la base de datos
$username='root'; //Variable del usuario
$password=''; //Variable de la contraseña

$conexion=new mysqli($hostname,$username,$password,$database);
//Se realiza la conexión con las variables ya declaradas
if($conexion->connect_errno)
{
	//Con esta condición verificaremos si se realiza la conexión
	echo "lo sentimos :("; //Si no se realiza la conexión se mostrará este mensaje 
}
?>