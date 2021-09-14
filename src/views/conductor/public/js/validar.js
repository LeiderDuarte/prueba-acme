function validar() {
    var cedula, pnombre, snombre, apellidos, direccion, telefono, ciudad;
    cedula=document.getElementById("cedula").value;
    pnombre=document.getElementById("pnombre").value;
    snombre=document.getElementById("snombre").value;
    apellidos=document.getElementById("apellidos").value;
    direccion=document.getElementById("direccion").value;
    telefono=document.getElementById("telefono").value;
    ciudad=document.getElementById("ciudad").value;

    if(cedula === "" || pnombre === "" || snombre ==="" || apellidos ==="" || direccion ==="" || telefono === "" || ciudad === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if(cedula.length>11){
        alert("El numero es muy largo");
        return false;
    }
    else if(isNaN(cedula)){
        alert("La cedula tiene que ser un numero!");
        return false;
    }
    else if(pnombre.length>15){
        alert("El nombre es muy largo");
        return false;
    }
    else if(snombre.length>15){
        alert("El segundo nombre es muy largo");
        return false;
    }
    else if(apellidos.length>20){
        alert("El Apellido es muy largo");
        return false;
    }
    else if(direccion.length>20){
        alert("La direccion es muy larga");
        return false;
    }
    else if(telefono.length>11){
        alert("El numero es muy largo");
        return false;
    }
    else if(isNaN(telefono)){
        alert("La telefono tiene que ser un numero!");
        return false;
    }
    else if(ciudad.length>10){
        alert("La ciudad es muy larga");
        return false;
    }
}