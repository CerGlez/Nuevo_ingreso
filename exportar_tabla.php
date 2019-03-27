<?php 
$errors = '';
if($_REQUEST['titulo']!=""){
header("Pragma: public");
header("Expires: 0");
$filename = $_POST['titulo'].".xls";

header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>


<?php require_once "conexion.php"; 



$con = new mysqli($host,$user,$pw,$db);
$sql="SELECT * FROM ficha  ";

$result=mysqli_query($con,$sql) or
die("Problemas en el select".mysqli_error($con));


}else{

header('Location: cpanel.php');

}
?>

<table  class="table table-hover table-condensed"  id="iddatatable" style="width: 100%;">
  
<thead  style="background-color:#000; color: #fff; font-weight: bold; ">
  
<tr  >
  
        <td>Folio</td>
        <td>Nombre</td>
        <td>Edad</td>
        <td>sexo</td>

        <td>nacionalidad</td>
        <td>Fecha nacimiento</td>
        <td>Nacimiento</td>
        <td>Estado civil</td>

        <td>Domicilio</td>
        <td>Colonia</td>
                <td>CP</td>

        <td>Estado</td>
        <td>Municipio</td>

        <td>Localidad</td>
        <td>Telefono</td>
        <td>Celular</td>
        <td>Email</td>

         <td>Puesto laboral</td>
        <td>transporte</td>
        <td>Carrera 1</td>
        <td>Carrera 2</td>

         <td>Carrera 3</td>
        <td>Turno</td>
        <td>Padre 1</td>
        <td>Ocupacion</td>

            <td>Lucagr de trabajo</td>
        <td>Telefono 1</td>
      
 <td>Padre 2</td>
        <td>Ocupacion</td>

            <td>Lucagr de trabajo</td>
        <td>Telefono 2</td>


         <td>Secundaria</td>
        <td>Localidad</td>
        <td>Municipio</td>
        <td>Promedio</td>
         <td>Año de egreso</td>


</tr>

</thead>

<tbody >
	<?php
while ($mostrar=mysqli_fetch_row($result)) {
  # code...

  ?>
<tr>
  
        <td><?php echo $mostrar[0];  ?></td>
  
        <td><?php echo $mostrar[3];  ?></td>
        <td><?php echo $mostrar[4];  ?></td>
        <td><?php echo $mostrar[5];  ?></td>
        <td><?php echo $mostrar[6];  ?></td>
        <td><?php echo $mostrar[7];  ?></td>
        <td><?php echo $mostrar[8];  ?></td>
        <td><?php echo $mostrar[9];  ?></td>
        <td><?php echo $mostrar[10]; ?></td>
        <td><?php echo $mostrar[11]; ?></td>
        <td><?php echo $mostrar[12]; ?></td>
        <td><?php echo $mostrar[13]; ?></td>
        <td><?php echo $mostrar[14]; ?></td>
        <td><?php echo $mostrar[15]; ?></td>
        <td><?php echo $mostrar[16]; ?></td>
        <td><?php echo $mostrar[17]; ?></td>
        <td><?php echo $mostrar[18]; ?></td>
        <td><?php echo $mostrar[19]; ?></td>
        <td><?php echo $mostrar[20]; ?></td>
        <td><?php echo $mostrar[21]; ?></td>
        <td><?php echo $mostrar[22]; ?></td>
        <td><?php echo $mostrar[23]; ?></td>
         <td><?php echo $mostrar[24];  ?></td>
        <td><?php echo $mostrar[25];  ?></td>
        <td><?php echo $mostrar[26];  ?></td>
        <td><?php echo $mostrar[27];  ?></td>
        <td><?php echo $mostrar[28];  ?></td>
        <td><?php echo $mostrar[29];  ?></td>
        <td><?php echo $mostrar[30];  ?></td>
        <td><?php echo $mostrar[31]; ?></td>
        <td><?php echo $mostrar[32]; ?></td>
        <td><?php echo $mostrar[33]; ?></td>
        <td><?php echo $mostrar[34]; ?></td>
        <td><?php echo $mostrar[35]; ?></td>
        <td><?php echo $mostrar[36]; ?></td>
        <td><?php echo $mostrar[37]; ?></td>
        <td><?php echo $mostrar[38]; ?></td>
   
     
       
     
</tr>
<?php } ?>
</tbody>
</table>