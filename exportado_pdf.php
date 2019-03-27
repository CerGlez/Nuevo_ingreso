<?php

session_start();

if(empty($_SESSION['usuario'])) {
    header("Location: index.php?error=2");
}else{

session_destroy(); 
    
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

//Libreria de conexion
include("conexion.php");

//Conexion a Base de Datos

$con = new mysqli($host,$user,$pw,$db);
    
if(isset($_GET['folio'])){
    
    $folio = $_GET['folio'];
    
}

//Verificacion de Usuario
$sql = "SELECT * FROM ficha WHERE folio = '$folio'";
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
    <div id="leyenda"><div id="logo" style="width: 35%; float: right;"><img src="imagenes/logo_sep.png" height="100px" width="100%" alt="Imagen no encontrada."><br></div><div id="text"><b>SUBSECRETARÍA DE EDUCACIÓN MEDIA SUPERIOR</b><br>
    <P style="font-size:12px;">
Unidad de Educación Media Superior Tecnológica Industrial y de Servicios<br>
Centro de Bachillerato Tecnológico, Industrial y de Servicios No. 19<br>
        “Miguel Hidalgo y Costilla”</p></div>
        </div>
        <h6 style=" margin-top:-10; font-size:15px;" >FICHA DE PREINCRIPCIÓN 2019.</h6>
        <p style="width: 30%; margin-top:-20; float: right; font-size: 14px;"><strong>NO. DE FOLIO. '.$row['folio'].'</strong></p>
   <h4 style=" margin-top:30; size:14px;  float:left;">Datos personales.</h4>
    <p style="width: 100%; font-size:12px; float: left; margin-top:-5;"><strong>Nombre:</strong> '.$row['p_nombre'].'</p>
   
    <div >
    
    <p style="width: 30%; font-size:12px; float: left;  margin-top:-8;"><strong>Edad:</strong> '.$row['p_edad'].'</p>
    
    <p style="width: 50%; font-size:12px; float: center; margin-top:-3;"><strong>Sexo:</strong> '.$row['p_sexo'].'</p>
    
    <p style="width: 25%; font-size:12px; float: right; margin-top:-30;"><strong>Nacionalidad:</strong> '.$row['p_nacionalidad'].'</p>
    </div>




    <div >
    <p style="width: 30%; font-size:12px; float: left;  margin-top:-8;"><strong>CURP:</strong> '.$row['p_curp'].'</p>
    
    <p style="width: 50%; font-size:12px; float: center; margin-top:-3;"><strong>Fecha de nacimiento:</strong> '.$row['p_fnacimiento'].'</p>
    
    <p style="width: 25%; font-size:12px; float: right; margin-top:-33;"><strong>Lugar de nacimiento:</strong> '.$row['p_lnacimiento'].'</p>
    </div>



<div >
    <p style="width: 30%; font-size:12px; float: left;  margin-top:-8;"><strong>Estado civil:</strong> '.$row['p_ecivil'].'</p>
    
    <p style="width: 50%; font-size:12px; float: center; margin-top:-3;"><strong>Domicilio:</strong> '.$row['p_dom'].'</p>
    
    <p style="width: 25%; font-size:12px; float: right; margin-top:-33;"><strong>Colonia:</strong> '.$row['p_col'].'</p>
</div>
    

<div >
    <p style="width: 30%; font-size:12px; float: left;  margin-top:-8;"><strong>C.P:</strong> '.$row['p_cp'].'</p>
    
    <p style="width: 50%; font-size:12px; float: center; margin-top:-3;"><strong>Estado:</strong> '.$row['p_estado'].'</p>
    
    <p style="width: 25%; font-size:12px; float: right; margin-top:-33;"><strong>Municipio:</strong> '.$row['p_municipio'].'</p>

</div>


<div >
    <p style="width: 30%; font-size:12px; float: left;  margin-top:-8;"><strong>Localidad:</strong> '.$row['p_localidad'].'</p>
    
    <p style="width: 50%;  font-size:12px; float: center; margin-top:-3;"><strong>Teléfono:</strong> '.$row['p_telefono'].'</p>
    
    <p style="width: 25%;  font-size:12px;  float: right; margin-top:-33;"><strong>Tel. Celular:</strong> '.$row['p_celular'].'</p>

</div>


<div >
    
    <p style="width: 40%; float: left; font-size:12px; margin-top:-8;"><strong>E-mail:</strong> '.$row['p_email'].'</p>
    
    <p style="width: 10%;  font-size:12px; float: center; margin-top:-3;"><strong>Trabaja:</strong> '.$row['p_labora'].'</p>
    
    
    <p style="width: 35%;  font-size:12px; float: right; margin-top:-33;"><strong>Transporte que utilizas para trasladarte a la escuela:</strong> '.$row['p_transporte'].'</p>

</div>


    <h4 style="font-size:14px; margin-top:20; float:left;">Carrera que deseas cursar:</h4>
<div >
    <p style="width: 30%; float: left; font-size:12px; margin-top:-10;"><strong>Primera opción:</strong> '.$row['p_carrera1'].'</p>
    
    <p style="width: 30%;  font-size:12px;  float: center; margin-top:-3;"><strong>Segunda opción:</strong> '.$row['p_carrera2'].'</p>
    
    <p style="width: 30%;  float: right; margin-top:-33; font-size:12px;"><strong>Tercera opción:</strong> '.$row['p_carrera3'].'</p>
</div>
    <p style="width: 100%; float: left; margin-top:0; font-size:12px;"><strong>Turno de preferencia:</strong> '.$turno.'</p>
    
    <h4 style="font-size:14px; margin-top:20; margin-bottom:5; float:left;">Datos familiares.</h4><br>
    <table style=" margin-top:-20; ">

    <tr >
    <td class="titulo" style="font-size:13px;  "><strong>Nombre de los padres:</strong></td>
    <td class="titulo" style="font-size:13px;  "><strong>Ocupación:</strong></td>
    <td class="titulo" style="font-size:13px;  "><strong>Lugar de trabajo:</strong></td>
    <td class="titulo" style="font-size:13px;  "><strong>Teléfono de trabajo:</strong></td>
    </tr>
    <tr>
    <td class="f_datos" style="font-size:12px;  ">* '.$row['f_padre1'].'</td>
    <td class="f_datos" style="font-size:12px;  ">* '.$row['f_ocupacion1'].'</td>
    <td class="f_datos" style="font-size:12px;  ">* '.$row['f_ltrabajo1'].'</td>
    <td class="f_datos" style="font-size:12px;  ">* '.$row['f_teltrabajo1'].'</td>
    </tr>
    <tr>
        <td class="f_datos" style="font-size:12px;  ">* '.$row['f_padre2'].'</td>
        <td class="f_datos" style="font-size:12px;  ">* '.$row['f_ocupacion2'].'</td>
        <td class="f_datos" style="font-size:12px;  ">* '.$row['f_ltrabajo2'].'</td>
        <td class="f_datos" style="font-size:12px;  ">* '.$row['f_telefono2'].'</td>
    </tr>
    </table>
    <h4 style="font-size:14px; margin-top:20; margin-bottom:5; float:left;">Datos de procedencia del aspirante.</h4>

<div >
    
      <p style="width: 40%; float: left; margin-top:5; font-size:12px;"><strong>Secundaria:</strong> '.$row['ep_secundaria'].'</p>
    <p style="width: 25%; float: center; margin-top:-3; font-size:12px;"><strong>Localidad:</strong> '.$row['ep_localidad'].'</p>
    <p style="width: 35%; float: right; margin-top:-37; font-size:12px;"><strong>Población:</strong> '.$row['ep_municipio'].'</p>

</div>
  <div>
    <p style="width: 35%; float: left;  margin-top:-10; font-size:12px;"><strong>Promedio general:</strong> '.$row['ep_promedio'].'</p>
    <p style="width: 35%; float: center; margin-top:-8; font-size:12px;"><strong>Año de egreso:</strong> '.$row['ep_anoegreso'].'</p>
   
</div>
  
    <p id="inport" style="float: left; font-size:15px; margin-top:20; "><strong>-ANEXAR A LA SOLICITUD DOS COPIA DE LA CURP, ACTA DE NACIMIENTO Y COMPROBANTE DE DOMICILIO (TELÉFONO).-</strong></p>
       <p id="inport" style="float: left; font-size:15px; margin-top:20; color:red;"><strong>-TRAER FICHAR EL DIA DEL EXAMEN-</strong></p>
   <br>
   <br>
      <br>

  
   <br>
   <hr style="width:35%;  text-align: left; margin-bottom:-12;   "/>
     <hr style="width:40%;  text-align: right; margin-top:10; margin-bottom:-10;"    />
<div>

            <p class="a_firma" style="  width: 35%;float: left; font-size:15px;"><strong>Nombre o Firma del Aspirante.</strong></p>
          
            <p class="p_firma" style="  width: 40%; float: right; margin-top:-2; font-size:15px;" ><strong>Nombre y Firma del Padre o Tutor.</strong></p>
  </div>
    <br><br>
    <p style="text-align: center; margin-top:-10;">Sello de validación</p>
    </div>
    </body>
</html>';

$mpdf->WriteHTML($texto_pdf);
$mpdf->Output('FICHA-DE-PREINCRIPCIÓN-2018-'.$p_curp.'.pdf', 'I');
}
?>