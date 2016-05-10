<!DOCTYPE>
<html>
<head>
 <title>Biblioteca</title>
</head>
<body>
<form action="registrar.php" method="POST">
Id:<input type="text" name="txtId"> <br/>
Titulo: <input type="text" name="txtTitulo"> <br/>
Autor:<input type="text" name="txtAutor"> <br/> 
Editorial:<input type="text" name="txtEditorial"> <br/>
Fecha_editorial:<input type="text" name="txtFecha_Editorial"> <br/>
SBN:<input type="text" name="txtSBN"> <br/>
<input type="submit" value="Registrar" name"btnRegitar">
</form>

<p>--------------------------------------------------------------------</p>

<form action= "eliminar.php" method="POST">
Id: <input type ="text" name ="txtId"><br/>
<input type="submit" value="Eliminar Registro" name="btnEliminar">
</form>

<p>--------------------------------------------------------------------</p>

<form action= "actualizar.php" method="POST">
Id:<input type="text" name="txtId"> <br/>
Titulo: <input type="text" name="txtTitulo"> <br/>
<input type="submit" value="Actualizar Registro" name="btnActualizar">
</form>

<p>--------------------------------------------------------------------</p>

<form action= "mostrar.php" method="POST">
<input type="submit" value="Ver Registros" name=btnRegistros">
</form>
</body>
</html>