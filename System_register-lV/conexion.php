<?php 
 try {
     $enlace = new PDO('mysql:host=127.0.0.1;dbname=SistemaAlumno;','root','');

     if(!empty($enlace)){
         //echo "Base de datos funcional";
     }else{
         echo "conexion fallida.".PHP_EOL;
     }
     $enlace->exec("SET CHARACTER SET utf8");
 } catch (Exception $e) {
        die('Error: '. $e->getMessage());
 }
?>
