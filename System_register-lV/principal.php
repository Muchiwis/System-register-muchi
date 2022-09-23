<?php 
require_once("includes/cabecera.php");
?>

<?php
    
    require_once("conexion.php");
    $sql="SELECT * FROM alumnos";
    $resultado=$enlace->prepare($sql);
    //var_dump($resultado);
    $resultado->execute(array());
    
      $cont=1;
    /*while ($recorrido2=$resultado->fetch(PDO::FETCH_BOTH)){
        //var_dump($recorrido2);
        echo $cont.". Cod_ADM: ".$recorrido2[0]." Nombre: ".$recorrido2[1]." Apellido: ". $recorrido2[2]." Cargo: ".$recorrido2[3]. "<br>";
        $cont++;
    }*/
    
?>
<!-- CSS only -->

<main>
<style>
  .head-table{
    background-color:#f1f2f3;
  
}
h1{
    text-align: center;
}
th{
    text-align:center;
  }
  td,th{
    border: 2px solid rgb(4, 153, 128);
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 10px;
    padding-bottom: 10px;

} 
table{
    margin-top: 50px;
    caption-side: bottom;
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
}
#a1{
    margin-right: 30px;
}
td{
  text-align:center;
} 
</style>
  <section>
      <div class="container">
        <h1>Tabla de registros de alumnos</h1>
        <table class="table" border="2px">
          <thead>
            <tr class="head-table">
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Carrera</th>
              <th>Opcion</th>
            </tr>
          </thead>
          <tbody>


            <?php
            while($recorrido=$resultado->fetch(PDO::FETCH_BOTH)){
              ?>
              <tr>
                <td><?php echo $recorrido[0];?></td>
                <td><?php echo $recorrido[1];?></td>
                <td><?php echo $recorrido[2];?></td>
                <td><?php echo $recorrido[3];?></td>
                <td>
                  <a id="a1" href="#"><i class="bi bi-pencil-square"></i></a>
                  <a id="a1" href="#"><i class="bi bi-trash"></i></a>
                </td>
              </tr>

            <?php
              }
            ?>


            <!--<tr>
              <td>Soleado</td>
              <td>Mayormente soleado</td>
              <td>Parcialmente nublado</td>
            </tr>-->
          </tbody>
        </table>
      </div>
  </section>
</main>


<?php
  include_once('includes/pie.php');
?>