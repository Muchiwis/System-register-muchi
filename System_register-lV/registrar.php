<?php
    require_once("includes/cabecera.php");
?>
<?php
    require_once("conexion.php");

    /*$user=$_POST['name'];
    $apellido=$_POST['apellido'];
    $carrera=$_POST['carrera'];*/

     /*if(isset($_POST['name']) and isset($_POST['apellido']) and isset(['carrera'])){

     }*/

     if(isset($_POST['registrar'])){
        $user=$_POST['name'];
        $apellido=$_POST['apellido'];
        $carrera=$_POST['carrera'];
   
        if(!empty($user) and !empty($apellido) and !empty($carrera)){
            $sql="INSERT INTO administradores (nombres,apellidos,cargo) VALUES (?,?,?)";
            $resultado=$enlace->prepare($sql);
            $resultado->execute(array($user,$apellido,$carrera));

            ?>
                <script>
                    alert("Registado correctamente");
                </script>
            <?php

        }else{
            ?>
                <script>
                    alert("campos vacios");
                </script>

            <?php
        }
    }
?>

<link rel="stylesheet" href="sec_estilos/registrar1.css">
<main>
    <div class="form-registrar">
        <form action="registrar.php" method="post">
            <h1>Bienvenido al registro de usuario</h1>
            <div class="cont-form">
                <div class="login">
                    <h2>Login</h2>
                </div>
                <div class="input">
                    <label for="">Nombre</label>
                    <input type="text" name="name" placeholder="Introduce your name">
                </div>
                <div class="input">
                    <label for="">Apellido</label>
                    <input type="text" name="apellido" placeholder="Introduce your lastname">
                </div>
                <div class="input">
                    <label for="">Carrera</label>
                    <input type="text" name="carrera" placeholder="Introduce your career">
                </div>
                <div class="submit">
                    <button type="submit" class="btn btn-danger" name="registrar">Registrar</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?php
    require_once("includes/pie.php")
?>