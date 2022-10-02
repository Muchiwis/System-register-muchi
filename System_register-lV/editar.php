<?php
    require_once("includes/cabecera.php");
    require_once("conexion.php");
    
    $codigo_edit=$_GET['codigo_edit'];

    $sql="SELECT * FROM administradores WHERE cod_adm = ?";
    $resultado=$enlace->prepare($sql);
    $resultado->execute(array($codigo_edit));
    while($row=$resultado->fetch(PDO::FETCH_BOTH)){
        //echo $row[1];
        //echo $row[2];
        //echo $row[3];
?>

<main>
    <link rel="stylesheet" href="sec_estilos/editar.css">
    <h1>Editar Usuario</h1>
    <section class="section-form">
        <div class="cont-form">
            <form action="val_edit.php" method="post">
                <h3>Actualiza los campos</h3>
                <div class="cod_edit">
                    <input type="hidden" value="<?php echo $row[0]?>" name="cod_actu">
                </div>
                <div class="input">
                    <label for="">Usuario</label>
                    <input type="text" name="name" id="" value="<?php echo $row[1];?>">
                </div>
                <div class="input">
                    <label for="">Apellido</label>
                    <input type="text" name="apellido" value="<?php echo $row[2];?>">
                </div>
                <div class="input">
                    <label for="">Carrera</label>
                    <input type="text" name="carrera" value="<?php echo $row[3];?>">
                </div>
                <div class="submit">
                    <button type="submit" class="btn btn-success" name="actualizar">Actualizar</button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php
 }
    require_once("includes/pie.php")
?>