<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Agregar Clientes</title>

<style type="text/css">
	input:required:invalid{
		border: 1px solid red;
	}
	input:required:valid {
        border: 1px solid green;
    }

    input:focus{
    	color: blue;
    }
		body{
			background-image: url("img/fondo1.jpg");
			background-size: cover;
			background-repeat: no-repeat;

		}
		#cuadro{ background-image: url("img/fondo71.jpg"); background-size: cover; background-repeat: no-repeat;}
</style>
<script type="text/javascript">

	function volver()
	{
		 alert('Volviendo al menu');
     if (confirm("¿Seguro desea salir sin guardar?")) {
        document.agregar.action = "index.html";
        document.agregar.submit();
        }

	}
	function agreg(){alert('Cliente registrado con exito')}
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="p-3">
<div id="cuadro" class="jumbotron justify-content-center container bg-light w-50 border border-secondary">
<h1 class="display-4 container rounded-top m-2">Ingreso de clientes</h1>
<br>
<form name="agregar" action="AgregarGraba.php" method="Post">
<div class="container rounded">
<div class="form-group">
    <label for="exampleInputNombre">Rut</label>
    <input type="text" class="form-control" id="rut" name="rut" aria-describedby="rutlHelp" placeholder="Ingrese Rut">
  </div>
  <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombrelHelp" placeholder="Ingrese Nombre">
  </div>
	<div class="form-group">
		<label for="Apellido">Apellido</label>
	  <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="nombrelHelp" placeholder="Ingrese Apellido">
	</div>
	<div class="form-group">
		<label for="Direccion">Direccion</label>
		<input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="nombrelHelp" placeholder="Ingrese Direccion">
	</div>
  <div class="form-group">
  	<label for="exampleInputDeuda">Deuda</label>
    <input type="text" class="form-control" name="deuda" id="exampleDeuda" placeholder="Ingrese Deuda">
  </div>
  <button type="submit" onClick="javascript:agreg();" class="btn btn-primary">Enviar</button>
  <button type="submit" onClick="javascript:volver();" class="btn btn-dark">Volver</button>
</div>
</form>
</div>
</body>
</html>
