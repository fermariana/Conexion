<?php

include 'conexion.php'; 
//Se incluye en servicio que realiza la conexión con la base de datos



$IDFactura=$_GET['IDFactura']; 


$consulta="SELECT *FROM factura WHERE IDFactura='$IDFactura' ";
$resultado=$conexion->query($consulta);
while($fila=$resultado->fetch_array())

{
	$factura[]=array_map('utf8_encode', $fila);
}
echo json_encode($factura);
$resultado->close();



?>