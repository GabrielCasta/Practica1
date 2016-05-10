<!DOCTYPE>
<html>
<head>
 <title>Mostrar</title>
</head>
<body>
<?php

$server ="localhost";
$usuario= "root";
$contraseña = "";
$bd= "biblioteca";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
 or dile("Error en la conexion");

$consulta = mysqli_query($conexion, "SELECT from datos")
 or die("Error al traer Datos");

echo'<table border="1">';
echo'<tr>';
echo'<th id="Id">Id</th>';
echo'<th id="Titulo">Titulo</th>';
echo'<th id="Autor">Autor</th>';
echo'<th id="Editorial">Editorial</th>';
echo'<th id="Fecha_Editorial">Fecha_Editorial</th>';
echo'<th id="SBN">SBN</th>';
echo '</tr>';

while($extraido = mysqli_fetch_array($consulta))
{
echo '<tr>';
echo '<td>' .$extraido['Id'].'</td>';
echo '<td>' .$extraido['Titulo'].'</td>';
echo '<td>' .$extraido['Autor'].'</td>';
echo '<td>' .$extraido['Editorial'].'</td>';
echo '<td>' .$extraido['Fecha_Editorial'].'</td>';
echo '<td>' .$extraido['SBN'].'</td>';
echo '</tr>';
}

mysqli_close($conexion);
echo '</table>';

?>
</body>
</html>