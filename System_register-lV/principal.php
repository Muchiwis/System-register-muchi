<?php
    require_once("conexion.php");
    $sql="SELECT * FROM administradores";
    $resultado=$enlace->prepare($sql);
    //var_dump($resultado);
    $resultado->execute(array());
    
      $cont=1;
    while ($recorrido2=$resultado->fetch(PDO::FETCH_BOTH)){
        //var_dump($recorrido2);
        echo $cont.". Cod_ADM: ".$recorrido2[0]." Nombre: ".$recorrido2[1]." Apellido: ". $recorrido2[2]." Cargo: ".$recorrido2[3]. "<br>";
        $cont++;
    }
?>
