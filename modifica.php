<?php
require_once('ModeloCliente.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>modifica  clientes</title>
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
		 alert('Vuelve al Menu');
		 if (confirm("¿Seguro desea Salir ?")) {
				document.modica.action = "index.html";
				document.modica.submit();
				}
	}
	function modi(){alert('Cliente modificado con exito')}
	</script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="jumbotron">
<h1 align="center" class="display-4">Consulta de Clientes que sera Modificado</h1>
<?php
$rut=$_POST['rut'];
$busca=new  cliente();
$resp=$busca->buscar($rut);
if ($resp) {
	?>
<center>
		<div id="foto" class="bg-light w-50 border border-dark rounded-pill">
      <?php foreach ($resp as $row): ?>
        <form name="modica" action="modifica2.php" method="POST" class="container p-4 rounded" >
         <table border="1" cellpadding="3" cellspacing="3" class="bg-light">
            <tr>
            <td>Rut:
            <td><input type="text" name="rut" value="<?php echo $row['rut'];?>" readonly>
            <tr>
            <td>Nombre:
            <td><input type="text" name="nombre" value="<?php echo $row['nombre'];?>" >
            <tr>
            <td>Apellido:
            <td><input type="text" name="apellido" value="<?php echo $row['apellido'];?>" >
            <tr>
            <td>Direccion:
            <td><input type="text" name="direccion" value="<?php echo $row['direccion'];?>" >
            <tr>
            <td>Deuda:
            <td><input type="text" name="deuda" value="<?php echo $row['deuda'];?>" >
            <tr>
         </table>
         <BR>
         <button type="submit" onclick="javascript:modi();" class="btn btn-primary rounded-pill">Modificar cliente</button>
				 <button type="submit" onClick="javascript:volver();" class="btn btn-dark rounded-pill">Cancelar</button>
        <form>
     <?php endforeach ?>
		</div>
 </center>
	<?php

}else{

echo"<script>
       alert('el codigo: $codigo no exixste!! ')
        window.location='modificar.php';
        </script>";
}

?>
</body>
</html>
