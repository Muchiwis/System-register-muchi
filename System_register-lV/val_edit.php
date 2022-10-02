<?php
require_once("conexion.php");

if(isset($_POST['actualizar'])){
        $cod_actu=$_POST['cod_actu'];
        $name=$_POST['name'];
        $apellido=$_POST['apellido'];
        $carrera=$_POST['carrera'];

        if(!empty($name) and !empty($apellido) and !empty($carrera)){
            $sql="UPDATE administradores SET nombres = ?, apellidos = ?, cargo = ? WHERE cod_adm = ?";
            $resultado=$enlace->prepare($sql);
            $resultado->execute(array($name,$apellido,$carrera,$cod_actu));
            if($resultado==TRUE){
                ?> 
                    <script>
                        alert("Actualizado correctamente");
                    </script>
                <?php
                header('Location: principal.php');
            } 
        }
    }
?>