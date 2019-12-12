<?php

require_once('ModeloCliente.php');
$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$deuda=$_POST['deuda'];

$modifica=new cliente();
$resultado=$modifica->modificar($rut,$nombre,$apellido,$direccion,$deuda);

if($resultado){
 header('location:listar.php');
}else{
echo "no se modifico nada";
}

?>
