<?php
require_once('ModeloCliente.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>consulta los clientes</title>
	<style type="text/css">
			body{
				background-image: url("img/fondo2.jpg");
				background-size: cover;
				background-repeat: no-repeat;

			}
			#foto{
				background-image: url("img/fondo71.jpg");
				background-size: cover;
				background-repeat: no-repeat;
			}
	</style>
    <script type="text/javascript">
    function volver()
    {
     if (confirm("¿Seguro desea salir ?")) {
        document.volvera.action = "index.html";
        document.volvera.submit();
        }
    }
		function elimi(){alert('Cliente eliminado con exito')}
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="jumbotron">
<h1 align="center" class="display-4">Consulta de Clientes que sera eliminado</h1>
<?php
$rut=$_POST['rut'];
$busca=new  cliente();
$resp=$busca->buscar($rut);
if ($resp) {
	?>
<center>
		<div id="foto" class="bg-light w-50 border border-dark rounded-pill">
      <?php foreach ($resp as $row): ?>
        <form action="elimina2.php" method="POST" name="volvera" class="container p-4 rounded">
         <table border="1" cellpadding="3" cellspacing="3" class="bg-light">
            <tr>
            <td>Rut:
            <td><input type="text" name="rut" value="<?php echo $row['rut'];?>" readonly>
            <tr>
            <td>Nombre:
            <td><input type="text" name="nombre" value="<?php echo $row['nombre'];?>" readonly>
            <tr>
            <td>Apellido:
            <td><input type="text" name="sexo" value="<?php echo $row['apellido'];?>" readonly>
            <tr>
            <td>Direccion:
            <td><input type="text" name="fecha" value="<?php echo $row['direccion'];?>" readonly>
            <tr>
            <td>Deuda:
            <td><input type="text" name="deuda" value="<?php echo $row['deuda'];?>" readonly>
            <tr>
         </table>
         <BR>
         <button type="submit"  onClick="javascript:elimi();" class="btn btn-primary rounded-pill">Eliminar</button>
          <button type="submit" onClick="javascript:volver();" class="btn btn-secondary rounded-pill">Cancelar</button>
        <form>
     <?php endforeach ?>
	 </div>
 </center>
	<?php

}else{

echo"<script>
       alert('el codigo: $rut no exixste!! ')
        window.location='eliminar.php';
        </script>";
}

?>
</body>
</html>
