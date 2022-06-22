document.getElementById("cancelFormCiudad").onclick=showListCiudades; 

document.getElementById("sendFormCiudad").onclick=saveCiudades;

window.onload=iniciarApp;


function mostrarCiudades(){
    console.log("listando ciudades");
    if (ciudades!=null){
        salida='<h3>Ciudades <span><a  class="btn btn-success btn-editcid" class="" data-id="-1" >Nuevo</a></span></h3>';
    for (var i = 0; i < ciudades.length; i++) {
            // console.log("girando");
            salida=salida+"<div class='card'><div class='card-header'>"+ciudades[i].id+"</div><div class='card-body'><div class='row'><div class='col'><p class='card-text'><label>Ciudad:</label>"+ciudades[i].ciudad+"</p></div><div class='col'><a data-id='"+ciudades[i].id+"' class='btn btn-warning btn-editcid'>Editar</a><a data-id='"+ciudades[i].id+"' class='btn btn-danger btn-delcid'>Borrar</a></div></div></div></div>";
    }
    document.getElementById('datosCiudades').innerHTML=salida;
    btns=document.getElementsByClassName('btn-editcid');
    for (var i = 0; i < btns.length; i++) {
        btns[i].onclick=editarCiudades;
    }
    bbtn=document.getElementsByClassName('btn-delcid');
    for (var i = 0; i < bbtn.length; i++) {
        bbtn[i].onclick=deleteCiudades;
    }
    showListCiudades();
    }
}

function nuevaCiudad() {
    limpiarFormCiudad();
    document.getElementById("ciudad").focus();
}

function limpiarFormCiudad(){
    document.getElementById('idx').value="-1";
    document.getElementById('ciudad').value="";
}

function editarCiudades(e)
{
	console.log("editar ciudades");
	let idxe=e.target.attributes["data-id"].value;
	idx=getCiudadById(idxe);
    console.log(idx);

    if (idx>=0){
        document.getElementById('idx').value=ciudades[idx].id;
        document.getElementById('ciudad').value=ciudades[idx].ciudad;
	}

    else{
		document.getElementById('idx').value=-1;
		document.getElementById('ciudad').value="";
    }

    showFormCiudades();
	document.getElementById('ciudad').focus();
}
