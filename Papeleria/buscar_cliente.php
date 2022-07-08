<?php
include 'conexion.php';
$Email_C=$_GET['Email_C'];

$consulta ="select * from cliente  where Email_C=$Email_C";
$resultado = $conexion ->query($consulta);

while($fila=$resultado -> fetch_array())
{
	$cliente[]=array_map('utf8_encode', $fila);
}
echo json_encode($cliente);
$resultado -> close();

?>