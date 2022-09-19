<?php 
try {
    $enlace = new PDO('mysql:host=127.0.0.1;dbname=sistemaAcademico;','root','');
    if(!empty($enlace)){
        echo "Base de datos funcional";
    }else{
        echo "conexion fallida.".PHP_EOL;
    }
} catch (PDOException $th) {
    echo "Error type: ".$th->getMessage();
}

?>