<?php 
require_once("includes/cabecera.php");
?>

<?php
    
    require_once("conexion.php");
    $sql="SELECT * FROM administradores";
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
<?php
  if(isset($_GET['mensaje']) and ($_GET['mensaje'])=='eliminado'){
?>
  <script>
    alert("Eliminado correctamente.");
  </script>

<?php
  
  }
?>

<main>
<style>
main{
  margin-bottom:208px;
}
  .head-table{
    background-color:rgb(41,168,121);
}
h1{
    text-align: center;
}
th{
    text-align:center;
    color:black;

  }
td{
  color:white;
}
  td,th{
    
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 10px;
    padding-bottom: 10px;
    border:2px solid red;

}

tr{
  border: 2px solid rgb(0,0,0);
  background-color:rgb(15, 0, 21);
  border:2px solid red;
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
.icon-edit{
  filter: invert(75%) sepia(61%) saturate(348%) hue-rotate(102deg) brightness(92%) contrast(95%);
}
/* https://codepen.io/sosuke/pen/Pjoqqp ------------ PARA CAMBIAR EL COLOR DE LOS ICONOS*/

</style>
  <section>
      <div class="container">
        <h1>Tabla de registros de alumnos</h1>
        <table class="table">
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
                  <a id="a1" href="editar.php?codigo_edit=<?php echo $recorrido[0]?>"><img class="icon-edit" src="img/pencil-square-edit.svg" alt=""></a>
                  <a id="a1" href="eliminar.php?codigo=<?php echo $recorrido[0]?>"><img class="icon-edit" src="img/trash.svg" alt=""></a>
                </td>
              </tr>

            <?php
              }
            ?>
          </tbody>
        </table>
      </div>
  </section>
</main> 

<?php
  include_once('includes/pie.php');
?>