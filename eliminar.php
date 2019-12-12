<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
	<title>eliminar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style type="text/css">
				body{
					background-image: url("img/fondo2.jpg");
					background-size: cover;
					background-repeat: no-repeat;

				}
		</style>

<script type="text/javascript">
function volver()
{
	 alert('Vuelve al Menu');
	 if (confirm("¿Seguro desea Salir ?")) {
			document.deleti.action = "index.html";
			document.deleti.submit();
			}
}
function validar(){
    var form= document.form;
    if(form.rut.value==0){
        alert("ingresa el codigo!!");
        form.rut.value="";
        form.rut.focus();
        return false;
    }

    form.submit();
}

function limpiar(){
    document.form.reset();
    document.form.rut.focus();
}
</script>
</head>
<body onload="limpiar()" class="jumbotron container">
	<div class="mt-5">


<h1 class="display-4 d-flex justify-content-center">Buscar</h1>
<form name="deleti" action="elimina.php" method="POST" class="justify-content-center w-50 container">
	<div class="form-group">
		<label class="lead">Rut:</label><input type="text" name="rut" class="form-control rounded-pill" ><br><br>
		<div class="d-flex justify-content-around">
			<button onclick="validar()" type="submit" class="btn btn-primary rounded-pill">Buscar</button>
			<button type="reset" class="btn btn-secondary rounded-pill">Limpiar</button>
			<button type="submit" onclick="volver()" class="btn btn-primary rounded-pill">Volver</button>
		</div>
	</div>
</form>
</div>
</body>
</html>
