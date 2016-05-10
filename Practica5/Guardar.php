<html>

<head> 
  
  <?php
   $Nombre = $_POST["txtNombre"];
   $ApellidoP= $_POST["txtApellidoP"];
   $ApellidoM= $_POST["txtApelllidoM"];
   $Codigo = $_POST["txtCodigo"];

   $contenido ="
   Nombre: $Nombre
   Apellido Paterno: $ApellidoP 
   Apellido Materno: $ApellidoM
   Codigo: $Codigo
   ";

   $archivo = fopen("recibido/$Nombre.csv", "w");
   fwrite($archivo,$contenido);
   ?>

   </head>

   <body>
   Formulario enviado!!!!

    </body>  

</html>