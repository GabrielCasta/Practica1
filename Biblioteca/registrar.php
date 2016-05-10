<!DOCTYPE>
<html>
<head>
  <title>Registrar</title>
</head>
<body>
<?php
$server ="localhost";
$usuario= "root";
$contraseña = "";
$bd= "biblioteca";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
 or dile("Error en la conexion");

$Id = $_POST['txtId'];
$Titulo = $_POST['txtTitulo'];
$Autor = $_POST['txtAutor'];
$Editorial = $_POST['txtEditorial'];
$Fecha_editorial = $_POST['txtFecha_Editorial'];
$SBN = $_POST['txtSBN'];

$insertar ="INSERT into datos values('$Id', '$Titulo', '$Autor',  '$Editorial', '$Fecha_editorial','$SBN')";

$resultado = mysqli_query($conexion,$insertar)
 or dile("Error al insertar registros");

mysqli_close($conexion);
echo "Datos insertados correctamente"

?>

</body>
</html>