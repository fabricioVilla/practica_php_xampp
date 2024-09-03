<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .body_principal_usuario{
            height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
        }
        .cuadro_foto{
            height: 250px;
            width: 200px;
            background-color: white;
            z-index: 3;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .fondo_usuario{
            height: 200px;
            width: 100%;
            background-color: black;
            position: absolute;
            z-index: 1;
            overflow: hidden;
        }
        .barra_opociones{
            width: calc(95% - 200px);
            height: 80px;
            background-color:  #233544;
            margin-top: calc(250px - 60px);
            z-index: 1;
            display: flex;
        }
        .header_usuario{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            position: relative;
            
        }
        .informacion_usuario{
            width: 95%;
            background-color: #233544;
            margin: auto;
            margin-top: 15px;
        }
        .barra_mensaje{
            height: 60px;
            width: 100%;
            background-color:#2E465B;
            display: flex;
            justify-content: flex-start;
        }
        .barra_generales{
            display: flex;    
            flex-wrap: wrap;    
        }
        .contenedor_botones{
            display: flex;
            width:fit-content;
            margin-left: auto;
            color: white;
        }  
        .imagen_icono{
            height: 40px;
            width: auto;
        }
        .nombre_puesto{
            width: fit-content;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .nombre_puesto p{
            margin: 0;
            width: 100%;
            margin: 10px;
            color: white;
        }
        .contenedor_check{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .boton_imagen_icono{
            border: none;
            background: none;
            cursor: pointer;
            color: white;
            padding-left: 15px;
            padding-right: 15px;
        }
        .limites_imagen{
            height: calc(100% - 5px);
            width: calc(100% - 5px);
            padding: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
        }
        .limites_imagen img{
            width: auto;
            height: 100%;
        }
        .icono_avion_rojo{
            width: 40px;
            height: auto;
        }
        .logo_mensaje{
            height: 40px;
            width: auto;
        }
        .contenedor_logo1{
            margin-left: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
        }
        .contenedor_logo0{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 10px;
        }
        .texto_bienvenina{
            color: white;
            display: flex;
            justify-content: center;
        }
        .texto_bienvenina p{
            margin: 0;
        }
        .texto2{
            color: white;
            margin: 10px;
        }
        .generales1{
            width: 300px;
            height: auto;
            margin-right: 10pxs;
        }
        .generales1 p, .generales2 p {
            border: none;
            margin: 12px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="body_principal_usuario">
        <div class="header_usuario">
            <div class="fondo_usuario">
                <img style="width: 100%; height: auto;" src="../recursos/images/portada.jpg" alt="">
            </div>

            <div class="cuadro_foto">
                <button class="limites_imagen">
                                <img src="../recursos/images/foto.jpg" alt="">
                </button>
            </div>
            <div class="barra_opociones">
                    <div class="nombre_puesto">
                        <p>pablo martinez</p> 
                        <p>diseñador web</p>
                    </div>
                    <div class="contenedor_botones" >
                       <button class="boton_imagen_icono">
                            <img class="imagen_icono" src="../recursos/images/escritura.png" alt="">
                       </button>
                        
                        <div class="contenedor_check">
                            <button class="boton_imagen_icono">
                                <img class="imagen_icono" src="../recursos/images/check.png" alt="">
                            </button>
                            <label for="">Verificado</label>
                           
                        </div>
                        <button class="boton_imagen_icono">
                            Inicio
                         </button>
                         <button class="boton_imagen_icono">
                            Galeria
                         </button>
                         <button class="boton_imagen_icono">
                            Novedades
                         </button>
                         <button class="boton_imagen_icono">
                            <img class="imagen_icono" src="../recursos/images/puntos.png" alt="">
                        </button>
                    </div>
                    
            </div>
        </div>

       <div  class="informacion_usuario">
            <div class="barra_mensaje">
                <div class="contenedor_logo0">
                    <img class="icono_avion_rojo" src="../recursos/images/avion.png" alt="">       
                </div>
                <div class="texto_bienvenina">
                    <div style="margin: auto;">
                       <p >Bienvenido a tu perfil</p>
                        <p >para opotenern mayor informacion</p> 
                    </div>
                    
                </div>
                <div class="contenedor_logo1">
                    <img class="logo_mensaje" src="../recursos/logo istrategy.svg" alt="">       
                </div>
            </div>
            <div class="barra_texto">
                <div class="texto2">
                    Sobre mi... <br> <br>
                    Soy Pablo Martínez, un diseñador web con 6 años de experiencia en la creación de identidad para empresas. Me destaco por mi liderazgo y organización, y 
                    estoy comprometido con mi empresa para ayudar a nuestros clientes a conseguir su identidad visual. Actualmente, busco mantenerme al día en cuanto a 
                    tendencias digitales para que pueda contribuir con mi experiencia y habilidades dentro de iStrategy
                
                </div>
                
            </div>
            <div class="barra_generales">
                <div class="generales1">
                    <p >Vista general</p>
                    <p>Trabajo</p>
                    <p>Educacion</p>
                    <p>Contacto</p>
                    <p>habilidades</p>
                </div>
                <div class="generales2">
                    <p>Vista general</p>
                    <p>
                        diseñador ux/ui
                    </p>
                    <p>ingeniero</p>
                </div>
            </div>
        
       </div>

    </div>
</body>
</html>
