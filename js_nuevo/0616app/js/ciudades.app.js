function getCiudades(){
    console.log("cargando datos Ciudades...");
    url=rutaJSON+"ciudades/json.php";
    $.getJSON(url, function(data, status){
        localStorage.setItem('ciudades',JSON.stringify(data));
    });
    ciudades=JSON.parse(localStorage.getItem('ciudades'));
    if (ciudades==null){
        ciudades=[];
    }
}

function getCiudadById(cid){
    for (var i = 0; i < ciudades.length; i++) {
        if (ciudades[i].id==cid){
            return i;
        }
    }
    return -1;
}


function saveCiudades(){
    let p={
        "id":document.getElementById('idx').value,
        "ciudad": document.getElementById('ciudad').value
        }
    console.log("save ciudades");
    url=rutaJSON+"ciudades/api.php";
    console.log(url);
    //a ajax se le esta pasando la url de la api que hara una accion con los datos que va a necesitar
    $.post(url,p);
    limpiarFormCiudad();
    iniciarApp();
    showListCiudades();
}

function editCiudades(){
    let idxe = getCiudadById(e.target.attributes["data-id".value]);
    if (idxe >= 0) {
        document.getElementById('idx').value = ciudades[idxe].id
        document.getElementById('ciudad').value = ciudades[idxe].ciudad
    } else {
        document.getElementById('idx').value = "-1"
        document.getElementById('ciudad').value = ""
    }
}


function deleteCiudades(e){
    let idxe=e.target.attributes["data-id"].value;
    url=rutaJSON+"ciudades/api.php?mod=delete&id="+idxe;
    console.log(url);
    $.get(url);
    iniciarApp();
    showListCiudades();
}


//window.onload=iniciarCiudades;
