function valida(){
	var alerta = document.getElementById("error");
	var formulario = document.forms[0];
	var elemento;
	for(var i=1; i<formulario.elements.length-1; i++){
		elemento = formulario.elements[i];
		if(elemento.value==""){
			elemento.focus();
			alerta.innerHTML = "Debes rellenar todos los campos"
			return false;
		}
	}
	cargar();
}

function cargar(){
	var formulario = document.forms[0];
	var datosForm = new Array;
	for(var i=0; i<formulario.elements.length-1; i++){
		datosForm.push(formulario.elements[i].value);
	}
	var url="../php/enviar.php"
	var parametros = {
		"datos" : datosForm
	};
	$.ajax({   
		type: "POST",
		url:url,
		data:  parametros,
		success: function(datos){       
			$('#error').html(datos);
		}
	});
}