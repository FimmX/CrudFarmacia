<?php
require_once "ModeloCliente.php";
 $registros = 7;
@$pagina = $_GET ['pagina'];
if (!isset($pagina)) {
$pagina = 1;
$inicio = 0;
}else {
$inicio = ($pagina-1) * $registros;
}
$usuarioModel = new cliente();
$reg = $usuarioModel->listar();
$total_registros=$usuarioModel->paginacion();
$total_paginas = ceil($total_registros / $registros);

if($reg){
?>
   <!DOCTYPE html>
   <html lang="es">
   <head>
   <meta charset="utf-8">
   <style type="text/css">
       body{
         background-image: url("img/fondo2.jpg");
         background-size: cover;
         background-repeat: no-repeat;

       }
   </style>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Usuarios registrados</title>
    <script type="text/javascript">

    function volver()
    {
          document.liss.action = "index.html";
          document.liss.submit();
    }
    </script>
   </head>
    <body class="jumbotron">
    <h1 align="center" class="display-4">Lista de los clientes</h1>
    <center>
    <table width="100%" border="1" class="table table-light" >
             <tr class="table-dark">
                <td class="w-auto border border-dark">Nro.
                <td class="w-auto">Rut
                <td class="w-auto">Nombre
                <td class="w-auto">Apellido
                <td class="w-auto">Direccion
                <td class="w-auto">Deuda

<?php
            $n=0;
    foreach ($reg as $row):
             $n++;
    if($n%2 == 0){
 ?>

    <tr bgcolor="blue">
<?php
    }else{
?>
    <tr bgcolor="blue">
<?php
    }
            ?>

            <tr>
                <td class="border border-dark"><?php echo $n;?>
                <td class="border border-dark"><?php echo $row['rut']; ?>
                <td class="border border-dark"><?php echo $row['nombre']; ?>
                <td class="border border-dark"><?php echo $row['apellido']; ?>
                <td class="border border-dark"><?php echo $row['direccion']; ?>
                <td class="border border-dark"><?php echo $row['deuda']; ?>
            </tr>
            <?php
            endforeach
            ?>

     </table><br>
     <?php

if($total_registros>$registros){
if(($pagina - 1) > 0) {
echo "<span><a  href='?pagina=".($pagina-1)."'>&laquo; Anterior</a></span> ";
}
// Numero de paginas a mostrar
$num_paginas=10;
//limitando las paginas mostradas
$pagina_intervalo=ceil($num_paginas/2)-1;
// Calculamos desde que numero de pagina se mostrara
$pagina_desde=$pagina-$pagina_intervalo;
$pagina_hasta=$pagina+$pagina_intervalo;
// Verificar que pagina_desde sea negativo
if($pagina_desde<1){ // le sumamos la cantidad sobrante para mantener el numero de enlaces mostrados $pagina_hasta-=($pagina_desde-1); $pagina_desde=1; } // Verificar que pagina_hasta no sea mayor que paginas_totales if($pagina_hasta>$total_paginas){
$pagina_desde-=($pagina_hasta-$total_paginas);
$pagina_hasta=$total_paginas;
if($pagina_desde<1){
$pagina_desde=1;
}
}
for ($i=$pagina_desde; $i<=$pagina_hasta; $i++){
if ($pagina == $i){
echo "<span>".$pagina."</span> ";
}else{
echo "<span><a  href='?pagina=$i'>$i</a></span> ";
}
}
if(($pagina + 1)<=$total_paginas) {
echo " <span><a href='?pagina=".($pagina+1)."'>Siguiente &raquo;</a></span>";
}
}
?>
</center>
<br><br>
<center>
<form name="liss" action="index.html" method="post">
  <button class="btn btn-dark" onclick="volver()">Volver</button>
</form>

</center>
<!--Script de boostrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 </body>
 </html>
<?php
}else{

echo "<script>
       alert('no exixste registros!! ')
        window.location='index.html';
        </script>";
}

?>
