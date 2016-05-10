<?php
   $user = $_POST["user"];
   $contra = $_POST["contra"];
 
   if (($user  == "root") AND ($contra == "1234")) {
      echo "Bienvenido Usuario";
   } else {
      echo "Usuario o password incorrectos";
     
   }
?>