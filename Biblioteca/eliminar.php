<!DOCTYPE>
<html>
<head>
 <title>Eliminar</title>
</head>
<body>
<?php

$server ="localhost";
$usuario= "root";
$contraseņa = "";
$bd= "biblioteca";

$conexion = mysqli_connect($server, $usuario, $contraseņa, $bd)
 or dile("Error en la conexion");

$Id = $_POST['txtId'];

mysqli_query($conexion,"DELETE from datos where Id='$Id'")
or die("Error al eliminar los datos");

mysqli_close($conexion);
echo "Datos Eliminados Correctamente";

?>
</body>
</html>