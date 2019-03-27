
function validate(){
     var p_nombre = document.getElementById("p_nombre").value;
     var p_edad = document.getElementById("p_edad").value;
     var p_sexo = document.getElementById("p_sexo").value;
     var p_nacionalidad = document.getElementById("p_nacionalidad").value;
     var p_curp = document.getElementById("p_curp").value;
     var p_fnacimiento = document.getElementById("p_fnacimiento").value;
     var p_lnacimiento = document.getElementById("p_lnacimiento").value;
     var p_ecivil = document.getElementById("p_ecivil").value;
     var p_dom  = document.getElementById("p_dom").value;
     var p_col  = document.getElementById("p_col").value;
     var p_cp  = document.getElementById("p_cp").value;
     var p_estado  = document.getElementById("p_estado").value;
     var p_municipio  = document.getElementById("p_municipio").value;
     var  p_localidad = document.getElementById("p_localidad").value;
     var p_telefono  = document.getElementById("p_telefono").value;
     var p_celular  = document.getElementById("p_celular").value;
     var p_email  = document.getElementById("p_email").value;
     var p_labora  = document.getElementById("p_labora").value;
     var p_transporte  = document.getElementById("p_transporte").value;
     var p_turno  = document.getElementById("p_turno").value;
     var f_padre1  = document.getElementById("f_padre1").value;
     var f_ocupacion1  = document.getElementById("f_ocupacion1").value;
     var f_ltrabajo1  = document.getElementById("f_ltrabajo1").value;
     var  f_teltrabajo1 = document.getElementById("f_teltrabajo1").value;
     var ep_secundaria  = document.getElementById("ep_secundaria").value;
     var ep_localidad  = document.getElementById("ep_localidad").value;
     var ep_municipio  = document.getElementById("ep_municipio").value;
     var ep_promedio  = document.getElementById("ep_promedio").value;
     var ep_anoegreso  = document.getElementById("ep_anoegreso").value;
     
     
     var carrera1 = document.getElementById("p_carrera1").value;
     
     var carrera2 = document.getElementById("p_carrera2").value;
     
     var carrera3 = document.getElementById("p_carrera3").value;
     
     
     if(p_nombre==""){
         alert("Porfavor ingrese su Nombre");
         return false;
     }
     if(p_edad==""){
         alert("Porfavor ingrese su Edad");
         return false;
     }
     if(p_sexo==""){
         alert("Porfavor ingrese su Sexo");
         return false;
     }
     if(p_nacionalidad==""){
         alert("Porfavor ingrese su Nacionalidad");
         return false;
     }
     if(p_curp==""){
         alert("Porfavor ingrese su CURP");
         return false;
     }
     if(p_fnacimiento==""){
         alert("Porfavor ingrese su Fecha de Nacimiento");
         return false;
     }
     if(p_lnacimiento==""){
         alert("Porfavor ingrese su Lugar de Nacimiento");
         return false;
     }
     if(p_ecivil==""){
         alert("Porfavor ingrese su Estado civil");
         return false;
     }
     if(p_dom==""){
         alert("Porfavor ingrese su Domicilio");
         return false;
     }
     if(p_col==""){
         alert("Porfavor ingrese su Colonia");
         return false;
     }
     if(p_cp==""){
         alert("Porfavor ingrese su Código Postal");
         return false;
     }
     if(p_estado==""){
         alert("Porfavor ingrese su Estado");
         return false;
     }
     if(p_municipio==""){
         alert("Porfavor ingrese su Municipio");
         return false;
     }
     if(p_localidad==""){
         alert("Porfavor ingrese su Localidad");
         return false;
     }
     if(p_telefono==""){
         alert("Porfavor ingrese su Telefono");
         return false;
     }
     if(p_celular==""){
         alert("Porfavor ingrese su Celular");
         return false;
     }
     if(p_email==""){
         alert("Porfavor ingrese su e-mail");
         return false;
     }
     if(p_labora==""){
         alert("Porfavor ingrese su Actividad laboral");
         return false;
     }
     if(p_transporte==""){
         alert("Porfavor ingrese su Medio de transporte");
         return false;
     }
     if(p_turno==""){
         alert("Porfavor ingrese su turno");
         return false;
     }
     if(f_padre1==""){
         alert("Porfavor ingrese el nombre del padre");
         return false;
     }
     if(f_ocupacion1==""){
         alert("Porfavor ingrese la ocupación");
         return false;
     }
     if(f_ltrabajo1==""){
         alert("Porfavor ingrese el lugar de trabajo");
         return false;
     }
     if(f_teltrabajo1==""){
         alert("Porfavor ingrese el teléfono de trabajo");
         return false;
     }
     if(ep_secundaria==""){
         alert("Porfavor ingrese su secundaria");
         return false;
     }
     if(ep_localidad==""){
         alert("Porfavor ingrese la localidad de la secundaria");
         return false;
     }
     if(ep_municipio==""){
         alert("Porfavor ingrese el municipio de la secundaria");
         return false;
     }
     if(ep_promedio==""){
         alert("Porfavor ingrese su promedio");
         return false;
     }
     if(ep_anoegreso==""){
         alert("Porfavor ingrese su año de egreso");
         return false;
     }
     
     
     
     if(carrera2 == carrera1){
         alert("Tiene que seleccionar una carrera diferente.");
         return false;
     }
     
     if(carrera3 ==carrera2){
         alert("Tiene que seleccionar una carrera diferente.");
         return false;
     }
	
}

        
    