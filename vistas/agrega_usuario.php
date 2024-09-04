<?php
 include '../elementos/formulario_contacto.php';
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/agrega_usuario.css">

</head>

<script>

function cancelar(){
    event.preventDefault();
    document.getElementById('usuario').value=null;
    document.getElementById('correo').value=null;
    document.getElementById('contrasenia').value=null;
    document.getElementById('contraseniaConf').value=null;
    document.getElementById('generoM').checked=false;
    document.getElementById('generoF').checked=false;
    document.getElementById('recordar').checked=false;

}

function enviarDatos() {
    event.preventDefault();
    const usuario = document.getElementById('usuario').value;
    const correo = document.getElementById('correo').value;
    const contrasenia = document.getElementById('contrasenia').value;
    const contraseniaConf = document.getElementById('contraseniaConf').value;
    var genero =  document.getElementById('generoM').checked? 0 : 1;
    var recordar = document.getElementById('recordar').checked
 

    var body={
        "usuario": usuario,
        "correo": correo,
        "contrasenia":contrasenia,
        "genero": genero
    };

    console.log("body: ", body);

    try {
        fetch('../funciones/crear_usuario.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(body)
            })
            .then(response => response.json())
            .then(result => {
                console.log('Response from PHP:', result);
            })
    } catch (error) {
        console.log("error: ", error);
        
    }

    


}

function seleccionGenero(event){
    console.log("event: ", event);
    if (event==1){
        document.getElementById('generoM').checked =false;
    }else{
        document.getElementById('generoF').checked =false;
    }
}

</script>

<body>
    <div class="body_principal_add_usuario">
        <div class="contendor_formulario_usuario">
            <div class="columna_menu">
                <div class="contendor_boton_avion">
                    <button>
                        <img class="imagen_button" src="../recursos/images/avion.png" alt="">
                    </button>
                </div>
                

                <div class="contendor_boton_redes">
                    <button>
                        <img class="imagen_button_redes" src="../recursos/images/redes 1.png" alt="">
                    </button>
                    <button>
                    <img class="imagen_button_redes" src="../recursos/images/redes 2.png" alt="">
                    </button>
                    <button>
                    <img class="imagen_button_redes" src="../recursos/images/redes 3.png" alt="">
                    </button>
                </div>
                

            </div>
          
            <div class="contenedor_formulario_usuario">
                <div class="formulario_usuario_campos">
                        <form  class="form_usuarios_datos">
                            <div class="datos_personales">
                                <label for="">Usuario</label> <br>
                                
                                <div class="input_icono">
                                    <div class="cuadricula_iconos">
                                        <img style="width: 28px; height: auto;" src="../recursos/images/ICONO 1.png" alt="">
                                    </div>
                                    <input type="text"  id="usuario">
                                </div>
                                
                                <br><br>
                                <label for="">correo electrónico</label><br>
                                <div class="input_icono">
                                    <div class="cuadricula_iconos">
                                        <img style="width: 28px; height: auto;" src="../recursos/images/ICONO 2.png" alt="">
                                    </div>
                                    <input type="text" id="correo">
                                </div>
                                <br><br>
                                <label for="">contraseña</label><br>
                                <div class="input_icono">
                                    <div class="cuadricula_iconos">
                                        <img style="width: 28px; height: auto;" src="../recursos/images/ICONO 3.png" alt="">
                                    </div>
                                    <input type="password" id="contrasenia">
                                </div><br><br>
                                <label for="">confirmar contraseña</label><br>
                                <div class="input_icono">
                                    <div class="cuadricula_iconos">
                                        <img style="width: 28px; height: auto;" src="../recursos/images/ICONO 4.png" alt="">
                                    </div>
                                    <input type="password" id="contraseniaConf">
                                </div><br>
                            </div>

                            <div class="formulario_genero">
                                <label for="">Género</label><br>
                                <label ><input type="checkbox" id="generoM" onchange="seleccionGenero(0)"> masculino </label><br>
                                <label ><input type="checkbox" id="generoF" onchange="seleccionGenero(1)"> femenino </label><br>
                                <label ><input type="checkbox" id="recordar"> recordarme siempre </label>

                            </div>
                                

                                <div class="botones_formulrio">
                                    <input class="boton_aceptar" type="submit" value="Aceptar" onclick="enviarDatos();" >
                                    <input type="submit" value="cancelar" onclick="cancelar();">
                                </div>
                        </form>
                </div>
                <div class="imagenes_precentacion">
                        <img class="imagen_escritorio" src="../recursos/images/main 2 (foto).png" alt="">
                        <img class="imagenlogo" src="../recursos/images/LOGO-AVION-ROJO-iSTRATEGY.png" alt="">
                </div>
            </div>

        </div>


    <div >

   
</body>
</html>

