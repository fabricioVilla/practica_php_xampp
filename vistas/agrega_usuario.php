<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .body_principal_add_usuario{
            height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
            background-color: green;
        }
        .contendor_formulario_usuario{
            width: 100%;
            height: 100%;
            background-image: url('../recursos/images/FONDO.jpg');
            display: flex;
            flex-wrap: wrap;
        }
        .columna_menu{
            width: 100px;
            height: 100vh;
            background-color: #2E465B;
        }
        .columna_menu button{
            background: none;
            display: flex;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
        }
        .imagen_button{
            width: 35px;
            height: auto;
            background: none;
           
        }
        .imagen_button_redes{
            width: 25px;
            height: auto;
            background: none;
        }
        .contendor_boton_avion{
            padding-top: 20px;
        }
        .contendor_boton_avion button{
            border: none;
            cursor: pointer;
        }
        .contendor_boton_redes{
            height: calc(100vh - 100px);
            display: flex;
            flex-direction: column;
            justify-content: flex-end; /* Alinea el contenido hacia abajo */

        }
        .contendor_boton_redes button{
            margin-bottom: 10px;
            border: none;
            cursor: pointer;
        }
        .contenedor_formulario_usuario{
            width: 75%;
            height: 90vh;
            margin: auto;
            background-color: white;
            display: flex;
            flex-wrap: wrap;
            overflow:hidden ;
        }
        .formulario_usuario_campos,.imagenes_precentacion{
            width: 50%;
            padding: 0;
            overflow:hidden ;
        }
        .imagenes_precentacion{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
       
        .body_principal_add_usuario{
            height: 100%;
        }
        .imagen_escritorio{
            height: auto;
            width: 100%;
        }
        .form_usuarios_datos{
            width: 100%;
            height: 100%;
            display: block;
        }
        .form_usuarios_datos label {
            width: 100%;
            margin: 5px;
        }
        .datos_personales{
            padding: 20px;
        }
        .datos_personales label{
            margin-top: 25px;
        }
        .datos_personales input{
            width: 80%;
            min-width: 200px;
            height: 30px;
            border: none;
        }
        .formulario_genero{
            padding: 20px;
            border-bottom: 1px solid #2E465B;
        }
        .formulario_genero input{
            margin-top: 25px;
        }
        .botones_formulrio{
            display: flex;
            justify-content: right;
        }
        .botones_formulrio input{
            margin: 10px;
            height: 35px;
            padding-left: 20px;
            padding-right: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 10px 10px 20px rgba(0, 0.1, 0.1, 0.2);
        }
        .imagen_escritorio{
            height: 92vh;
            width: auto;
            position: absolute;
            left: 0;
            top: 0;
            margin-top: -5px;
        }
        .imagenlogo{
            z-index: 1;
            position: absolute;
        }
        .boton_aceptar{
            background-color: #2E465B;
            color: white;
        }
        .input_icono{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #2E465B;
            width: fit-content;
            padding: 5px;
            border-radius: 5px;
        }
        .cuadricula_iconos{
            padding-right: 5px;
            border-right: 2px solid #E11F33;
            
        }
        .input_icono input{
            width: 300px;
            border: none;
            background: none;
            margin-left: 5px;
            color: white;
        }
    </style>
</head>
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
                        <form action="procesar.php" method="post" class="form_usuarios_datos">
                            <div class="datos_personales">
                                <label for="">Usuario</label> <br>
                                
                                <div class="input_icono">
                                    <div class="cuadricula_iconos">
                                        <img style="width: 28px; height: auto;" src="../recursos/images/ICONO 1.png" alt="">
                                    </div>
                                    <input type="text">
                                </div>
                                
                                <br><br>
                                <label for="">correo electrónico</label><br>
                                <div class="input_icono">
                                    <div class="cuadricula_iconos">
                                        <img style="width: 28px; height: auto;" src="../recursos/images/ICONO 2.png" alt="">
                                    </div>
                                    <input type="text">
                                </div>
                                <br><br>
                                <label for="">contraseña</label><br>
                                <div class="input_icono">
                                    <div class="cuadricula_iconos">
                                        <img style="width: 28px; height: auto;" src="../recursos/images/ICONO 3.png" alt="">
                                    </div>
                                    <input type="text">
                                </div><br><br>
                                <label for="">confirmar contraseña</label><br>
                                <div class="input_icono">
                                    <div class="cuadricula_iconos">
                                        <img style="width: 28px; height: auto;" src="../recursos/images/ICONO 4.png" alt="">
                                    </div>
                                    <input type="text">
                                </div><br>
                            </div>

                            <div class="formulario_genero">
                                <label for="">Género</label><br>
                                <label ><input type="checkbox"> masculino </label><br>
                                <label ><input type="checkbox"> femenino </label><br>
                                <label ><input type="checkbox"> recordarme siempre </label>

                            </div>
                                

                                <div class="botones_formulrio">
                                    <input class="boton_aceptar" type="button" value="aceptar">
                                    <input type="button" value="cancelar">
                                </div>
                        </form>
                </div>
                <div class="imagenes_precentacion">
                        <img class="imagen_escritorio" src="../recursos/images/main 2 (foto).png" alt="">
                        <img class="imagenlogo" src="../recursos/images/LOGO-AVION-ROJO-iSTRATEGY.png" alt="">
                </div>
            </div>

        </div>

    </div>
</body>
</html>
