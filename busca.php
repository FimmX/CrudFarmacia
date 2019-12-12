<?php

require_once('ModeloCliente.php');
$rut='';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>consulta</title>
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

     if (confirm("¿Seguro desea Salir ?")) {
        document.viajar.action = "index.html";
        document.viajar.submit();
        }

    }


</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="jumbotron">
<h1 align="center" class="display-4">Consulta de Clientes</h1>
<?php
$rut=$_POST['rut'];
$busca=new  cliente();
$resp=$busca->buscar($rut);
if ($resp) {
	?>
    <form name="viajar"  method="Post" class="container p-2">
<center>
	<div id="foto" class="bg-light w-50 border border-dark rounded-pill p-3">
      <?php foreach ($resp as $row): ?>
         <table border="2" cellpadding="3" cellspacing="3" class="bg-light table w-50">
            <tr>
            <td>Rut:
            <td><?php echo $row['rut'];?>
            <tr>
            <td>Nombre:
            <td><?php echo $row['nombre'];?>
            <tr>
            <td>Apellido:
            <td><?php echo $row['apellido'];?>
            <tr>
            <td>Direccion:
            <td><?php echo $row['direccion'];?>
            <tr>
            <td>Deuda:
            <td><?php echo $row['deuda'];?>
            <tr>
         </table>
     <?php endforeach ?>
      <button type="submit" onClick="javascript:volver();" class="btn btn-dark rounded-pill">Volver</button>
		</div>
 </center>
</form>

	<?php
}else{
echo"<script> alert('el codigo: $rut no exixste!! ')
window.location='buscar.php';
        </script>";
}

?>
</body>
</html>
