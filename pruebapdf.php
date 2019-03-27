<?php


require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

//Libreria de conexion
include("conexion.php");

//Conexion a Base de Datos
$con = new mysqli($host,$user,$pw,$db);

$curp = $_GET['curp'];

//Verificacion de Usuario
$sql = "SELECT * FROM ficha WHERE p_curp = '$curp'";
$result = $con->query($sql);

$row = $result -> fetch_array(MYSQLI_ASSOC);

//Se obtiene el turno del alumno

$turno = $row['p_turno'];
	
if($turno == 'M'){
		
	$turno = 'MATUTINO';
		
}else{
		
	$turno = 'VESPERTINO';
		
}

$texto_pdf = 
	'<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FICHA DE PREINCRIPCIÓN 2018</title>
    <link type="text/css" href="estilo_ficha.css" rel="stylesheet">
</head>
<body>
    <div id="cont">
    <div id="leyenda"><div id="logo" style="width: 35%;"><img src="logo_sep.jpg" height="auto" width="100%" alt="Imagen no encontrada."></div><div id="text"><b>SUBSECRETARÍA DE EDUCACIÓN MEDIA SUPERIOR</b><br>
Unidad de Educación Media Superior Tecnológica Industrial y de Servicios<br>
Centro de Bachillerato Tecnológico, Industrial y de Servicios No. 19<br>
        “Miguel Hidalgo y Costilla”</div>
        </div>
		<h1>FICHA DE PREINCRIPCIÓN 2018.</h1>
        <p style="width: 30%; float: right;font-size: 14px;">NO. DE FOLIO. '.$row['folio'].'</p>
   <h3>Datos personales.</h3>
    <p style="width: 100%; float: left;">Nombre: '.$row['p_nombre'].'</p>
	
    <p style="width: 25%; float: left;">Edad: '.$row['p_edad'].'</p>
	
    <p style="width: 25%; float: left;">Sexo: '.$row['p_sexo'].'</p>
	
    <p style="width: 50%; float: left;">Nacionalidad: '.$row['p_nacionalidad'].'</p>
	
    <p style="width: 50%; float: left;">CURP: '.$row['p_curp'].'</p>
	
    <p style="width: 50%; float: left;">Fecha de nacimiento: '.$row['p_fnacimiento'].'</p>
	
    <p style="width: 75%; float: left;">Lugar de nacimiento: '.$row['p_lnacimiento'].'</p>
	
    <p style="width: 25%; float: left;">Estado civil: '.$row['p_ecivil'].'</p>
	
    <p style="width: 50%; float: left;">Domicilio: '.$row['p_dom'].'</p>
	
    <p style="width: 50%; float: left;">Colonia: '.$row['p_col'].'</p>
	
    <p style="width: 25%; float: left;">C.P: '.$row['p_cp'].'</p>
	
    <p style="width: 33.333333%; float: left;">Estado: '.$row['p_estado'].'</p>
	
    <p style="width: 33.333333%; float: left;">Municipio: '.$row['p_municipio'].'</p>
	
    <p style="width: 33.333333%; float: left;">Localidad: '.$row['p_localidad'].'</p>
	
    <p style="width: 25%; float: left;">Teléfono: '.$row['p_telefono'].'</p>
	
    <p style="width: 25%; float: left;">Tel. Celular: '.$row['p_celular'].'</p>
	
    <p style="width: 50%; float: left;">E-mail: '.$row['p_email'].'</p>
	
    <p style="width: 25%; float: left;">Trabaja: '.$row['p_labora'].'</p>
	
    <p style="width: 75%; float: left;">Actividad laboral: </p>
	
    <p style="width: 100%; float: left; margin-bottom: 12px;">Transporte que utilizas para trasladarte a la escuela: '.$row['p_transporte'].'</p>
	
    <h4>Carrera que deseas cursar:</h4>
	
    <p style="width: 100%; float: left;">Primera opción: '.$row['p_carrera1'].'</p>
	
    <p style="width: 100%; float: left;">Segunda opción: '.$row['p_carrera2'].'</p>
	
    <p style="width: 100%; float: left;">Tercera opción: '.$row['p_carrera3'].'</p>

	<p style="width: 100%; float: left;">Turno de preferencia: '.$turno.'</p>
	
    <h3>Datos familiares.</h3><br>
    <table>
    <tr>
    <td class="titulo">Nombre de los padres:</td>
    <td class="titulo">Ocupación:</td>
    <td class="titulo">Lugar de trabajo:</td>
    <td class="titulo">Teléfono de trabajo:</td>
    </tr>
    <tr>
    <td class="f_datos">* '.$row['f_padre1'].'</td>
    <td class="f_datos">* '.$row['f_ocupacion1'].'</td>
    <td class="f_datos">* '.$row['f_ltrabajo1'].'</td>
    <td class="f_datos">* '.$row['f_teltrabajo1'].'</td>
    </tr>
    <tr>
        <td class="f_datos">* '.$row['f_padre2'].'</td>
        <td class="f_datos">* '.$row['f_ocupacion2'].'</td>
        <td class="f_datos">* '.$row['f_ltrabajo2'].'</td>
        <td class="f_datos">* '.$row['f_telefono2'].'</td>
    </tr>
    </table>
    <h3>Datos de procedencia del aspirante.</h3>
    <p style="width: 100%; float: left;">Secundaria: '.$row['ep_secundaria'].'</p>
    <p style="width: 50%; float: left;">Localidad: '.$row['ep_localidad'].'</p>
    <p style="width: 50%; float: left;">Población: '.$row['ep_municipio'].'</p>
    <p style="width: 50%; float: left;">Promedio general: '.$row['ep_promedio'].'</p>
    <p style="width: 50%; float: left;">Año de egreso: '.$row['ep_anoegreso'].'</p>
    <br>
    <p id="inport">ANEXAR A LA SOLICITUD COPIA DE LA CURP, ACTA DE NACIMIENTO Y COMPROBANTE DE DOMICILIO (TELÉFONO).</p>
    <br><br><br><br>
            <p class="a_firma">Nombre o Firma del Aspirante.</p><p class="p_firma">Nombre y Firma del Padre o Tutor.</p>
    <br><br>
    <p style="text-align: center;">Sello de validación</p>
    </div>
    </body>
</html>';

$mpdf->WriteHTML($texto_pdf);
$mpdf->Output('FICHA-DE-PREINCRIPCIÓN-2018-'.$p_curp.'.pdf', 'I');
?>