<?php

require_once('ModeloCliente.php');
$rut=$_POST['rut'];

$eliminar=new cliente();
$reg=$eliminar->eliminar($rut);

if($reg){
 header('location:listar.php');
}else{
echo "no se elimino nada";
}

?>