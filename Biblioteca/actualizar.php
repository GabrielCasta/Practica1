<!DOCTYPE>
<html>
<head>
 <title>Actualizar</title>
</head>
<body>
<?php

$server ="localhost";
$usuario= "root";
$contrase�a = "";
$bd= "biblioteca";

$conexion = mysqli_connect($server, $usuario, $contrase�a, $bd)
 or dile("Error en la conexion");

$Id = $_POST['txtId'];
$Titulo = $_POST['txtTitulo'];

mysqli_query($conexion,"UPDATE datos set Titulo='$Titulo' where Id='$Id'")
or die("Error al actulizar los datos");

mysqli_close($conexion);
echo "Datos Actualizados Correctamente";

?>
</body>
</html>