function validar() {
    var placa, color, marca, tipodv, conductor, propietario;
    placa=document.getElementById("placa").value;
    color=document.getElementById("color").value;
    marca=document.getElementById("marca").value;
    tipodv=document.getElementById("tipodv").value;
    conductor=document.getElementById("conductor").value;
    propietario=document.getElementById("propietario").value;

    if(placa === "" || color === "" || marca ==="" || tipodv ==="" || conductor ==="" || propietario === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (placa.length>7){
        alert("La placa de ser EJ: AAA-333");
        return false;
    }
    else if (color.length>16){
        alert("El Color es muy largo !!!");
        return false;
    }
    else if (marca.length>40){
        alert("El nombre de la Marca es muy largo !!!");
        return false;
    }
    else if (tipodv.length>16){
        alert("Seleccione el tipo de Vehiculo");
        return false;
    }
    else if (isNaN(conductor)){
        alert("El Nombre del conductor es = al de su id");
        return false;
    }
    else if (isNaN(propietario)){
        alert("El Nombre del propietario es = al de su id");
        return false;
    }
}