
var inputs_login={
    "login_telefono":null,
    "login_contrasenia":null,
    "login_sesion_recordar":null
}

var condicionales_formulario={
    "login_telefono_mensaje":false,
    "login_contrasenia_mensaje":false
}

function iniciar(){
    event.preventDefault();
    console.log('______________iniciar: ')
    inputs_login=recuperaValues(inputs_login);
    console.log('__________________inputs_login: ', inputs_login)
}

function validaUsuairo(value){
    const regExpStr = "^([a-z0-9]{5,})$"
    validaInputGenerico(
        regExpStr,
        value,
        "login_telefono_mensaje",
        "BIENTOS MACFLY!",
        "estas MAL pelana")
}

function validaContrsenia(value){
    const regExpStr = "^([a-z0-9]{5,})$"
    validaInputGenerico(
        regExpStr,
        value,
        "login_contrasenia_mensaje",
        "BIENTOS MACFLY!",
        "estas MAL pelana")
}

function validaInputGenerico(regExpStr,value,key,message,mensajeError){
    var campo_valido= new RegExp(regExpStr, 'g').test(value);
    console.log('campo_valido: ', campo_valido)
    setTextoElemtoHtml(key,campo_valido?message:mensajeError); 
    condicionales_formulario[key]=campo_valido;
    habilitaBotonAceptar();
}


function habilitaBotonAceptar(){
    var valido=false;
    for (const key in condicionales_formulario) {
       if(!condicionales_formulario[key]){
            valido=true;
            break;
       }
    }
    document.getElementById("login_boton_aceptar").disabled=valido;
}