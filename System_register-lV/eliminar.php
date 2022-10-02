<?php 
require_once("conexion.php");
    $cod_delete = $_GET['codigo'];
    $sql="DELETE FROM administradores WHERE cod_adm = ? ";
    $query=$enlace->prepare($sql);
    // var_dump($query);
    try {
        $query->execute(array($cod_delete));
        var_dump($query);
        if($query==TRUE){
            header('Location: principal.php?mensaje=eliminado');
            }
        ?> 
        <?php
    } catch (Exception $th) {
        ?>
        <script> 
            alert("error al eliminar registro: ".$th->GetMessage());
        </script>
   <?php
    }

    
?>