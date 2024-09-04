<?php

$html_modal = '
<div class="componente centrar" >
            <div class="contendor_formulario centrar">
                <h2 id="titulo_modal">contacto</h2>
                <form action="" class="formulario_contacto centrar">
                    <p for="">Nombre</p>
                    <input type="text" class="formulario_contacto_input" id="nombre">
                    <p for="">Correo</p> 
                    <input type="text" class="formulario_contacto_input" id="correo">
                    <p for="">Telefono</p>
                    <input type="text" class="formulario_contacto_input" id="telefono">
                    <p for="">Rol</p>
                    <input type="text" class="formulario_contacto_input" id="rol">
                    <p for="">Fecha de union</p>
                    <input type="text" class="formulario_contacto_input" id="fechaUnion">
                    <p for="">Salario</p>
                    <input type="text"  class="formulario_contacto_input" id="salario">
                    <div class="opociones centrar">
                        <input  type="submit" value="Guardar" onclick="guardarContacto();">
                        <input  type="submit" value="cancelar" onclick="ocultarModal();">     
                    </div>
                    
                </form>

            </div>

    </div>

'
?>

<script>

function guardarContacto(){
    event.preventDefault();
    console.log("deeeeeeee pelos");
}

function ocultarModal(){
        event.preventDefault();
        console.log("ocultarModal: ");
        document.getElementById('modal').className='ocultar'
}

</script>



