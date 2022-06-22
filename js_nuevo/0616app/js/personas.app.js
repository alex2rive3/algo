function cargarPersonas(){ // carga datos de prueba al array Persona
	console.log("cargando datos Personas...");
	url=rutaJSON+"personas/json.php";
	$.getJSON(url, function(data, status){
		localStorage.setItem('personas',JSON.stringify(data));
	});
	personas=JSON.parse(localStorage.getItem('personas'));
	if (personas==null){
		personas=[];
	}
}

function getPersonasById(pid){
    for (var i = 0; i < personas.length; i++) {
        if (personas[i].id==pid){
            return i;
        }
    }
    return -1;
}

function borrarPersona(e){
	let idxe=e.target.attributes["data-id"].value;
	url=rutaJSON+"personas/api.php?mod=delete&id="+idxe;
	console.log(url);
	$.get(url);
	mostrarPersonas();
}

function guardarPersona(){
    let p={ 
		"id":document.getElementById('idx').value,
		"cin":document.getElementById('cin').value,
		"apellido":document.getElementById('apellido').value,
		"nombre": document.getElementById('nombre').value,
		"fenac":document.getElementById('fenac').value 
	}
    url=rutaJSON+"personas/api.php";
    $.post(url,p,
		function(data, status) {
			alert("Data: "+data + "\nStatus: "+status);
		});
    limpiarFormPersona();
    iniciarApp();
	showListPersonas();
}
