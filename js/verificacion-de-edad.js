
function verificarE (){
	/*Se accede al formulario*/
	var formulario = document.Registro;
	var Sfecha = formulario.elements[6].value;
	var fecha = Sfecha.split("-");
	var edad = formulario.elements[1].value;
	edad = parseInt(edad);
	/*Cierre de acceso*/
	/*Se hace el cambio de Css mediante comprobar(fecha,edad)*/
	var estado = comprobar(fecha,edad);
	
	if(estado != 0){/*La funcion retorna 0 si no es la misma fecha*/

		alert('No es correcta la edad');
		document.getElementById('p_edad').style.borderColor = "red";
		document.getElementById('p_fnacimiento').style.backgroundColor = "orange";
		return false;
	}
	else{
		
		document.getElementById('p_edad').className = "green";
		document.getElementById('p_fnacimiento').className = "green";
		return true;
	}
	/*Se termina el proceso*/
}
function comprobar (fecha,edad){
	/*Se obtiene el año,mes y dia del date*/
	var ano = parseInt(fecha[0]);
	var mes = parseInt(fecha[1]);
	var dia = parseInt(fecha[2]);
	/* Se termina de obtener*/
	/* 	Se recupera la fecha del dispositivo*/
	var h = new Date();
	var hdia=h.getDate();
	var hmes=h.getMonth()+1;
	var hano = h.getFullYear();
	/*Se deja de recuperar*/
	/*Se hace elcalculo de la edad base 1900*/
	var cedad = (hano + 1900) - ano;
	//Te lo puse con tabulacion para que sea mas facil depurar
        if ( hmes < mes )
        {
            cedad--;
        }
        if ((mes == hmes) && (hdia < dia))
        {
            cedad--;
        }
        if (cedad > 1900)
        {
            cedad -= 1900;
        }
        /*Se termina el calculo*/
    /*Se verifica si es igual*/
    if(edad == cedad){
    	return 1;
    }
    else{
    	return 0;
    }
   	/*Fin de verificacion*/
}