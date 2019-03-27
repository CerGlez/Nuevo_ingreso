<?php 

	$conexion=mysqli_connect('localhost','root','','registro');

 ?>


<!DOCTYPE html>
<html>
<head>
	
<style type="text/css">
.botonExcel{cursor:pointer;}
</style>
	<title>mostrar datos</title>
</head>
<body>

<br>
	<table width="50%" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;" >
		<tr>
	
            <td>folio</td>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Sexo</td>
            <td>Nacionalidad</td>
            <td>CURP</td>
            <td>Fecha de nacimiento</td>
            <td>Lugar de nacimiento</td>
            <td>Estado civil</td>
            <td>Domicidio</td>
            <td>Colonia </td>
            <td>C.P.</td>
            <td>Estado</td>
            <td>Municipio</td>
            <td>Localidad </td>
            <td>Telefono</td>
            <td>Celular</td>
            <td>E-mail</td> 
            <td>Atividad Laboral</td>
            <td>Transporte</td>
            <td>Primera carrera</td> 
            <td>Segunda carrera</td>
            <td>Tercera carrera</td>
            <td>Turno</td>
            <td>Primer tutor</td>
            <td>Ocupacion uno</td>
            <td>Lugar trabajo uno</td> 
            <td>Telefono trabajo uno</td> 
            <td>Segundo tutor</td>
            <td>Ocupacion dos</td>
            <td>Lugar trabajo dos</td>
            <td>Telefono trabajo dos</td>
            <td>Secundaria</td> 
            <td>Localidad</td> 
            <td>Municipio</td> 
            <td>Promedio</td>
            <td>Ano de egreso</td>
		</tr>

		<?php 
		$sql="SELECT * from ficha";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
		
            <td><?php echo $mostrar['folio'] ?></td>
            <td><?php echo $mostrar['p_nombre'] ?></td>
            <td><?php echo $mostrar['p_edad'] ?></td>
            <td><?php echo $mostrar['p_sexo'] ?></td>
            <td><?php echo $mostrar['p_nacionalidad'] ?></td>
            <td><?php echo $mostrar['p_curp'] ?></td>
            <td><?php echo $mostrar['p_fnacimiento'] ?></td>
            <td><?php echo $mostrar['p_lnacimiento'] ?></td>
            <td><?php echo $mostrar['p_ecivil'] ?></td>
            <td><?php echo $mostrar['p_dom'] ?></td>
            <td><?php echo $mostrar['p_col'] ?></td>
            <td><?php echo $mostrar['p_cp'] ?></td>
            <td><?php echo $mostrar['p_estado'] ?></td>
            <td><?php echo $mostrar['p_municipio'] ?></td>
            <td><?php echo $mostrar['p_localidad'] ?></td> 
            <td><?php echo $mostrar['p_telefono'] ?></td>
            <td><?php echo $mostrar['p_celular'] ?></td>
            <td><?php echo $mostrar['p_email'] ?></td> 
            <td><?php echo $mostrar['p_labora'] ?></td> 
            <td><?php echo $mostrar['p_transporte'] ?></td>
            <td><?php echo $mostrar['p_carrera1'] ?></td> 
            <td><?php echo $mostrar['p_carrera2'] ?></td>
            <td><?php echo $mostrar['p_carrera3'] ?></td>
            <td><?php echo $mostrar['p_turno'] ?></td>
            <td><?php echo $mostrar['f_padre1'] ?></td> 
            <td><?php echo $mostrar['f_ocupacion1'] ?></td> 
            <td><?php echo $mostrar['f_ltrabajo1'] ?></td> 
            <td><?php echo $mostrar['f_teltrabajo1'] ?></td> 
            <td><?php echo $mostrar['f_padre2'] ?></td>
            <td><?php echo $mostrar['f_ocupacion2'] ?></td>
            <td><?php echo $mostrar['f_ltrabajo2'] ?></td> 
            <td><?php echo $mostrar['f_telefono2'] ?></td>
            <td><?php echo $mostrar['ep_secundaria'] ?></td> 
            <td><?php echo $mostrar['ep_localidad'] ?></td> 
            <td><?php echo $mostrar['ep_municipio'] ?></td> 
            <td><?php echo $mostrar['ep_promedio'] ?></td>
            <td><?php echo $mostrar['ep_anoegreso'] ?></td>
            
			
		</tr>
	<?php 
	}
	 ?>
	</table>
<form action="descarga.php">
    <input type="submit" value="Descargar" />
</form>
</body>
</html>