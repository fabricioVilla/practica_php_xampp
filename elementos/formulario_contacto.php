<?php

$html_modal = '
<div class="componente centrar" >
            <div class="contendor_formulario centrar">
                <h2 id="titulo_modal">contacto</h2>
                <form action="" class="formulario_contacto centrar">
                    <p for="">Nombre</p>
                    <input type="text" class="formulario_contacto_input" id="nombre">
                    <p for="">Correo</p> 
                    <input type="email" class="formulario_contacto_input" id="correo">
                    <p for="">Telefono</p>
                    <input type="text" class="formulario_contacto_input" id="telefono">
                    <p for="">Rol</p>
                    <input type="text" class="formulario_contacto_input" id="rol">
                    <p for="" id="label_fecha_u">Fecha de unión</p>
                    <input type="date" class="formulario_contacto_input" id="fecha_union">
                    <p for="">Salario</p>
                    <input type="text"  class="formulario_contacto_input" id="salario">
                    <div class="opociones centrar">
                        <input  type="submit" value="Guardar" id="guardar_buton" onclick="guardarContacto();" >
                        <input  type="submit" value="Guardar"  id="editar_buton" onclick="guardarContactoEditado();">
                        <input  type="submit" value="cancelar" onclick="ocultarModal();">     
                    </div>
                     <input type="text"  style="display:none;" id="id_fila_usuario">
                </form>

            </div>

    </div>

'
?>

<script>

function contruirBody(tipo){
    var nombre = document.getElementById('nombre').value;
    var correo = document.getElementById('correo').value;
    var telefono = document.getElementById('telefono').value;
    var rol = document.getElementById('rol').value;
    var fechaUnion = tipo==1? new Date(): new Date(document.getElementById('fecha_union').value);
    var salario = document.getElementById('salario').value;

    var body = {
        "nombre": nombre,
        "correo": correo,
        "telefono":telefono,
        "rol": rol,
        "fechaUnion": fechaUnion,
        "salario": salario
    };

    if(tipo==2){
        body['id']= parseInt(document.getElementById('id_fila_usuario').value) ;
        console.log("body: ", body);
    }

    return body;
}

function guardarContacto(){
    event.preventDefault();
    try {
        fetch('../funciones/crear_contacto.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(contruirBody(1))
            })
            .then(response => response.json())
            .then(result => {
                console.log('Response from PHP:', result);
                if(result.status=="ok"){
                    ocultarModal();
                    window.location.reload(); 
                }
            })
    } catch (error) {
        console.log("error: ", error);
        
    }
    
}



function guardarContactoEditado(){
    event.preventDefault();
    try {
        fetch('../funciones/actualizar_contacto.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(contruirBody(2))
            })
            .then(response => response.json())
            .then(result => {
                console.log('Response from PHP:', result);
                if(result.status=="ok"){
                    ocultarModal();
                    window.location.reload(); 
                }
            })
    } catch (error) {
        console.log("error: ", error);
        
    }
    
}

function ocultarModal(){
        console.log("ocultarModal: ");
        document.getElementById('modal').className='ocultar'
}

</script>



