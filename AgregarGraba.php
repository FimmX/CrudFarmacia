<?php

require_once('ModeloCliente.php');
echo "llego";
$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$deuda=$_POST['deuda'];
echo $nombre;
echo $apellido;
echo $direccion;
echo $deuda;

$cliente=new cliente();
$reg=$cliente->registro($rut,$nombre,$apellido,$direccion,$deuda);
if ($reg) {
	header("location:listar.php");
}else{
    echo "fallo";
}

?>
