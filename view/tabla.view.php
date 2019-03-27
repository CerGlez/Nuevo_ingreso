

<?php
include 'procesos/eliminar.php';


?>
<?php require_once "conexion.php"; 



$con = new mysqli($host,$user,$pw,$db);
$sql="SELECT * FROM ficha  ";

$result=mysqli_query($con,$sql) or
die("Problemas en el select".mysqli_error($con));



?>
<div class="container-fluid">


  <div class="table-responsive">
<table  class="table table-hover table-condensed"  id="iddatatable" style="width: 100%;">
  
<thead  style="background-color:#000; color: #fff; font-weight: bold; ">
  
<tr  >
  
       <td>Folio</td>
        <td>Nombre</td>
        <td>Curp</td>
        <td>Email</td>
      <td>Eliminar</td>

</tr>

</thead>

<tfoot style="background-color:#ccc; color: #fff; font-weight: bold; ">

<tr>
  
        <td>Folio</td>
        <td>Nombre</td>
        <td>Curp</td>
        <td>Email</td>
      <td>Eliminar</td>
</tr>
</tfoot>


<tbody >
	<?php
while ($mostrar=mysqli_fetch_row($result)) {
  # code...

  ?>
<tr>
  
      <td><?php echo $mostrar[0];  ?></td>
         <td><?php echo $mostrar[3];  ?></td>
        <td><?php echo $mostrar[7];  ?></td>
        <td> <?php echo $mostrar[19];  ?>  </td>
     <td><form action="" method="POST">
  <input type="hidden" name="id" value="<?php echo $mostrar[0];  ?>">

<button 
class="btn btn-danger btn-sm " type="submit" name="btnAccion" id="btnenviar" value="EliminarArt">
                          <span class="fas fa-trash-alt"></span>

</button>


</form></td>
</tr>
<?php } ?>
</tbody>
</table>


</div>
</div>

<script type="text/javascript">
  

$(document).ready( function () {
    $('#iddatatable').DataTable({
"language":idioma_espanol



    });
} );

var idioma_espanol ={
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}

</script>

