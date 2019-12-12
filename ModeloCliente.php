<?php

require_once ('modelo.php');

class cliente extends modelo{
protected $rut;
protected $nombre;
protected $apellido;
protected $direccion;
protected $deuda;

public	function __construct(){
    parent::__construct();
}

public function registro($rut,$nombre,$apellido,$direccion,$deuda){

$sql="INSERT INTO clientes(rut,nombre,apellido,direccion,deuda) VALUES('".$rut."','".$nombre."','".$apellido."','".$direccion."','".$deuda."')";
$resultado=$this->_db->prepare($sql);
$re=$resultado->execute();
	if (!$re) {
	echo "fallo el ingreso de datos ";
}else{
	return $re;
	$re->close();
	$this->_db->close();
}
}

public function buscar($rut){

$sql="SELECT *FROM clientes WHERE rut='".$rut."'";
$busca=$this->_db->query($sql);
$respuesta=$busca->fetch_all(MYSQLI_ASSOC);
	if ($respuesta) {
       return $respuesta;
	$respuesta->close();
	$this->_db->close();
}
}


public function eliminar($rut){

 $sql="DELETE FROM clientes where rut='".$rut."'";
 $elimina=$this->_db->prepare($sql);
 $re=$elimina->execute();
 if (!$re) {
	echo "fallo la eliminacion del Cliente ";
}else{
	return $re;
	$re->close();
	$this->_db->close();
}
}

public function modificar($rut,$nombre,$apellido,$direccion,$deuda){

	$sql="UPDATE clientes SET nombre='".$nombre."',apellido='".$apellido."',direccion='".$direccion."',deuda='".$deuda."' WHERE rut='".$rut."'";
   $modifica=$this->_db->query($sql);

  if(!$modifica){
   echo "fallo la modificacion del Cliente";
  }else{
  	return $modifica;
	$modifica->close();
	$this->_db->close();
  }
}


public function listar(){

$registros = 7;
@$pagina = $_GET ['pagina'];
if (!isset($pagina)) {
$pagina = 1;
$inicio = 0;
}else {
$inicio = ($pagina-1) * $registros;
}
$total_registros=$this->paginacion();
$total_paginas = ceil($total_registros / $registros);
$sql="SELECT*FROM clientes order by rut ASC LIMIT ".$inicio." , ".$registros." ";
$resultado=$this->_db->query($sql);
$usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
if ($usuarios) {
 return $usuarios;
$usuarios->close();
$this->_db->close();
}
}


public function paginacion(){
  $sql="SELECT*FROM clientes";
  $resultado=$this->_db->query($sql);
  $respuesta=$resultado->num_rows;
  return $respuesta;
  $respuesta->close();
  $this->_db->close();
}


}



?>
